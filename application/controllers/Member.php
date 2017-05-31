<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
		public function __construct() {
			parent::__construct();
			if ($this->session->userdata('nama_depan') != null || $this->session->userdata('nama_depan') != ""){
				
			} else {
				redirect('Welcome');
			}
			$this->load->library('form_validation');
			$this->load->library('cart');
			$this->load->model('My_Model');
			$this->load->helper('url');
			$this->load->helper('form');
		}
	
		public function index(){
			$this->load->view('on/header');
			$this->load->view('main/home');
			$this->load->view('main/footer');
		}
		public function contact(){
			$this->load->view('on/header');
			$this->load->view('main/contact');
			$this->load->view('main/footer');
		}
		public function about(){
			$this->load->view('on/header');
			$this->load->view('main/about');
			$this->load->view('main/footer');
		}
		public function help(){
			$this->load->view('on/header');
			$this->load->view('main/help');
			$this->load->view('main/footer');
		}
		public function menu(){
			$this->load->view('on/header');
			$nasi = $this->My_Model->getMenu();
			$this->load->view('on/menu', array('nasi' => $nasi));
			
			$this->load->view('main/footer');
		}
		public function careers(){
			$this->load->view('on/header');
			$this->load->view('main/careers');
			$this->load->view('main/footer');
		}
		public function offers(){
			$this->load->view('on/header');
			$this->load->view('main/offers');
			$this->load->view('main/footer');
		}
		public function privacy(){
			$this->load->view('on/header');
			$this->load->view('main/privacy');
			$this->load->view('main/footer');
		}
		public function terms(){
			$this->load->view('on/header');
			$this->load->view('main/privacy');
			$this->load->view('main/footer');
		}
		public function cart(){
			$this->load->view('on/header');
			$this->load->view('on/cart');
			$this->load->view('main/footer');
		}
		public function checkout(){
			$this->load->view('on/header');
			$this->load->view('on/checkout');
			$this->load->view('main/footer');
		}
		public function success(){
			$this->load->view('on/header');
			$this->load->view('on/success');
			$this->load->view('main/footer');
		}
		public function logout(){
			$data = array('email','nama_depan','kata_sandi');
			$this->session->unset_userdata($data);
			redirect('Welcome');
		}
		
		public function add_to_cart($id_nasi){
			$product = $this->My_Model->find($id_nasi);
			$data = array(
						   'id'      => $product->id_nasi,
						   'qty'     => 10,
						   'price'   => $product->harga,
						   'name'    => $product->jenis_menu
						);
			//$cart = ;
			$this->cart->insert($data);
			//print_r($data);
			redirect('Member/cart');
		}
		public function clear_cart()
		{
			$this->cart->destroy();
			redirect('Member/cart');
		}
		public function inputOrder() {
        $alamat = $this->input->post('alamat');
        $tanggalkirim = $this->input->post('tanggalkirim');
        $jamkirim = $this->input->post('jamkirim');
        $idCustomer = $this->session->userdata('email');
        $isProcessed = $this->My_Model->process($idCustomer, $alamat, $tanggalkirim, $jamkirim);
        if($isProcessed) {
            $this->cart->destroy();
            redirect('Member/success');
        } else {
            $this->session->set_flashdata('error', 'Maaf, order Anda tidak dapat diproses');
        }
    }
    public function kritik(){
			$pesan = array(
				'ib_nama' => $this->input->post('ib_nama'),
				'ib_email' => $this->input->post('ib_email'),
				'ib_telfon' => $this->input->post('ib_telfon'),
				'ib_pesan' => $this->input->post('ib_pesan')
			);

			$this->My_Model->addKritik($pesan);
			$this->index();
		}
}
?>