<?php
class jenis_akun extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Jenis Akun',
			'page' => 'admin/master_data/v_jenis_akun',
			'data_akun' => $this->db->get('jenis_akun')->result(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}
	function _getkode(){
		$query = $this->db->select_max('kode_aktiva')->get('jenis_akun')->row();
		$max_kode = $query->kode_aktiva;
		$noUrut = (int) substr($max_kode, 3, 4);
		$noUrut++;
		$char = "A";
		$kodeBarang = $char . sprintf("%04s", $noUrut);
		return $kodeBarang;
	}

	function edit($id){
		$data = array(
			'title' => 'Edit Jenis Akun',
			'page' => 'admin/master_data/v_edit_akun',
			'data_akun' => $this->db->where('id',$id)->get('jenis_akun')->row(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$kode_aktiva = $this->input->post('kode_aktiva');
		$jenis_akun = $this->input->post('jenis_akun');
		$akun = $this->input->post('akun');
		$pemasukan = $this->input->post('pemasukan');
		$pengeluaran = $this->input->post('pengeluaran');
		$aktif = $this->input->post('aktif');
		$laba_rugi = $this->input->post('laba_rugi');

		$data = array(
			'kode_aktiva' => $kode_aktiva,
			'jenis_akun' => $jenis_akun,
			'akun' => $akun,
			'pemasukan' => $pemasukan,
			'pengeluaran' => $pengeluaran,
			'aktif' => $aktif,
			'laba_rugi' => $laba_rugi,
		);

		$where = array(
		'id' => $id
		);
 
		$this->db->where($where);
		$this->db->update('jenis_akun',$data);
		$this->session->set_flashdata('success_edit','a');
		redirect('admin/master_data/jenis_akun');
	}

	function tambah(){
		$data = array(
			'title' => 'Tambah Jenis Akun',
			'page' => 'admin/master_data/v_tambah_akun',
			
		);
		$this->load->view('admin/layout/template',$data);
	}

	function insert(){
		$kode_aktiva = $this->_getkode();
		$jenis_akun = $this->input->post('jenis_akun');
		$akun = $this->input->post('akun');
		$pemasukan = $this->input->post('pemasukan');
		$pengeluaran = $this->input->post('pengeluaran');
		$aktif = $this->input->post('aktif');
		$laba_rugi = $this->input->post('laba_rugi');

		$data = array(
			'kode_aktiva' => $kode_aktiva,
			'jenis_akun' => $jenis_akun,
			'akun' => $akun,
			'pemasukan' => $pemasukan,
			'pengeluaran' => $pengeluaran,
			'aktif' => $aktif,
			'laba_rugi' => $laba_rugi,
		);

		$this->db->insert('jenis_akun',$data);
		$this->session->set_flashdata('success_tambah','a');
		redirect('admin/master_data/jenis_akun');
	}

	 function hapus($id){
 
  		$this->db->where('id', $id);
  		$this->db->delete('jenis_akun');
  		$this->session->set_flashdata('success_hapus','a'); 
  		redirect('admin/master_data/jenis_akun');
 }


 	public function cetak(){
    		ob_start();
    		$data['data_akun'] = $this->db->get('jenis_akun')->result();
    		$this->load->view('admin/master_data/print_akun', $data);
    		$html = ob_get_contents();
        	ob_end_clean();
        
        	require_once('./assets/html2pdf/html2pdf.class.php');
    		$pdf = new HTML2PDF('P','A4','en');
    		$pdf->WriteHTML($html);
    		$pdf->Output('jenis_akun.pdf', 'D');
    	}


    	public function export(){
    		$data['data_akun'] = $this->db->get('jenis_akun')->result();
    		$this->load->view('admin/master_data/export_akun', $data);
        
        	
    	}

}