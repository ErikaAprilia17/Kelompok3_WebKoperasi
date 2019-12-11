<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editprofile extends CI_Controller {
	protected $id_admin;
	 function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->m_login->cek_session();
        $sess = $this->session->userdata('admin');
        $this->id_admin = $sess->id;
    }
	public function index()
	{
		$data = array(
			'title' => 'Edit Profile',
			'page' => 'admin/v_editprofile',
			'data' => $this->db->where('id', $this->id_admin)->get('admin')->row(),
			'agama' => $this->db->get('agama')->result(),
			'kota' => $this->db->get('kota')->result(),
			'pekerjaan' => $this->db->get('pekerjaan')->result(),
			'status' => $this->db->get('status')->result(),
			'tempatlahir' => $this->db->get('kota')->result(),

		);
		$this->load->view('admin/layout/template',$data);
	}
	
	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$jk = $this->input->post('jk');
		$no_tlpon = $this->input->post('no_tlpon');
		$alamat = $this->input->post('alamat');
		$id_kota = $this->input->post('kota');
		$id_agama = $this->input->post('agama');
		$id_pekerjaan = $this->input->post('pekerjaan');
		$id_status = $this->input->post('status');
		$id_tempatlahir = $this->input->post('tempatlahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		
		$data = array(
			'email' => $email,
			'jk' => $jk,
			'tgl_lahir' => $tgl_lahir,
			'no_tlpon' => $no_tlpon,
			'alamat' => $alamat,
			'id_agama' => $id_agama,
			'id_kota' => $id_kota,
			'id_status' => $id_status,
			'id_pekerjaan' => $id_pekerjaan,
			'id_tempatlahir' => $id_tempatlahir,
			

		);

		$where = array(
		'id' => $id
		);
 
		$this->db->where($where);
		$this->db->update('admin',$data);
		$this->session->set_flashdata('success_tambah','a');
		redirect('admin/editprofile');
	}
}