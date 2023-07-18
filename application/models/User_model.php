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

function get_all(){
    // $this->db->order_by($this->id,$this->order);
    return $this->db->get($this->table)->result();
}
}
?>