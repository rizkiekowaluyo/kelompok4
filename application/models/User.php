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

    public function DeleteData($id)
    {
      $this->db->query("DELETE from user where id =".$id);
    }

    public function GetById($id)
    {
       $query = $this->db->query("SELECT * from user where id ='$id'");
       return $query->result_array();
    }

    public function updateWithImage($data){
        // var_dump($data);
        $this->db->query("update user set id=".$data['id'].",
        
        name='".$data['name']."', address='".$data['address']."', telp='".$data['telp']."',password='".$data['password']."', username='".$data['username']."', email='".$data['email']."',
        
        photo='".$data['photo']."' where id = '".$data['id']."'");
    }
}