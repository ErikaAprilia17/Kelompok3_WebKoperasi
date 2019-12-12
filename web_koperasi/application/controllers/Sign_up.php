<?php 
class Sign_up extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
		$this->load->view('admin/v_sign_up');
	}
	
function register()
{
    $req = $this->input->post();
    $data = array(
        'username' => $req['username'],
        'email' => $req['email'],
        'password' => md5($req['password']),
        'nama' => $req['nama'],
        'ttl' => $req['ttl'],
        'pekerjaan' => $req['pekerjaan'],
        'jk' => $req['jenis_kelamin'],
        'status' => $req['status'],
        'agama' => $req['agama'],
        'alamat' => $req['alamat'],
        'kota' => $req['kota'],
        'no_tlpon' => $req['no_tlpon'],
        'sebagai' => $req['user'],


      );
    $upload_path = './file/';
    $name_input = 'Photo_id';
    $name_image = time();
    $image =  $this->m_login->uploadImage($upload_path,$name_input,$name_image);
    $data['Photo_id'] = $image;

    $this->db->insert('admin', $data);

  	 $this->session->set_flashdata('success','Berhasil input. silahkan login...'); 
  		$this->session->keep_flashdata('success', 'Berhasil input. silahkan login...');
		redirect("sign_up");



   }
}