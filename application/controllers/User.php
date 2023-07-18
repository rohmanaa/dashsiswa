<?php
class User extends CI_Controller{

    function userlist(){
        $this->load->view('user/user_list');
    } 

     function user_add(){
        $this->load->view('user/user_tambah');
    } 
    }
?>