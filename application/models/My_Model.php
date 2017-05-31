<?php  

class My_Model extends CI_Model {

    function getData() {
        $this->db->select('*');
        $this->db->join('pesanan', 'orderdetail.orderid = pesanan.id')->join('datauser', 'pesanan.emailuser = datauser.email')->join('base_menu','orderdetail.id_nasi = base_menu.id_nasi');
        $query = $this->db->get_where('orderdetail',array('status_order'=>'proses'));
        return $query->result_array();
    }
        

    function addData($data) {
        $this->db->insert('user', $data);
    }

    function login_authen($username,$password){
        $sql= "SELECT * from admin where username = '$username' and password = '$password' ";
        $query = $this ->db->query($sql);
        $this ->db->where('username',$username);
        $this ->db->where('password',$password);

        return $this ->db->get('admin');
    }

    function menunya() {
        $query = $this->db->get('base_menu');
        return $query->result_array();
    }

    function pesan() {
        $query = $this->db->get('inbox');
        return $query->result_array();
    }
    
    function profileadmin($tableName,$where){
        $prof = $this->db->get_where($tableName,$where);
        return $prof->result_array();
    }

    public function Updating($tableName,$where)
    {
        $data = $this->db->get_where($tableName,$where);
        return $data->result_array();
    }
    public function updateData($tableName,$where,$data_update)
    {
        $this->db->update($tableName,$data_update,$where);
    }

    function terkirim(){	
        $this->db->select('*');
        $this->db->join('pesanan', 'orderdetail.orderid = pesanan.id')->join('datauser', 'pesanan.emailuser = datauser.email')->join('base_menu','orderdetail.id_nasi = base_menu.id_nasi');
        $query = $this->db->get_where('orderdetail',array('status_order'=>'terkirim'));
        return $query->result_array();
    }

    function add_data($baru){		
        $this->db->insert('base_menu',$baru);
    }

    public function hapusData($tableName, $where)
    {
        $this->db->delete($tableName, $where);
    }
    public function ganti($id)
    {
        $this->db->set('status_order', 'terkirim');
        $this->db->where('id', $id);
        $this->db->update('pesanan');
    }
    public function getUser() {
        $query = $this->db->get('datauser');
        return $query->result_array();
    }

    public function addUser($user) {
        $this->db->insert('datauser', $user);
    }
    public function addKritik($pesan) {
        $this->db->insert('inbox', $pesan);
    }
    public function cek_login($email, $kata_sandi){     
        $this->db->where('email', $email);
        $this->db->where('kata_sandi', $kata_sandi);
        return $this->db->get("datauser");
    }
    public function getMenu(){
        $query = $this->db->get('base_menu');
        return $query->result_array();
    }
    function find($id_nasi) {
        $query = $this->db->get_where('base_menu', array('id_nasi'=>$id_nasi)); 
        return $query->row();
    }
    public function process($idCustomer, $alamat, $tanggalkirim, $jamkirim) {
        $order_id = mt_rand(1,999);
        $order = array(
            'id' => $order_id,
            'emailuser' => $idCustomer,
            'tanggal_pesan' => date('Y-m-d H:i:s'),
            'tanggal_kirim' => $tanggalkirim,
            'jam_kirim' => $jamkirim,
            'alamat_kirim' => $alamat,
            'status_order' => 'Proses'
        );
        $this->db->insert('pesanan', $order);
        $this->db->where('id', $order_id);
        foreach($this->cart->contents() as $item) {
            $data = array(
                'orderid' => $order_id,
                'id_nasi' => $item['id'],
                'hargajual' => $item['price'],
                'jumlah' => $item['qty']
            );
            $this->db->insert('orderdetail', $data);
        }
        return TRUE;
    }
}

?>