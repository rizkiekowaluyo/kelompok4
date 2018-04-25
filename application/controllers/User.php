<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if (!isset($_SESSION['user_logged'])) {
            $this->session->set_flashdate("error","please login first");
            redirect("home/loginpage");
        }
    }
    public function profile(){
        $this->load->view('user/profile');
    }

}