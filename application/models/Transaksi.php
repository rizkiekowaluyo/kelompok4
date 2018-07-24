<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->model('Transaksi');
    }

    public function seetransaction(){
        $alluser = $this->db->query("select * from transaksi");
        return $alluser->result_array();
    }

    public function InsertData($data){
        $this->db->insert("transaksi", $data);
    }

    public function DeleteData($id_transaksi)
    {
      $this->db->query("DELETE from transaksi where id_transaksi =".$id_transaksi);
    }

    public function GetById($id_transaksi)
    {
       $query = $this->db->query("SELECT * from transaksi where id_transaksi ='$id_transaksi'");
       return $query->result_array();
    }

    public function updateWithImage($data){
        // var_dump($data);
        $this->db->query("update transaksi set id_transaksi=".$data['id_transaksi'].",
        
        id_barang='".$data['id_barang']."', nama_barang='".$data['nama_barang']."', id_user='".$data['id_user']."',nama_user='".$data['nama_user']."', alamat_user='".$data['alamat_user']."', harga='".$data['harga']."',
        
        status='".$data['status']."' where id_transaksi = '".$data['id_transaksi']."'");
    }
}