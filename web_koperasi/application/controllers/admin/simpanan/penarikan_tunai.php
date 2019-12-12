<?php
class penarikan_tunai extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Data Penarikan Tunai',
			'page' => 'admin/simpanan/v_penarikan_tunai',
			'data_penarikan' => $this->db->select('a.*,b.nama_anggota,c.departemen,d.jenis_simpanan,e.username')
										->from('penarikan_tunai a')
										->join('data_anggota b','a.id_anggota=b.id_anggota')
										->join('departemen c','a.id_departemen=c.id')
										->join('jenis_simpanan d','a.id_jenis_simpanan=d.id')
										->join('data_pengguna e','a.id_pengguna=e.id')
										->order_by('a.kode_transaksi ASC')
										->get()->result(),

			
		);
		$this->load->view('admin/layout/template',$data);
	}

	function _getkode(){
		$query = $this->db->select_max('kode_transaksi')->get('penarikan_tunai')->row();
		$max_kode = $query->kode_transaksi;
		$noUrut = (int) substr($max_kode, 3, 4);
		$noUrut++;
		$char = "TRK";
		$kodeBarang = $char . sprintf("%04s", $noUrut);
		return $kodeBarang;
	}

	function edit($id){
		$data = array(
			'title' => 'Edit Data Penarikan Tunai',
			'page' => 'admin/simpanan/v_edit_penarikan',
			'data_penarikan' => $this->db->where('id',$id)->get('penarikan_tunai')->row(),
			'id_anggota' => $this->db->get('data_anggota')->result(),
			'id_departemen' => $this->db->get('departemen')->result(),
			'id_jenis_simpanan' => $this->db->get('jenis_simpanan')->result(),
			'id_pengguna' => $this->db->get('data_pengguna')->result(),

		);
		$this->load->view('admin/layout/template',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$kode_transaksi = $this->input->post('kode_transaksi');
		$tanggal_transaksi = $this->input->post('tanggal_transaksi');
		$id_anggota = $this->input->post('id_anggota');
		$departemen = $this->input->post('id_departemen');
		$jenis_penarikan = $this->input->post('id_jenis_simpanan');
		$jumlah = $this->input->post('jumlah');
		$id_pengguna = $this->input->post('id_pengguna');

		$data = array(
			'kode_transaksi' => $kode_transaksi,
			'tanggal_transaksi' => $tanggal_transaksi,
			'id_anggota' => $id_anggota,		
			'id_departemen' => $departemen,
			'id_jenis_simpanan' => $jenis_penarikan,
			'jumlah' => $jumlah,
			'id_pengguna' => $id_pengguna,
		);

		$where = array(
		'id' => $id
		);
 
		$this->db->where($where);
		$this->db->update('penarikan_tunai',$data);
		$this->session->set_flashdata('success_tambah','a');
		redirect('admin/simpanan/penarikan_tunai');
	}

	function tambah(){
		$data = array(
			'title' => 'Tambah Penarikan Tunai',
			'page' => 'admin/simpanan/v_tambah_penarikan',
			'jenis_simpanan' => $this->db->get('jenis_simpanan')->result(),
			'data_anggota' => $this->db->get('data_anggota')->result(),
			'departemen'=> $this->db->get('departemen')->result(),
			'pengguna'=> $this->db->get('data_pengguna')->result(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}

	function insert(){
		$kode_transaksi = $this->_getkode();
		$tanggal_transaksi = $this->input->post('tanggal_transaksi');
		$id_anggota = $this->input->post('id_anggota');
		$departemen = $this->input->post('id_departemen');
		$jenis_penarikan = $this->input->post('id_jenis_simpanan');
		$jumlah = $this->input->post('jumlah');
		$id_pengguna = $this->input->post('id_pengguna');
		$nama_kuasa = $this->input->post('nama_kuasa');
		$no_identitas = $this->input->post('no_identitas');
		$alamat = $this->input->post('alamat');

		$data = array(
			'kode_transaksi' => $kode_transaksi,
			'tanggal_transaksi' => $tanggal_transaksi,
			'id_anggota' => $id_anggota,
			'id_departemen' => $departemen,
			'id_jenis_simpanan' => $jenis_penarikan,
			'jumlah' => $jumlah,
			'id_pengguna' => $id_pengguna,
			'nama_kuasa' => $nama_kuasa,
			'no_identitas' => $no_identitas,
			'alamat' => $alamat,
			
		);

		$this->db->insert('penarikan_tunai',$data);
		$this->session->set_flashdata('success_tambah','a');
		
		redirect('admin/simpanan/penarikan_tunai');
	}

	 function hapus($id){
 
  		$this->db->where('id', $id);
  		$this->db->delete('penarikan_tunai');
  		$this->session->set_flashdata('success_hapus','a'); 
  		redirect('admin/simpanan/penarikan_tunai');
 	}

 	public function cetak(){
    		ob_start();
    		$data['data_penarikan'] = $this->db->get('penarikan_tunai')->result();
    		$this->load->view('admin/simpanan/print_penarikan', $data);
    		$html = ob_get_contents();
        	ob_end_clean();
        
        	require_once('./assets/html2pdf/html2pdf.class.php');
    		$pdf = new HTML2PDF('P','A4','en');
    		$pdf->WriteHTML($html);
    		$pdf->Output('penarikan_tunai.pdf', 'D');
  }


		 public function cetak_nota(){
			ob_start();
			$data['data_penarikan'] = $this->db->get('penarikan_tunai')->result();
			$this->load->view('admin/simpanan/cetak_nota_penarikan', $data);
			$html = ob_get_contents();
			        ob_end_clean();
			        
			 require_once('./assets/html2pdf/html2pdf.class.php');
			    $pdf = new HTML2PDF('P','A4','en');
			    $pdf->WriteHTML($html);
			    $pdf->Output('Data Penarikan Tunai.pdf', 'D');
  }

  		public function export(){
    		$data['data_penarikan'] = $this->db->get('penarikan_tunai')->result();
    		$this->load->view('admin/simpanan/export_penarikan', $data);
        
        	
    	}


}