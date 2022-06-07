<?php

namespace Kel1\ProjekAkhirPemweb\models;

use Database;
use PDO;
use PDOException;

class Riwayat_model
{
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

    public function getAllHistory($idPengguna)
    {
        $this->db->query('SELECT * FROM ' . $this->table . " WHERE idPengguna = '$idPengguna'");
        // $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getonProcessHistory($idPengguna)
    {
        $this->db->query('SELECT * FROM ' . $this->table . " WHERE idPengguna = '$idPengguna' and  (status = 'Terverifikasi' or status = 'Belum Terverifikasi')");
        // $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getFinishedHistory($idPengguna)
    {
        $this->db->query('SELECT * FROM ' . $this->table . " WHERE idPengguna = '$idPengguna' and  (status = 'Selesai' or status = 'Pembayaran Tidak Valid')");
        // $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAllHewan($dataHistori)
    {
        $listIdHewan = [];
        foreach ($dataHistori as $histori) {
            $listHewan_full = explode(" ", $histori['listHewan']);
            foreach ($listHewan_full as $idHewan) {
                array_push($listIdHewan, $idHewan);
            }
        }

        $this->db->query("SELECT * FROM hewan WHERE id IN ('" . implode("','", $listIdHewan) . "')");

        return $this->db->resultSet();
    }
    
}
