<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    
    public function login($username, $password){

        // Validasi
        
        $this->db->where('username', $username);
        
        $this->db->where('password', $password);
        
        $result = $this->db->get('user');
        
        if($result->num_rows() == 1){
            // return $result->result_array();
            return $result->row(0)->id_user;
        
        } else {
        
            return false;
        
        }
        
    }

    public function getUserQueryArray()
    {
      $query= $this->db->query("Select * from user");
      return $query->result_array();
    }
        
}