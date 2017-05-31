+<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
		public function __construct() {
			parent::__construct();
			if ($this->session->userdata('nama_depan') != null || $this->session->userdata('nama_depan') != ""){
				redirect('Member');
			} else {
				
			}
			$this->load->library('form_validation');
			$this->load->model('My_Model');
			$this->load->helper('url');
		}
	
		public function index(){
			$this->load->view('main/header');
			$this->load->view('main/home');
			$this->load->view('main/footer');
		}
		public function signup(){
			$this->load->view('main/header');
			$this->load->view('main/signup');
			$this->load->view('main/footer');
		}
		public function login(){
			$this->load->view('main/header');
			$this->load->view('main/login');
			$this->load->view('main/footer');
		}
		public function contact(){
			$this->load->view('main/header');
			$this->load->view('main/contact');
		}
		public function about(){
			$this->load->view('main/header');
			$this->load->view('main/about');
			$this->load->view('main/footer');
		}
		public function menu(){
			$this->load->view('main/header');
			$nasi = $this->My_Model->getMenu();
			$this->load->view('main/menu', array('nasi' => $nasi));
			
			$this->load->view('main/footer');
		}
		public function careers(){
			$this->load->view('main/header');
			$this->load->view('main/careers');
			$this->load->view('main/footer');
		}
		public function offers(){
			$this->load->view('main/header');
			$this->load->view('main/offers');
			$this->load->view('main/footer');
		}
		public function privacy(){
			$this->load->view('main/header');
			$this->load->view('main/privacy');
			$this->load->view('main/footer');
		}
		public function products(){
			$this->load->view('main/header');
			$this->load->view('main/privacy');
			$this->load->view('main/footer');
		}
		public function terms(){
			$this->load->view('main/header');
			$this->load->view('main/privacy');
			$this->load->view('main/footer');
		}
		public function validation(){
			$this->form_validation->set_rules('kata_sandi','Kata Sandi', 'trim|required|min_length[8]');
			$this->form_validation->set_rules('konfirmasi_kata_sandi','Konfirmasi Kata Sandi', 'trim|required|matches[kata_sandi]');

			if($this->form_validation->run() != false){
				$this->daftar();
			}else{
				$this->form_validation->set_message('min_length', 'Harus lebih dari 8 karakter');
			}
		}
		public function daftar(){
			$user = array(
				'nama_depan' => $this->input->post('nama_depan'),
				'nama_belakang' => $this->input->post('nama_belakang'),
				'telepon' => $this->input->post('telepon'),
				'email' => $this->input->post('email'),
				'kata_sandi' => md5($this->input->post('kata_sandi'))
			);

			$this->My_Model->addUser($user);
			$this->index();
		}
		public function masuk(){
			$email = $this->input->post('email');
			$kata_sandi = md5($this->input->post('kata_sandi'));
			$cek = $this->My_Model->cek_login($email, $kata_sandi);
			if($cek->num_rows() == 1){
	 			foreach ($cek->result() as $user) {
	 				$sess_user['nama_depan'] = $user->nama_depan;
	 				$sess_user['email'] = $user->email;
	 				$this->session->set_userdata($sess_user);
	 			}
	 			redirect('Member');
			}else{
				redirect ('Welcome/login');
			}
		}
}
?>