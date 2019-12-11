<?php
class jenis_simpanan extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Jenis Simpanan',
			'page' => 'admin/master_data/v_jenis_simpanan',
			'data_simpanan' => $this->db->get('jenis_simpanan')->result(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}

	function edit($id){
		$data = array(
			'title' => 'Edit Jenis Simpanan',
			'page' => 'admin/master_data/v_edit_simpanan',
			'data_simpanan' => $this->db->where('id',$id)->get('jenis_simpanan')->row(),
					
		);
		$this->load->view('admin/layout/template',$data);
	}
	function update(){
	$id = $this->input->post('id');
	$Jumlah = $this->input->post('jumlah');
	$Tampil = $this->input->post('tampil');
 
	$data = array(
		'jumlah' => $Jumlah,
		'tampil' => $Tampil,
		
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->db->where($where);
	$this->db->update('jenis_simpanan',$data);
	$this->session->set_flashdata('success','a'); 
	redirect('admin/master_data/jenis_simpanan');

}
	
	 
}