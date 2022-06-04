<?php

namespace Kel1\ProjekAkhirPemweb\models;

use Database;
use PDO;
use PDOException;

class Admin_model
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

    public function fetchAll()
    {
        $que = ("SELECT * FROM riwayatKonsultasi");
        $this->db->query($que);
        return $this->db->resultSet();
    }

    public function fetchName($dataHistori)
    {
        $listIdUser = [];
        foreach ($dataHistori as $histori) {
            array_push($listIdUser, $histori['idPengguna']);
        }
        $this->db->query("SELECT nama, id_user FROM pengguna WHERE id_user IN ('" . implode("','", $listIdUser) . "')");

        return $this->db->resultSet();
    }

    // public function fetchName()
    // {
    //     $que = ("SELECT nama, id_user FROM pengguna");
    //     $this->db->query($que);
    //     return $this->db->resultSet();
    // }

    public function getAllHistory($idPengguna)
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getonProcessHistory($idPengguna)
    {
        $this->db->query('SELECT * FROM ' . $this->table . " WHERE status = 'Belum Terverifikasi'");
        return $this->db->resultSet();
    }

    public function getFinishedHistory($idPengguna)
    {
        $this->db->query('SELECT * FROM ' . $this->table . " WHERE status = 'Selesai' or status = 'Tidak Valid' or status = 'Terverifikasi'");
        return $this->db->resultSet();
    }

    public function updateStatus($status, $id)
    {
        $que = ("UPDATE riwayatKonsultasi SET status = '$status' where id = '$id'");
        $this->db->query($que);
        $value = $this->db->execute();
        return $value;
    }


    public function fetchImage($id)
    {
        $this->db->query("SELECT invoice FROM riwayatkonsultasi WHERE $id = '$id' ");
        return $this->db->resultSet();
    }
}
