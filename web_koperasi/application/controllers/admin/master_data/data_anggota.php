<?php
class data_anggota extends CI_Controller {

function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
 
	}


	public function index()
	{
		$data = array(
			'title' => 'Data Anggota',
			'page' => 'admin/master_data/v_data_anggota',
			'data_anggota' => $this->db->select('data_anggota.*,akun.username')
									->from('data_anggota')
									->join('akun','akun.id_anggota=data_anggota.id_anggota')
									->get()->result(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}

	function edit($id){
		$data = array(
			'title' => 'Edit Data Anggota',
			'page' => 'admin/master_data/v_edit_anggota',
			'data_anggota' => $this->db->select('data_anggota.*,akun.username,akun.password')
									->where('data_anggota.id_anggota',$id)
									->from('data_anggota')
									->join('akun','akun.id_anggota=data_anggota.id_anggota')
									->get()->row(),
			'departemen'=> $this->db->get('departemen')->result(),
			'status'=> $this->db->get('status')->result(),
			'pekerjaan'=> $this->db->get('pekerjaan')->result(),
			'agama' => $this->db->get('agama')->result(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}
	function update(){
	$id = $this->input->post('id');
	$username = $this->input->post('username');
	$nama_anggota = $this->input->post('nama_anggota');
	$jenis_kelamin = $this->input->post('jenis_kelamin');
	$tempat_lahir = $this->input->post('tempat_lahir');
	$tanggal_lahir = $this->input->post('tanggal_lahir');
	$status	= $this->input->post('status');
	$departemen = $this->input->post('departemen');
	$pekerjaan = $this->input->post('pekerjaan');
	$agama = $this->input->post('agama');
	$alamat = $this->input->post('alamat');
	$kota = $this->input->post('kota');
	$aktif_keanggotaan= $this->input->post('aktif_keanggotaan');
	$no_telpon = $this->input->post('no_telpon');
	$tgl_registrasi = $this->input->post('tgl_registrasi');
	$jabatan = $this->input->post('jabatan');
	$password = $this->input->post('password');
	$aktif_keanggotaan	= $this->input->post('aktif_keanggotaan');
	
 
	$data = array(
		'username' => $username,
		'nama_anggota' => $nama_anggota,
		'jenis_kelamin' => $jenis_kelamin,
		'tempat_lahir' => $tempat_lahir,
		'tanggal_lahir' => $tanggal_lahir,
		'status' => $status,
		'departemen' => $departemen,
		'pekerjaan' =>$pekerjaan,
		'agama' => $agama,
		'alamat'=>$alamat,
		'kota' => $kota,
		'aktif_keanggotaan' => $aktif_keanggotaan,
		'no_telpon'=> $no_telpon,
		'tgl_registrasi' =>$tgl_registrasi,
		'jabatan' => $jabatan,
		'password' =>$password,
		'aktif_keanggotaan'	=> $aktif_keanggotaan,
		
		
	);
 
	$where = array(
		'id_anggota' => $id
	);
 
	$this->db->where($where);
	$update = $this->db->update('data_anggota',$data);
	$this->session->set_flashdata('success_edit','a'); 
	redirect('admin/master_data/data_anggota');

}


	function insert(){
	$username = $this->input->post('username');
	$nama_anggota = $this->input->post('nama_anggota');
	$jenis_kelamin = $this->input->post('jenis_kelamin');
	$tempat_lahir = $this->input->post('tempat_lahir');
	$tanggal_lahir = $this->input->post('tanggal_lahir');
	$status	= $this->input->post('status');
	$departement = $this->input->post('departement');
	$pekerjaan = $this->input->post('pekerjaan');
	$agama = $this->input->post('agama');
	$alamat = $this->input->post('alamat');
	$kota = $this->input->post('kota');
	$aktif_keanggotaan= $this->input->post('aktif_keanggotaan');
	$no_telpon = $this->input->post('no_telpon');
	$tgl_registrasi = $this->input->post('tgl_registrasi');
	$jabatan = $this->input->post('jabatan');
	$password = $this->input->post('password');
	$aktif_keanggotaan	= $this->input->post('aktif_keanggotaan');
	$photo = $this->input->post('photo');
 
	$data = array(
		'id_anggota' => $id,
		
		'nama_anggota' => $nama_anggota,
		'jenis_kelamin' => $jenis_kelamin,
		'tempat_lahir' => $tempat_lahir,
		'tanggal_lahir' => $tanggal_lahir,
		'status'	=> $status,
		'departemen' => $departement,
		'pekerjaan' =>$pekerjaan,
		'agama' => $agama,
		'alamat'=>$alamat,
		'kota' => $kota,
		'aktif_keanggotaan' => $aktif_keanggotaan,
		'no_telpon'=> $no_telpon,
		'tgl_registrasi' =>$tgl_registrasi,
		'jabatan' => $jabatan,
		
		'aktif_keanggotaan'	=> $aktif_keanggotaan,
		
	);

	
 
	
	$upload_path = './file/';
    $name_input = 'photo';
    $name_image = time();
    $image =  $this->m_data->uploadimage($upload_path,$name_input,$name_image);
    $data['photo'] = $image;
 
	$this->db->where($where);
	$this->db->insert('data_anggota',$data);
	$id_anggota = $this->db->insert_id();
	$data_akun = array(
		'username' => $username,
		'password' => md5($password),
		'level' => 'Member',
		'id_anggota' => $id_anggota
	);

	$this->db->insert('akun',$data_akun);

	$this->session->set_flashdata('success_tambah','a');
	$this->session->keep_flashdata('success','a'); 
	redirect('admin/master_data/data_anggota');
}


	function tambah(){
		$data = array(
			'title' => 'Tambah Data Anggota',
			'page' => 'admin/master_data/v_tambah_anggota',
			'departemen'=> $this->db->get('departemen')->result(),
			'status'=> $this->db->get('status')->result(),
			'pekerjaan'=> $this->db->get('pekerjaan')->result(),
			'agama' => $this->db->get('agama')->result(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}
	function hapus($id){
		$this->db->where('id_anggota',$id)->delete('data_anggota');
		$this->session->set_flashdata('success_hapus','a'); 
		redirect('admin/master_data/data_anggota');
	}
	
	 
}