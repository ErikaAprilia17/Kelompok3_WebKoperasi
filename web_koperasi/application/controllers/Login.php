<?php 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}

	function index(){
		if($this->input->post('submit')){
			// $req = $this->input->post();
			// print_r($req);

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$where = array(
			'username' => $username,
			);
			$cek = $this->m_login->cek_login("akun",$where);
			if($cek->num_rows() > 0){
				$data = $cek->row();
				if(md5($password) == $data->password){
					
					$level = $data->level;
					if($level == 'Admin'){
						$data_admin = $this->db->where('id',$data->id_admin)->get('admin')->row();
						// print_r($data_session);
						$this->session->set_userdata('admin',$data_admin);
						redirect(base_url("admin/dashboard"));
					}elseif($level == 'Member'){
						$data_member = $this->db->where('id_anggota',$data->id_anggota)->get('data_anggota')->row();
						// print_r($data_session);
						$this->session->set_userdata('member',$data_member);
						redirect(base_url("member/dashboard"));
					}else{
						$this->session->set_flashdata('message', 'Belum punya level');
						redirect(base_url("login"));
					}
					
				}else{
					$this->session->set_flashdata('message', 'Password Salah');
					redirect(base_url("login"));
				}
			}else{
				$this->session->set_flashdata('message', 'Username Tidak Terdaftar');
				redirect(base_url("login"));
			}
			
		}else{
			$this->load->view('v_login');
		}
		
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
			echo redirect(base_url("login/login_admin"));
		}
	}
	 
	function logout(){
		$this->session->unset_userdata('admin');
		redirect(base_url('login'));
	}
}