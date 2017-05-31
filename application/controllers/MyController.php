<?php  

class MyController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('My_Model');
        $this->load->library('session');
        $this->load->helper(array('form','url'));
        $this->load->library(array('form_validation', 'email'));

    }

    function index() {
        $data['err_message']="";
        $this->load->view('adminmasuk', $data);
    }

    function beranda($username) {
        $this->load->view('header');
        $this->load->view('beranda');
        $this->load->view('sidebar');
    }

    function pesanMasuk() {
        $data = $this->My_Model->pesan();
       // $where = array ('id_admin'=>); 
       // $datalagi = $this->My_Model->profileadmin('admin',$where);
        $this->load->view('header');
        $this->load->view('pesanmasuk', array('data' => $data));
        $this->load->view('sidebar');
    }

    function logout(){	
        $this->session->sess_destroy();
        $this->index();
    }	

    function readData() {
        $data = $this->My_Model->getData();
        $this->load->view('header');
        $this->load->view('pesanan', array('data' => $data));
        $this->load->view('sidebar');	
    }

    function history() {
        $data = $this->My_Model->terkirim();
        $this->load->view('header');
        $this->load->view('history', array('data' => $data));
        $this->load->view('sidebar');	
    }

    function updateProduk(){
        $data = $this->My_Model->menunya();
        $this->load->view('header');	
        $this->load->view('update', array('data' => $data));
        $this->load->view('sidebar');	
    }


    public function deleteProduk($id_nasi)
    {
        $where = array ('id_nasi'=>$id_nasi);
        $this->My_Model->hapusData('base_menu',$where);
        $data = $this->My_Model->menunya();
        $this->load->view('header');
        $this->load->view('update', array('data' => $data));
        $this->load->view('sidebar');
    }


    public function gantiStatus($id)
    {
        $this->My_Model->ganti($id);
        $data = $this->My_Model->getData();
        $this->load->view('header');
        $this->load->view('pesanan', array('data' => $data));
        $this->load->view('sidebar');
    }

    function valid(){
        $this->form_validation->set_rules('id_nasi', 'id_nasi', 'required|is_unique[base_menu.id_nasi]'); 
        if($this->form_validation->run() != false){
            $this->addProduk();
        }else{
            $this->updateProduk();
            $this->form_validation->set_message('is_unique','id nasi sudah dipakai');
        }
    }

    function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $islogin = $this->My_Model->login_authen($username,$password);


        if ($islogin->num_rows() ==1) {
            foreach ($islogin->result() as $usernya ) {
                $sess_user['username'] = $usernya->username;
                $this->session->set_userdata($sess_user);
            }
            $this->beranda($username);
        }
        else{
            $data['err_message'] = "GAGAL LOGIN ";
            $this->load->view('adminmasuk', $data);
        }
    }


    function addProduk(){
        $config['upload_path']	='./assets/images/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
        $file_data = $this->upload->data();

        $masuk = array(
            'id_nasi' => $this->input->post('id_nasi'),
            'jenis_menu'=> $this->input->post('jenis_menu'),
            'harga'=> $this->input->post('harga'),
            'image' =>$file_data['file_name']);

        $baru = $this->My_Model->add_data($masuk);
        $data = $this->My_Model->menunya();
        $this->load->view('header');
        $this->load->view('update', array('data' => $data));
        $this->load->view('sidebar');	
    }

    function editProduk($id_nasi){
        $where = array ('id_nasi'=>$id_nasi);
		$b = $this->My_Model->updating('base_menu',$where);
		$data = array(
			'id_nasi'=> $b[0]['id_nasi'],
			'jenis_menu'=> $b[0]['jenis_menu'],
			'harga'=> $b[0]['harga'],
			'image'=> $b[0]['image']
			);
        $this->load->view('header');
        $this->load->view('edit', $data);
        $this->load->view('sidebar');	
    }

    function doUpdate($id_nasi){
        $config['upload_path']	='./assets/images/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
        $file_data = $this->upload->data();
        
        $id_nasi = $this->input->post('id_nasi');
        $jenis_menu = $this->input->post('jenis_menu');
        $harga = $this->input->post('harga');
        $image = $this->input->post('image');

        $data_update = array('id_nasi'=> $id_nasi, 'jenis_menu'=> $jenis_menu, 'harga'=> $harga, 'image'=> $file_data['file_name']);

        $where = array('id_nasi'=>$id_nasi);
        $this->My_Model->updateData('base_menu',$where,$data_update);
        $data = $this->My_Model->menunya();
        $this->load->view('header');
        $this->load->view('update', array('data' => $data));
        $this->load->view('sidebar');
    }



}

?>