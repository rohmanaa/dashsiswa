<?php
class User_model extends CI_Model{

    public $table='tb_user';
    public $id='id';

function __construct()
{
    parent::__construct();
}

function insert($data){
    $this->db->insert($this->table, $data);
}

}
?>