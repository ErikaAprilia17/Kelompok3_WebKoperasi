<?php
class suku_bunga extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Suku Bunga',
			'page' => 'admin/setting/v_suku_bunga',
			'suku_bunga' => $this->db->where('id',1)->get('suku_bunga')->row(),
			
		);
		$this->load->view('admin/layout/template',$data);
		
	}

	function update(){
	$tipe_pinjaman_bunga = $this->input->post('tipe_pinjaman_bunga');
	$suku_bunga_pinjaman = $this->input->post('suku_bunga_pinjaman');
	$biaya_administrasi = $this->input->post('biaya_administrasi');
	$biaya_denda = $this->input->post('biaya_denda');
	$tempo_tanggal_pembayaran = $this->input->post('tempo_tanggal_pembayaran');
	$dana_cadangan = $this->input->post('dana_cadangan');
	$jasa_anggota = $this->input->post('jasa_anggota');
	$dana_pengurus = $this->input->post('dana_pengurus');
	$dana_karyawan = $this->input->post('dana_karyawan');
	$dana_pendidikan = $this->input->post('dana_pendidikan');
	$dana_sosial = $this->input->post('dana_sosial');
	$jasa_usaha = $this->input->post('jasa_usaha');
	$jasa_modal_anggota = $this->input->post('jasa_modal_anggota');
	$pajak_PPh = $this->input->post('pajak_PPh');

	$data = array(
		'tipe_pinjaman_bunga' => $tipe_pinjaman_bunga,
		'suku_bunga_pinjaman' => $suku_bunga_pinjaman,
		'biaya_administrasi' => $biaya_administrasi,
		'biaya_denda' => $biaya_denda,
		'tempo_tanggal_pembayaran' => $tempo_tanggal_pembayaran,
		'dana_cadangan' => $dana_cadangan,
		'jasa_anggota' => $jasa_anggota,
		'dana_pengurus' => $dana_pengurus,
		'dana_karyawan' => $dana_karyawan,
		'dana_pendidikan' => $dana_pendidikan,
		'dana_sosial' => $dana_sosial,
		'jasa_usaha' => $jasa_usaha,
		'jasa_modal_anggota' => $jasa_modal_anggota,
		'pajak_PPh' => $pajak_PPh,
	);
 
	$where = array(
		'id' => 1
	);
 
	$this->db->where($where);
	$update = $this->db->update('suku_bunga',$data);
	$this->session->set_flashdata('success_update','a');
	redirect('admin/setting/suku_bunga');

}
}