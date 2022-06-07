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

    public function fetchDetail($id)
    {
        $query = ("SELECT * FROM riwayatKonsultasi WHERE id = '$id' ");
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function fetch1Name($iduser)
    {
        $que = ("SELECT nama, id_user, email FROM pengguna WHERE id_user = '$iduser' ");
        $this->db->query($que);
        return $this->db->resultSet();
    }

    public function getAllHistory()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUnverifiedHistory()
    {
        $this->db->query('SELECT * FROM ' . $this->table . " WHERE status = 'Belum Terverifikasi'");
        return $this->db->resultSet();
    }

    public function getonProcessHistory()
    {
        $this->db->query('SELECT * FROM ' . $this->table . " WHERE status = 'Terverifikasi'");
        return $this->db->resultSet();
    }

    public function getFinishedHistory()
    {
        $this->db->query('SELECT * FROM ' . $this->table . " WHERE status = 'Selesai' or status = 'Tidak Valid'");
        return $this->db->resultSet();
    }

    public function updateStatus($status, $id)
    {
        $que = ("UPDATE riwayatKonsultasi SET status = '$status' where id = '$id'");
        $this->db->query($que);
        $value = $this->db->execute();
        return $value;
    }

    public function fetchHewan($idHewan)
    {
        $query = ("SELECT nama, jenis, keluhan FROM hewan WHERE id = '$idHewan' ");
        $this->db->query($query);
        return $this->db->resultSet();
    }
}
