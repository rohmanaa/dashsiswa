<?php
class Siswa extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function siswadb(){
        $this->load->view('siswa/siswa_db');
    } 
    }
?>
