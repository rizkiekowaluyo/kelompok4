<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('articleuser');
        $this->load->model('itemuser');
        $this->load->model('user_model');
        // if (!isset($_SESSION['user_logged'])) {
        //     $this->session->set_flashdata("error","please login first");
        //     redirect("home/loginpage");
        // }
    }

    public function profile(){
        $data['cart'] = $this->cart->contents();
        $this->load->view('user/header',$data);
        $this->load->view('user/profile');
    }

    public function aboutus(){
        $data['cart'] = $this->cart->contents();
        $this->load->view('user/header',$data);
        $this->load->view('user/aboutus');
    }

    public function contact(){
        $data['cart'] = $this->cart->contents();
        $this->load->view('user/header',$data);
        $this->load->view('user/contact');
    }

    public function blog(){
        $data['cart'] = $this->cart->contents();
        $data['blog_array']=$this->articleuser->getBlogQueryArray();
        $this->load->view('user/header',$data);
        $this->load->view('user/blog',$data);
    }

    public function blogdetail(){
        $data['blog_array']=$this->articleuser->getBlogQueryArray();
        $this->load->view('user/header',$data);
        $this->load->view('user/blogdetail',$data);
    }

    public function item(){
        $data['product'] = $this->itemuser->getItemQueryArray();
        $data['cart'] = $this->cart->contents();
        //$data['user_array']=$this->user_model->getUserQueryArray();
        $this->load->view('user/header',$data);
        $this->load->view('user/item',$data);
    }

    public function beli(){
        $data = array(
                'id_item' => $this->input->post('id_item'),
          'name' => $this->input->post('name'),
          'price' => $this->input->post('price'),
          'photo' => $this->input->post('photo'),
          'qty' =>$this->input->post('qty')
          );
      $this->cart->insert($data);
        redirect('user/item');
      }

    public function keranjang_belanja(){
        $data['cart'] = $this->cart->contents();
        $data['product']=$this->itemuser->getItemQueryArray();
        $this->load->view('user/header',$data);
        $this->load->view('user/keranjangbelanja',$data);
      }
    
      public function ubah(){
        $cart_info = $_POST['cart'] ;
          foreach( $cart_info as $id => $cart)
          {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $gambar = $cart['photo'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];
            $data = array('rowid' => $rowid,
                    'price' => $price,
                    'photo' => $gambar,
                    'amount' => $amount,
                    'qty' => $qty);
            $this->cart->update($data);
          }
        redirect('user/keranjang_belanja');
      }
    
      public function hapus($rowid){
        if ($rowid =="semua"){
            $this->cart->destroy();
          }else{
            $data = array('rowid' => $rowid,
                      'qty' =>0);
            $this->cart->update($data);
          }
        redirect('user/keranjang_belanja');
    }
    
    public function bayar(){
        $cart = $this->cart->contents();
          foreach($cart as $item){
            $data = array(
            'id_user' => $this->session->userdata('id_user'),
              'id_item' => $item['id_item'],
              'name' => $item['name'],
              'date'=> date('Y-m-d'),
              'qty' => $item['qty'],
              'status'=>'Processed',
              'saldo_total' => $item['subtotal']
            );
            $this->itemuser->bayar($data);
          }
        $this->cart->destroy();
        redirect('user/keranjang_belanja');
      }

      public function seehistory(){
        $data['history']=$this->itemuser->getHistory();
        $data['cart'] = $this->cart->contents();
        $this->load->view('user/header',$data);
		    $this->load->view('user/history',$data);
    }
}