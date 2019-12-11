<?php
class setoran_tunai extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
}

	public function index()
	{
		$data = array(
			'title' => 'Setoran Tunai',
			'page' => 'admin/simpanan/v_setoran_tunai',
			'data_setoran' => $this->db->select('a.*,b.nama_anggota,c.departemen,d.jenis_simpanan,d.jumlah')
										->from('setoran_tunai a')
										->join('data_anggota b','a.id_anggota=b.id_anggota')
										->join('departemen c','a.id_departemen=c.id')
										->join('jenis_simpanan d','a.id_jenis_simpanan=d.id')
										->get()->result(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}
	function _getkode() {
		$query = $this->db->select_max('kode_transaksi')->get('setoran_tunai')->row();
		$max_kode = $query->kode_transaksi;
		$noUrut = (int) substr($max_kode, 3, 4);
		$noUrut++;
		$char = "TPK";
		$kodeTransaksi = $char . sprintf("%04s", $noUrut);
		return $kodeTransaksi;
	}
	function get_jumlah($id){
		$data = $this->db->where('id',$id)->get('jenis_simpanan')->row();
		echo json_encode($data);
	}
	function edit($id){
		$data = array(
			'title' => 'Edit Setoran Tunai',
			'page' => 'admin/simpanan/v_edit_setoran',
			'setoran' => $this->db->where('id',$id)->get('setoran_tunai')->row(),
			'jumlah' => $this->db->get('jenis_simpanan')->row(),
			'id_anggota' => $this->db->get('data_anggota')->result(),
			'id_departemen' => $this->db->get('departemen')->result(),
			'departemen' => $this->db->get('departemen')->result(),
			'id_jenis_simpanan' => $this->db->get('jenis_simpanan')->result(),
			'jenis_simpanan' => $this->db->get('jenis_simpanan')->result(),

		);
		$this->load->view('admin/layout/template',$data);
	}
function update(){
		$id = $this->input->post('id');
		$kode_transaksi = $this->_getkode();
		$tgl_transaksi = $this->input->post('tgl_transaksi');
		$nama_penyetor = $this->input->post('nama_penyetor');
		$no_identitas = $this->input->post('no_identitas');
		$alamat = $this->input->post('alamat');
		$id_anggota = $this->input->post('id_anggota');
		$id_departemen = $this->input->post('id_departemen');
		$id_jenis_simpanan = $this->input->post('id_jenis_simpanan');
		$jumlah = $this->input->post('jumlah');
		$user = $this->input->post('user');
		
		$data = array(
			'kode_transaksi' => $kode_transaksi,
			'tgl_transaksi' => $tgl_transaksi,
			'nama_penyetor' => $nama_penyetor,
			'no_identitas' => $no_identitas,
			'alamat' => $alamat,
			'id_anggota' => $id_anggota,
			'id_departemen' => $id_departemen,
			'id_jenis_simpanan' => $id_jenis_simpanan,
			'jumlah' => $jumlah,
			'user' => $user,

		);
		

		$where = array(
		'id' => $id
		);
 
		$this->db->where($where);
		$this->db->update('setoran_tunai',$data);
		$this->session->set_flashdata('success_tambah','a');
		redirect('admin/simpanan/setoran_tunai');
	}
	
	function insert(){
		$kode_transaksi = $this->_getkode();
		$tgl_transaksi = $this->input->post('tgl_transaksi');
		$nama_penyetor = $this->input->post('nama_penyetor');
		$no_identitas = $this->input->post('no_identitas');
		$alamat = $this->input->post('alamat');
		$id_anggota = $this->input->post('id_anggota');
		$id_departemen = $this->input->post('id_departemen');
		$id_jenis_simpanan = $this->input->post('jenis_simpanan');
		$jumlah 		= $this->input->post('jumlah');
		$user 			= $this->input->post('user');

		
		$data = array(
			'kode_transaksi' => $kode_transaksi,
			'tgl_transaksi' => $tgl_transaksi,
			'nama_penyetor' => $nama_penyetor,
			'no_identitas' => $no_identitas,
			'alamat' => $alamat,
			'id_anggota' => $id_anggota,
			'id_departemen' => $id_departemen,
			'id_jenis_simpanan' => $id_jenis_simpanan,
			'jumlah' 			=> $jumlah,
			'user' 				=> $user,

		);

		$this->db->insert('setoran_tunai',$data);
		$this->session->set_flashdata('success_tambah','a');
		redirect('admin/simpanan/setoran_tunai');
		
	}

function tambah(){
		$data = array(
			'title' => 'Tambah Data Pengguna',
			'page' => 'admin/simpanan/v_tambah_setoran',
			'departemen' => $this->db->get('departemen')->result(),
			'jenis_simpanan' => $this->db->get('jenis_simpanan')->result(),
			'data_anggota' => $this->db->get('data_anggota')->result(),
			'jumlah' => $this->db->get('jenis_simpanan')->row(),
		);
		$this->load->view('admin/layout/template',$data);
	}

	 function hapus($id){
 
  		$this->db->where('id', $id);
  		$this->db->delete('setoran_tunai');
  		$this->session->set_flashdata('success_hapus','a'); 
  		redirect('admin/simpanan/setoran_tunai');
 }
	

	
	

	}