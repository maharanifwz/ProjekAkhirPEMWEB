<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;

use Kel1\ProjekAkhirPemweb\models\Admin_model;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



session_start();

class AdminController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Admin_model();
    }

    public function __destruct()
    {
        unset($this->model);
    }

    public function showIndex()
    {
        $this->show('admin');
    }

    public function showDetail()
    {
        $id = $_POST['idHist'];
        $data['user'] = $this->model->fetchDetail($id);
        $idUser = $data['user'][0]['idPengguna'];
        $listHewan = $data['user'][0]['listHewan'];
        $idHewan = explode(" ", $listHewan);
        $data['hewan'] = $this->dataHewan($idHewan);
        $name = $this->model->fetch1Name($idUser);

        $data['user'][0]['id_user'] = $name[0]['id_user'];
        $data['user'][0]['nama'] = $name[0]['nama'];
        $data['user'][0]['email'] = $name[0]['email'];

        $status = $data['user'][0]['status'];
        if ($status == "Belum Terverifikasi" || $status == 'Pembayaran Tidak Valid') {
            $data['user'][0]['status'] = "<i class='fa-solid fa-circle fa-2xs'></i> $status";
        } else {
            $data['user'][0]['status'] = "<i class='fa-solid fa-circle green fa-2xs'></i> $status";
        };

        $this->show('detailAdmin', $data);
    }

    public function ShowAllHistory()
    {
        if(isset($_SESSION['isAdmin'])){
            $data = [];
        $data['filter'] = 'all';
        if (isset($_GET['filter'])) {
            $filter = $_GET['filter'];
            if ($filter == 'all') {
                $data['riwayat'] = $this->model->getAllHistory();
                $nama = $this->model->fetchName($data['riwayat']);
            } else if ($filter == 'unverified') {
                $data['riwayat'] = $this->model->getUnverifiedHistory();
                $nama = $this->model->fetchName($data['riwayat']);
                $data['filter'] = 'unverified';
            } else if ($filter == 'onProcess') {
                $data['riwayat'] = $this->model->getonProcessHistory();
                $nama = $this->model->fetchName($data['riwayat']);
                $data['filter'] = 'onProcess';
            } else {
                $data['riwayat'] = $this->model->getFinishedHistory();
                $nama = $this->model->fetchName($data['riwayat']);
                $data['filter'] = 'Finished';
            }
        } else {
            $data['riwayat'] = $this->model->getAllHistory();
            $nama = $this->model->fetchName($data['riwayat']);
        }

        for ($i = 0; $i < count($data['riwayat']); $i++) {
            foreach ($nama as $name) {
                if ($name['id_user'] == $data['riwayat'][$i]['idPengguna']) {
                    array_push($data['riwayat'][$i], $name['id_user'], $name['nama']);
                }
            }
            array_push($data['riwayat'][$i], $i);
        }
        $this->show('admin', $data);
        }else{
                header("HTTP/1.1 403 Not Found");

        }
        
    }

    public function updateStatus()
    {
        $status = $_POST["flexRadioDefault"];
        $id = $_POST["idHist"];
        $value = $this->model->updateStatus($status, $id);

        if (($status == 'Terverifikasi')) {
            $this->sendVerifiedEmail($_POST['email'], $_POST['nama'], $_POST['tanggal'], $_POST['pembayaran']);
        }
        
        // $status = "Status berhasil di";
        // header('Location: '. BASEURL . '/admin');
        $this->showDetail();
    }

    public function sendVerifiedEmail($ReceiverEmail, $nama, $tanggal, $pembayaran)
    {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 1;                               //Enable verbose debug output
            $mail->isSMTP();                                    //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';               //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                           //Enable SMTP authentication
            $mail->Username   = 'harunasrori408@gmail.com';     //SMTP username
            $mail->Password   = 'kewjhrjmhxudmvuj';             //SMTP password
            $mail->SMTPSecure = 'tls';                          //Enable implicit TLS encryption
            $mail->Port       = "587";                          //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('harunasrori408@gmail.com', 'PetMate');
            $mail->addAddress($ReceiverEmail);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Booking mu Telah Terkonfirmasi';
            $body = "<p>Hi $nama, \n\n
            Terimakasih telah memilih PetMate sebagai teman konsultasi mu. \n
            Pembayaran anda telah tervalidasi, dengan ini kami ingatkan mengenai jadwal konsultasi anda pada :\n
            Tanggal\t\t\t\t : $tanggal \n
            Nominal Pembayaran\t : $pembayaran \n\n

            Terimakasih atas transaksi anda, kami segenap tim PetMate berharap konsultasi anda nantinya akan bermanfaat bagi teman Pet kalian.</p>";

            $mail->Body    = $body;
            $mail->AltBody = strip_tags($body);

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public function dataHewan($idHewan)
    {
        $dataHewan = [];
        foreach ($idHewan as $id) {
            if ($id != "") {
                $data = $this->model->fetchHewan($id);
                array_push($dataHewan, $data[0]);
            }
        };
        return $dataHewan;
    }
}
