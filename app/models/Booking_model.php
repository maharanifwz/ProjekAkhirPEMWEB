<?php

namespace Kel1\ProjekAkhirPemweb\Models;

use Database;
use PDO;
use PDOException;

class Booking_model
{
    private $hours = [
        '08:00:00', '08:30:00', '09:00:00', '09:30:00',
        '10:00:00', '10:30:00', '11:00:00', '11:30:00',
        '12:00:00', '12:30:00', '13:00:00', '13:30:00',
        '14:00:00', '14:30:00', '15:00:00', '15:30:00',
        '16:00:00', '16:30:00', '17:00:00'
    ];

    private $table = 'riwayatKonsultasi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function __destruct()
    {
        unset($this->db);
    }

    public function getAvailableHour($date, $jumlahHewan)
    {
        $hours = [];
        $this->db->query('SELECT * FROM ' . $this->table . " WHERE tanggal = '$date'");
        $Booking_data = $this->db->resultSet();
        foreach ($Booking_data as $jam) {
            $jam = explode(" ", $jam['jam']);
            for ($i = 0; $i < count($this->hours); $i++) {
                if (in_array($this->hours[$i], $jam)) {
                    unset($this->hours[$i]);
                }
            }
        }

        for ($i = 0; $i < count($this->hours); $i++) {
            $hour = [];
            $temp = true;
            for ($j = $i + 1; $j <= $i + $jumlahHewan; $j++) {
                if (!isset($this->hours[$j])) {
                    $temp = false;
                } else {
                    array_push($hour, $this->hours[$j]);
                }
            }

            if ($temp) {
                array_push($hours, $hour);
            }
        }
        return $hours;
    }

    public function uploadDataHewan($data)
    {
        $listIdHewan = [];
        for ($i = 0; $i < $data['jumlahHewan']; $i++) {
            $name = $data["name" . $i];
            $type = $data["type" . $i];
            $race = $data["race" . $i];
            $gender = $data["gender" . $i];
            $weight = $data["weight" . $i];
            $age = $data["age" . $i];
            $complaint = $data["complaint" . $i];
            $query = ("INSERT INTO hewan VALUES (
                NULL, '$name','$type', '$race', '$gender', '$weight', '$age', '$complaint')");

            $this->db->query($query);
            $id_inserted_data = $this->db->execute_returnId();

            array_push($listIdHewan, $id_inserted_data);
        }
        return $listIdHewan;
    }

    public function addData($fileName, $data)
    {
        $tanggal = $data['tanggal'];
        $jam = $data['jam'];
        $listIdHewan = $data['listHewan'];
        $jumlahHewan  = $data["jumlahHewan"];
        $idPengguna = $data['idPengguna'];
        $status = "Belum Terverifikasi";

        $que = ("INSERT INTO riwayatkonsultasi  VALUES (
            NULL, $tanggal. $jam, $listIdHewan, $jumlahHewan, $idPengguna, $fileName, $status)");
        $this->db->query($query);
        $this->db->execute();
    }    

}
