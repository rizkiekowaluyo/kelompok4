<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('item');
    }

    public function InsertData($data){
        $this->db->insert("item", $data);
    }

    public function seeitem(){
        $allitem = $this->db->query("select * from item");
        return $allitem->result_array();
    }

    public function DeleteData($id_item)
    {
      $this->db->query("DELETE from item where id_item =".$id_item);
    }

    public function GetById($id_item)
    {
       $query = $this->db->query("SELECT * from item where id_item ='$id_item'");
       return $query->result_array();
    }

    public function updateWithImage($data){
        // var_dump($data);
        $this->db->query("update item set id_item=".$data['id_item'].",
        name=".$data['name'].",description_name='".$data['description_name']."', vendor='".$data['vendor']."',price='".$data['price']."', stock_item='".$data['stock_item']."',
        photo='".$data['photo']."' where id_item = '".$data['id_item']."'");
    }
    
}