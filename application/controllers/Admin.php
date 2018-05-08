<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('article');
        $this->load->model('item');
        if (!isset($_SESSION['admin_logged'])) {
            $this->session->set_flashdata("error","please login first");
            redirect("admin/loginadmin");
        }
    }
    public function dashboard(){
        $cek = $this->db->where('is_active',1)->get('transaction');
        if($cek->num_rows()>0){
            $data['jumlah'] = $cek->num_rows();
            $data['user'] = $cek->result();
            $update = array(
                'is_active' => 0
            );
            $this->db->update('transaction',$update); 
        }else{
            $data['jumlah'] = 0;
        }
        
        $this->load->view('admin/dashboard',$data);
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

                    redirect("admin/dashboard", "refresh");
                }else {
                    $this->session->set_flashdata("error", "No data in database");
                    redirect("admin/loginadmin", "refresh");
                }
            }
        }
        $this->load->view('loginadmin');
    }

    public function addarticle(){
        $this->load->helper('form');
        $this->load->view('admin/addarticle');
    }

    public function add_picture(){
		$id = $this->input->post('id_article');
		$title = $this->input->post('title');
		$author = $this->input->post('author');
		$content = $this->input->post('content');
		$date = $this->input->post('date');
		$image_file = $_FILES['image_file']['name'];

		if($image_file=''){}else {
			$config['upload_path'] = './asset/imgblog';
			$config['allowed_types'] = 'gif|jpg|png';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('image_file')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$image_file = $this->upload->data('file_name');
			}

			$data = array(
				'id_article' => $id,
				'title' => $title,
				'author' =>$author,
				'date' => $date,
				'content' => $content,
				'image_file'=>$image_file);

			$this->article->InsertData($data, "article");
			redirect('admin/dashboard');
		}		
    }

    public function seearticle(){
        $data['dataarticle']= $this->article->seearticle();
        $this->load->view('admin/seearticle',$data);
    }


    public function additem(){
        $this->load->helper('form');
        $this->load->view('admin/additem');
    }
    public function add_item(){
        $id = $this->input->post('id_item');
        $name = $this->input->post('name');
        $vendor = $this->input->post('vendor');
        $price = $this->input->post('price');
        $stock = $this->input->post('stock');
        $description = $this->input->post('description');
        $photo = $_FILES['photo']['name'];
        if($photo=''){}else {
            $config['upload_path'] = './asset/imgitem';
            $config['allowed_types'] = 'gif|jpg|png';
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('photo')){
                $error = array('error' => $this->upload->display_errors());
            }
            else{
                $photo = $this->upload->data('file_name');
            }
            $data = array(
                'id_item' => $id,
                'name' => $name,
                'description_name' =>$description,
                'vendor' => $vendor,
                'price' => $price,
                'stock_item'=>$stock,
                'photo' => $photo);
            $this->item->InsertData($data, "item");
            redirect('admin/dashboard');
        }       
    }
    public function seeitem(){
        $data['dataitem']= $this->item->seeitem();
        $this->load->view('admin/seeitem',$data);
    }

    
}