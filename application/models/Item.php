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
}