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

    public function get(){
        return $this->db->get('item');
      }

      public function bayar($data){
        return $this->db->insert('transaksi',$data);
      }

      public function getHistory()
      {
        $id=$this->session->userdata['id_user'];
        $this->db->select('transaksi.*, item.name, user.username');
        $this->db->from('transaksi transaksi');
        $this->db->join('item','item.id_item= transaksi.id_item');
        $this->db->join('user','user.id_user= transaksi.id_user');
        $this->db->where('user.id_user',$id);
        $query = $this->db->get();
        return $query->result();
      }
}