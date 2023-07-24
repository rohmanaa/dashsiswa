<?php
class User_model extends CI_Model{

    public $table='tb_user';
    public $id='id';
    public $order='ASC';

function __construct()
{
    parent::__construct();
}

function insert($data){
    $this->db->insert($this->table, $data);
}

function detail_user($id){
    $this->db->select('*');
    $this->db->from('tb_user');
    $this->db->where('id', $id);
    return $this->db->get();
}

function update_user($id, $dataUpdate){
    $this->db->where('id', $id);
    $this->db->update('tb_user', $dataUpdate);
}

function delete($id){
    $this->db->where('id', $id);
    $this->db->delete($this->table);

}

function get_all(){
    $this->db->order_by($this->id,$this->order);
    return $this->db->get($this->table)->result();
}

}
?>


<!-- 
1. Nama Fungsi 
2. Nama Argumen 
    - Array 
    - Object 
    - Value {string : int}

function namaFungsi ( $arg1 (value) , $arg2 (array) , $arg3 ){

}


function namaFungsi ( 23 , [
        'nm_lengkap' => $this->input->post('nm_lengkap')
    ]) -->