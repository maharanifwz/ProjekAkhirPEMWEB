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
        $hours_default = $this->hours;
        $hours = [];
        $this->db->query('SELECT * FROM ' . $this->table . " WHERE tanggal = '$date'");
        $Booking_data = $this->db->resultSet();
        foreach ($Booking_data as $booking) {
            $jam = explode(" ", $booking['jam']);
            for ($i = 0; $i < count($hours_default); $i++) {
                if (in_array($hours_default[$i], $jam)) {
                    unset($hours_default[$i]);
                }
            }
        }

        for ($i = 0; $i < count($hours_default); $i++) {
            $hour = [];
            $temp = true;
            for ($j = $i + 1; $j <= $i + $jumlahHewan; $j++) {
                if (!isset($hours_default[$j])) {
                    $temp = false;
                } else {
                    array_push($hour, $hours_default[$j]);
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
            $idPengguna = $data["idPengguna"];
            $query = ("INSERT INTO hewan VALUES (
                NULL, '$name','$type', '$race', '$gender', '$weight', '$age', '$complaint', '$idPengguna')");

            $this->db->query($query);
            $id_inserted_data = $this->db->execute_returnId();

            array_push($listIdHewan, $id_inserted_data);
        }
        return $listIdHewan;
    }

    public function insertData($fileName, $data)
    {
        $tanggal = $data['tanggal'];
        $jam = $data['jam'];
        $listIdHewan = $data['listIdHewan'];
        $jumlahHewan  = $data["jumlahHewan"];
        $idPengguna = $data['idPengguna'];
        $status = "Belum Terverifikasi";

        $query = ("INSERT INTO riwayatkonsultasi  VALUES (
            NULL, '$tanggal', '$jam', '$listIdHewan', '$jumlahHewan', '$idPengguna', '$fileName', '$status')");
        $this->db->query($query);
        $this->db->execute();
    }    

}
