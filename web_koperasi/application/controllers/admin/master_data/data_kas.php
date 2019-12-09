<?php
class data_kas extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Data Kas',
			'page' => 'admin/master_data/v_data_kas',
			'data_kas' => $this->db->get('data_kas')->result(),
			
		);
		$this->load->view('admin/layout/template',$data);
		
	}
	function tambah(){
		$data = array(
			'title' => 'Tambah Jenis Kas',
			'page' => 'admin/master_data/v_tambah_jenis_kas',
		);
		$this->load->view('admin/layout/template',$data);
	}
	// function submit() {
	// 	$this->db->where('id',$id)->submit('data_kas');
	// 	$this->session->set_flashdata('success_submit','a'); 
	// 	redirect('admin/master_data/data_kas');
	
	// }
	function insert(){
	$NamaKas= $this->input->post('nama_kas');
	$Aktif = $this->input->post('aktif');
	$Simpanan = $this->input->post('simpanan');
	$Penarikan = $this->input->post('penarikan');
	$Pinjaman = $this->input->post('pinjaman');
	$Angsuran = $this->input->post('angsuran');
	$Pemasukan = $this->input->post('pemasukan_kas');
	$Pengeluaran = $this->input->post('pengeluaran_kas');
	$Transfer = $this->input->post('transfer_kas');
 
	$data = array(
		'nama_kas' => $NamaKas,
		'aktif' => $Aktif,
		'simpanan' => $Simpanan,
		'penarikan' => $Penarikan,
		'pinjaman' => $Pinjaman,
		'angsuran' => $Angsuran,
		'pemasukan_kas' => $Pemasukan,
		'pengeluaran_kas' => $Pengeluaran,
		'transfer_kas' => $Transfer,
		
		
	);
 
	
	$this->db->insert('data_kas',$data);
	$this->session->set_flashdata('success_tambah','a'); 
	redirect('admin/master_data/data_kas');
}
function edit($id){
		$data = array(
			'title' => 'Edit Jenis Kas',
			'page' => 'admin/master_data/v_edit_kas',
			'data_kas' => $this->db->where('id',$id)->get('data_kas')->row(),
					
		);
		$this->load->view('admin/layout/template',$data);
		
		

	}
	function update(){
	$id = $this->input->post('id');
	$NamaKas= $this->input->post('nama_kas');
	$Aktif = $this->input->post('aktif');
	$Simpanan = $this->input->post('simpanan');
	$Penarikan = $this->input->post('penarikan');
	$Pinjaman = $this->input->post('pinjaman');
	$Angsuran = $this->input->post('angsuran');
	$Pemasukan = $this->input->post('pemasukan_kas');
	$Pengeluaran = $this->input->post('pengeluaran_kas');
	$Transfer = $this->input->post('transfer_kas');
 
	$data = array(
		'nama_kas' => $NamaKas,
		'aktif' => $Aktif,
		'simpanan' => $Simpanan,
		'penarikan' => $Penarikan,
		'pinjaman' => $Pinjaman,
		'angsuran' => $Angsuran,
		'pemasukan_kas' => $Pemasukan,
		'pengeluaran_kas' => $Pengeluaran,
		'transfer_kas' => $Transfer,
	
	);
	$where = array(
		'id' => $id
	);
 
	$this->db->where($where);
	$this->db->update('data_kas',$data);
	$this->session->set_flashdata('success_update','a'); 
	redirect('admin/master_data/data_kas');
}

	function hapus($id){
		$this->db->where('id',$id)->delete('data_kas');
		$this->session->set_flashdata('success_hapus','a'); 
		redirect('admin/master_data/data_kas');
	}
}
