<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articleuser extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('articleuser');
    }

    public function getBlogQueryArray()
    {
      $query= $this->db->query("Select * from article");
      return $query->result_array();
    }
}