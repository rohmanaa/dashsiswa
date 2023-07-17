<?php
class Siswa extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function siswa(){
        $this->load->view('siswa/siswa');
    } 
    }
?>
