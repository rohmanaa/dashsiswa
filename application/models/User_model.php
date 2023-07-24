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

function update_user($id){
    $this->db->from('tb_user');
    $this->db->where('id', $id);
    return $this->db->get();
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
