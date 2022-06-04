<?php

namespace Kel1\ProjekAkhirPemweb\models;

use Database;
use PDO;
use PDOException;

class Admin_model{

    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function __destruct() {
        unset($this->db);
    }

    public function fetchAll()
    {
        $que = ("SELECT * FROM riwayatKonsultasi");
        $this->db->query($que);
        return $this->db->resultSet();
    }

    public function fetchName()
    {
        $que = ("SELECT nama, id_user FROM pengguna");
        $this->db->query($que);
        return $this->db->resultSet();
    }

    public function fetchYetConfirm()
    {
        $que = ("SELECT * FROM riwayatKonsultasi where status = 'Belum Terverifikasi' ");
        $this->db->query($que);
        return $this->db->resultSet();
    }

    public function fetchConfirm()
    {
        $que = ("SELECT nama FROM riwayatKonsultasi where status = 'Terverifikasi'");
        $this->db->query($que);
        return $this->db->resultSet();
    }

    public function fetchDetail($id)
    {
        $query = ("SELECT * FROM riwayatKonsultasi WHERE id = '$id' ");
        $this->db->query($query);
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