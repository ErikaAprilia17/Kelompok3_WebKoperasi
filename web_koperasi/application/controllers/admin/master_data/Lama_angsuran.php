<?php
class Lama_angsuran extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Lama Angsuran',
			'page' => 'admin/master_data/v_lama_angsuran',
			'data_angsuran' => $this->db->get('lama_angsuran')->result(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}
	function tambah(){
		$data = array(
			'title' => 'Tambah Jenis Angsuran',
			'page' => 'admin/master_data/v_tambah_angsuran',
		);
		$this->load->view('admin/layout/template',$data);
	}
	
	function insert(){
	$id = $this->input->post('id');
	$lama_angsuran = $this->input->post('lama_angsuran');
	$aktif = $this->input->post('aktif');
 
	$data = array(
		'lama_angsuran' => $lama_angsuran,
		'aktif' => $aktif,
		
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->db->where($where);
	$this->db->insert('lama_angsuran',$data);
	$this->session->set_flashdata('success','a'); 
	redirect('admin/master_data/lama_angsuran');

}

	function edit($id){
		$data = array(
			'title' => 'Edit Jenis Angsuran',
			'page' => 'admin/master_data/v_edit_angsuran',
			'data_angsuran' => $this->db->where('id',$id)->get('lama_angsuran')->row(),
					
		);
		$this->load->view('admin/layout/template',$data);
	}
	function update(){
	$id = $this->input->post('id');
	$lama_angsuran = $this->input->post('lama_angsuran');
	$aktif = $this->input->post('aktif');
 
	$data = array(
		'lama_angsuran' => $lama_angsuran,
		'aktif' => $aktif,
		
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->db->where($where);
	$this->db->update('lama_angsuran',$data);
	$this->session->set_flashdata('success','a'); 
	redirect('admin/master_data/lama_angsuran');

}
function hapus($id){
		$this->db->where('id',$id)->delete('lama_angsuran');
		$this->session->set_flashdata('success_hapus','a'); 
		redirect('admin/master_data/lama_angsuran');
	}


}