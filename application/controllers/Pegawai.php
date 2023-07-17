<?php
class Pegawai extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function pegawai(){
        $this->load->view('pegawai/pegawai');
    } 
    }
?>
