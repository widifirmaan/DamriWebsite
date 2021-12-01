<?php

class Crudusermodel extends CI_Model
{
    public function getAllUser()
    {
        $uname = $this->session->userdata('username');
        $wongnjero= "SELECT tipe FROM pengguna WHERE username LIKE \"admin@admin.com\"";
        $sxx= "SELECT tipe FROM pengguna WHERE username LIKE \"$uname\"";
        if($sxx == $wongnjero)
        {
            $sql="SELECT * FROM ticketing";
            return $this->db->query($sql)->result_array();
        }
        else{
            $sql=("SELECT * FROM ticketing WHERE username LIKE \"$uname\"");
            return $this->db->query($sql)->result_array();
        }
    }
    public function getAllAdminUser()
    {$uname = $this->session->userdata('username');
        $wongnjero= "SELECT tipe FROM pengguna WHERE username LIKE \"admin@admin.com\"";
        $sxx= "SELECT tipe FROM pengguna WHERE username LIKE \"$uname\"";
        if($sxx == $wongnjero)
        {
            $sql="SELECT * FROM `pengguna`";
            return $this->db->query($sql)->result_array();
        }
    }
    public function getAllAsal()
    {$uname = $this->session->userdata('username');
        $wongnjero= "SELECT tipe FROM pengguna WHERE username LIKE \"admin@admin.com\"";
        $sxx= "SELECT tipe FROM pengguna WHERE username LIKE \"$uname\"";
        if($sxx == $wongnjero)
        {
            $sql="SELECT * FROM `asal`";
            return $this->db->query($sql)->result_array();
        }
    }
    public function getAllTujuan()
    {$uname = $this->session->userdata('username');
        $wongnjero= "SELECT tipe FROM pengguna WHERE username LIKE \"admin@admin.com\"";
        $sxx= "SELECT tipe FROM pengguna WHERE username LIKE \"$uname\"";
        if($sxx == $wongnjero)
        {
            $sql="SELECT * FROM `tujuan`";
            return $this->db->query($sql)->result_array();
        }
    }
    public function getAllJadwal()
    {$uname = $this->session->userdata('username');
        $wongnjero= "SELECT tipe FROM pengguna WHERE username LIKE \"admin@admin.com\"";
        $sxx= "SELECT tipe FROM pengguna WHERE username LIKE \"$uname\"";
        if($sxx == $wongnjero)
        {
            $sql="SELECT * FROM `jadwal`";
            return $this->db->query($sql)->result_array();
        }
    }
    
}