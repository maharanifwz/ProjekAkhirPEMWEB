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

    public function getDetailHistory($id)
    {
        $query = ("SELECT * FROM riwayatKonsultasi WHERE id = '$id' ");
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getUserName($iduser)
    {
        $que = ("SELECT nama, id_user FROM pengguna WHERE id_user = '$iduser' ");
        $this->db->query($que);
        return $this->db->resultSet();
    }

    public function getUserPet($idHewan)
    {
        $query = ("SELECT * FROM hewan WHERE id = '$idHewan' ");
        $this->db->query($query);
        return $this->db->resultSet();
    }
    
    public function cancelBooking($id)
    {
        $status = "Dibatalkan";
        $que = ("UPDATE riwayatKonsultasi SET status = '$status' where id = '$id'");
        $this->db->query($que);
        $value = $this->db->execute();
        return $value;
    }
    
}
