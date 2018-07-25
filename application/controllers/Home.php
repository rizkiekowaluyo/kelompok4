<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    function __construct()
    {
        parent::__construct();
			$this->load->helper('url');
			$this->load->model('user_model');
    }

    public function index(){
        $this->load->view('header');
        $this->load->view('user/home');
    }

    //fungsi untuk loginpage
    public function loginpage(){
         if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');
            if ($this->form_validation->run() ==TRUE) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $this->db->select('*');
                $this->db->from('user');
                $this->db->where(array('username' => $username, 'password' => $password));
                $query = $this->db->get();

                $admin = $query->row();
                if ($admin->name) {
                    $this->session->set_flashdata("success","You're Logged in");

                    $_SESSION['user_logged'] =TRUE;
                    $_SESSION['username'] = $admin->username;
                    $_SESSION['id_user'] = $admin->id_user;
                    $_SESSION['name'] = $admin->name;
                    $_SESSION['address'] = $admin->address;

                    redirect("user/profile", "refresh");
                }else {
                    $this->session->set_flashdata("error", "No data in database");
                    redirect("home/loginpage", "refresh");
                }
            }
        }
        $this->load->view('loginpage');
    }
    //untuk register
    public function registerpage(){
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('address','Address','required');
            $this->form_validation->set_rules('telp','Telp','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('photo','Photo','required');
            
            
            if ($this->form_validation->run() == TRUE) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $name = $this->input->post('name');
                $address = $this->input->post('address');
                $telp = $this->input->post('telp');
                $email = $this->input->post('email');
                $photo = $_FILES['photo']['name'];

                if($photo=''){}else {
                    $config['upload_path'] = './asset/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    
                    $this->load->library('upload', $config);
                    
                    if ( ! $this->upload->do_upload('photo')){
                        $error = array('error' => $this->upload->display_errors());
                    }
                    else{
                        $photo = $this->upload->data('file_name');
                    }

                    $data = array(
                        'username' => $username,
                        'password' => $password,
                        'name' => $name,
                        'address' => $address,
                        'telp' => $telp,
                        'email' => $email,
                        'photo'=> $photo);
                    $this->db->insert('user',$data);
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata("success","Your account has been registered");
                    redirect("home/registerpage","refresh");
                    var_dump($data);
                }
            }
        }

        $this->load->view('registerpage');
    }

    public function aboutus(){

        $this->load->view('header');
        $this->load->view('aboutus');
    }

    public function contact(){
        
        $this->load->view('header');
        $this->load->view('contact');
    }

    public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');

        // Set message
        $this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

        redirect('home/loginpage');
    }

    public function loginadmin(){
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');
            if ($this->form_validation->run() ==TRUE) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $this->db->select('*');
                $this->db->from('admin');
                $this->db->where(array('username' => $username, 'password' => $password));
                $query = $this->db->get();

                $admin = $query->row();
                if ($admin->name) {
                    $this->session->set_flashdata("success","You're Logged in");

                    $_SESSION['admin_logged'] =TRUE;
                    $_SESSION['username'] = $admin->username;

                    redirect("admin/index", "refresh");
                }else {
                    $this->session->set_flashdata("error", "No data in database");
                    redirect("home/loginadmin", "refresh");
                }
            }
        }
        $this->load->view('loginadmin');

        // $this->load->view('loginadmin');
    }
}