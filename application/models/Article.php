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

    public function DeleteData($id_article)
    {
      $this->db->query("DELETE from article where id_article =".$id_article);
    }

    public function GetById($id_article)
    {
       $query = $this->db->query("SELECT * from article where id_article ='$id_article'");
       return $query->result_array();
    }

    public function updateWithImage($data){
        // var_dump($data);
        $this->db->query("update article set id_article=".$data['id_article'].",
        
        author='".$data['author']."', date='".$data['date']."', title='".$data['title']."',content='".$data['content']."',
        
        image_file='".$data['image_file']."' where id_article = '".$data['id_article']."'");
    }
}