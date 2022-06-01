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

    //Upload Image
    public function addImage($fileName, $id)
    {
        $que = ("UPDATE riwayatkonsultasi  SET invoice = '$fileName' WHERE id =' $id' ");
        $this->db->query($que);
        $this->db->execute();
    }


    public function addHistory($fileName, $id)
    {
        $query = ("UPDATE riwayatkonsultasi  SET invoice = '$fileName' WHERE id =' $id' ");
        $que = ("INSERT INTO riwayatkonsultasi  VALUES 
        (NULL, '$nama','$username', '$email', '$alamat', '$pwd')");
        $this->db->query($query);
        $this->db->execute();
    }

}
