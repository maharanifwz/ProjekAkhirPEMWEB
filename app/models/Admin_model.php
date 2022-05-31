<?php

namespace Kel1\ProjekAkhirPemweb\models;

class Admin_model{

    public function fetchAll()
    {
        $que = ("SELECT nama FROM riwayatKonsultasi");
        $this->db->query($que);
        return $this->db->resultSet();
    }

    public function fetchYetConfirm()
    {
        $que = ("SELECT nama FROM riwayatKonsultasi where status = 'Belum'");
        $this->db->query($que);
        return $this->db->resultSet();
    }

    public function fetchConfirm()
    {
        $que = ("SELECT nama FROM riwayatKonsultasi where status = 'Sudah'");
        $this->db->query($que);
        return $this->db->resultSet();
    }

    

    public function addImage()
    {
        
    }

    public function fetchImage($idUser)
    {
        $this->db->query("SELECT nama FROM riwayatKonsultasi where id_user = '$idUser' " );
        return $this->db->resultSet();
    }



}