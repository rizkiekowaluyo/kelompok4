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
        $this->load->view('user/header');
        $this->load->view('user/profile');
    }

    public function aboutus(){
        $this->load->view('user/header');
        $this->load->view('user/aboutus');
    }

    public function contact(){
        $this->load->view('user/header');
        $this->load->view('user/contact');
    }

    public function blog(){
        $data['blog_array']=$this->articleuser->getBlogQueryArray();
        $this->load->view('user/header');
        $this->load->view('user/blog',$data);
    }

    public function blogdetail(){
        $data['blog_array']=$this->articleuser->getBlogQueryArray();
        $this->load->view('user/header');
        $this->load->view('user/blogdetail',$data);
    }

    public function item(){
        $data['item_array']=$this->itemuser->getItemQueryArray();
        $data['user_array']=$this->user_model->getUserQueryArray();
        $this->load->view('user/header');
        $this->load->view('user/item',$data);
    }

}