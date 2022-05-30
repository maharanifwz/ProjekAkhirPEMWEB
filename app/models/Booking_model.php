<?php

namespace Kel1\ProjekAkhirPemweb\Models;

use Database;
use PDO;
use PDOException;

class Booking_model{
    // private hours =[
    //     08:00:00 , 08:30:00 , 09:00:00 
    // ];

    private $table = 'riwayatKonsultasi';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getHour(string $date)
    {
        $this->db->query('SELECT jam FROM ' . $this->table);
        return $this->db->resultSet();
    }
}

