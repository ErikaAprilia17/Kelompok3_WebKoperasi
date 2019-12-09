<?php
class identitas_koperasi extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Identitas Koperasi',
			'page' => 'admin/setting/v_identitas',
			'identitas' => $this->db->where('id',1)->get('identitas_koperasi')->row(),
			
		);
		$this->load->view('admin/layout/template',$data);
		
	}



	function update(){
	$nama_koperasi = $this->input->post('nama_koperasi');
	$nama_pimpinan = $this->input->post('nama_pimpinan');
	$alamat = $this->input->post('alamat');
	$no_telpon = $this->input->post('no_tlpon');
	$kota = $this->input->post('kota');
	$kabupaten = $this->input->post('kabupaten');
	$website = $this->input->post('website');
	$email = $this->input->post('email');
 
	$data = array(
		'nama_koperasi' => $nama_koperasi,
		'nama_pimpinan' => $nama_pimpinan,
		'alamat' => $alamat,
		'no_telpon' => $no_telpon,
		'kota' => $kota,
		'kabupaten' => $kabupaten,
		'website' => $website,
		'email' => $email,
		
	);
 
	$where = array(
		'id' => 1
	);
 
	$this->db->where($where);
	$update = $this->db->update('identitas_koperasi',$data);
	$this->session->set_flashdata('success_update','a');
	redirect('admin/setting/identitas_koperasi');

}
}