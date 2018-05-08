<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Itemuser extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('itemuser');
    }
    public function getItemQueryArray()
    {
      $query= $this->db->query("Select * from item");
      return $query->result_array();
    }
}