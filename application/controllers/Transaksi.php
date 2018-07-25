<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Transaksi extends CI_Controller{
    public function __construct(){
        parent::__construct();
        
        
    }
    //untuk proses transaksi
    public function processtransaction(){
        $item = $this->uri->segment(3);
        $cek = $this->db->where('username',$_SESSION['username'])->get('user');
        if ($cek->num_rows()>0) {
            $user = $cek->row_array();
            $id = $user['id_user'];
            $this->db->trans_start();
            $data = array(
                'id_user' => $id,
                'date' => date("Y-m-d"),
                'is_active' => 1
            );

            $this->db->insert('transaction',$data);
            $id_transaction = $this->db->insert_id();

            $datadetail = array(
                'id_transaction' => $id_transaction,
                'id_item' => $item
            );

            $this->db->insert('transactiondetail',$datadetail);
            $cekStok = $this->db->where('id_item',$item)->get('item')->row_array();
            $stok = $cekStok['stock_item'];
            if ($stok>0) {                
                $sisaStok = array(
                    'stock_item' => $stok-1
                );
                $this->db->where('id_item',$item)->update('item',$sisaStok);   
            }else{
                print_r("stok kosong"); die();
            }
            if ($this->db->trans_status() === FALSE)  {
                $this->db->trans_rollback();

            }else{
                $this->db->trans_commit();

            }
            redirect(site_url().'/user/item');
        }
    }



}