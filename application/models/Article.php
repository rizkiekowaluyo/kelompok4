<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('article');
    }

    public function InsertData($data){
        $this->db->insert("article", $data);
    }

    public function seearticle(){
        $allarticle = $this->db->query("select * from article");
        return $allarticle->result_array();
    }
}