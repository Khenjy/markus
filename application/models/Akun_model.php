<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Akun_Model extends CI_Model
    {
        function save($tabel, $data)
        {
            $this->db->insert('akun', $data);
        }

        function tampil($tabel)
        {
            return $this->db->get($tabel);
        }
    }
?>