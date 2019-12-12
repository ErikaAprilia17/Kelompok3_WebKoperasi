<?php 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function login_admin(){
		$this->load->view('admin/v_login_admin');
	}
	function login_member(){
		$this->load->view('admin/v_login_member');
	}
 	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where);
		if($cek->num_rows() > 0){
 
			$data_session = array(
				'id' => $cek->row()->id,
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata('admin',$data_session);
 
			redirect(base_url("admin/dashboard"));
 
		}else{
			echo redirect(base_url("login"));
		}
	}
	 
	function logout(){
		$this->session->unset_userdata('admin');
		redirect(base_url('login/login_admin'));
	}
}