<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping_cart extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_cart');
  }

  public function index(){

    $data['item_array'] = $this->M_cart->get()->result();
    $data['cart'] = $this->cart->contents();
    $this->load->view('user/item',$data);
  }

  public function beli(){
    $data = array(
            'id' => $this->input->post('id_item'),
      'name' => $this->input->post('name'),
      'price' => $this->input->post('price'),
      'gambar' => $this->input->post('photo'),
      'qty' =>$this->input->post('qty')
      );
  $this->cart->insert($data);
    redirect('Shopping_cart');
  }
  //menampilkan item di keranjang
  public function keranjang_belanja(){
    $data['cart'] = $this->cart->contents();
    $this->load->view('user/keranjangbelanja',$data);
  }
  //untuk mengubah item yang sudah masuk cart
  public function ubah(){
    $cart_info = $_POST['cart'] ;
      foreach( $cart_info as $id => $cart)
      {
        $rowid = $cart['rowid'];
        $price = $cart['price'];
        $gambar = $cart['gambar'];
        $amount = $price * $cart['qty'];
        $qty = $cart['qty'];
        $data = array('rowid' => $rowid,
                'price' => $price,
                'gambar' => $gambar,
                'amount' => $amount,
                'qty' => $qty);
        $this->cart->update($data);
      }
    redirect('Shopping_cart/keranjang_belanja');
  }
  //untuk menghapus list di shopping cart
  public function hapus($rowid){
    if ($rowid =="semua"){
        $this->cart->destroy();
      }else{
        $data = array('rowid' => $rowid,
                  'qty' =>0);
        $this->cart->update($data);
      }
    redirect('Shopping_cart/keranjang_belanja');
}
// fungsi untuk membayar item yang di cart
public function bayar(){
    $cart = $this->cart->contents();
      foreach($cart as $item){
        $data = array(
          'id_produk' => $item['id'],
          'qty' => $item['qty'],
          'subtotal' => $item['subtotal']
        );
        $this->M_cart->bayar($data);
      }
    $this->cart->destroy();
    redirect('Shopping_cart/keranjang_belanja');
  }
}
