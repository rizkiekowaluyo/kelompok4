<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->model('User');
    }

    public function seeuser(){
        $alluser = $this->db->query("select * from user");
        return $alluser->result_array();
    }

    public function InsertData($data){
        $this->db->insert("user", $data);
    }

    public function DeleteData($id_user)
    {
      $this->db->query("DELETE from user where id_user =".$id_user);
    }
}