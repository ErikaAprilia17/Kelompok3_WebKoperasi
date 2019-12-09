<?php
class transfer extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Data Transfer',
			'page' => 'admin/transaksi_kas/v_transfer',
			'data_transfer' => $this->db->select('a.*,b.nama_kas,c.nama_kas,d.username')
										->from('transfer a')
										->join('data_kas b','a.id_kas=b.id')
										->join('data_kas c','a.id_data_kas=c.id')
										->join('data_pengguna d','a.id_pengguna=d.id')
										->order_by('a.kode_transaksi ASC')
										->get()->result(),
		);
		$this->load->view('admin/layout/template',$data);
	}

	function _getkode(){
		$query = $this->db->select_max('kode_transaksi')->get('transfer')->row();
		$max_kode = $query->kode_transaksi;
		$noUrut = (int) substr($max_kode, 3, 4);
		$noUrut++;
		$char = "TRF";
		$kodeBarang = $char . sprintf("%04s", $noUrut);
		return $kodeBarang;
	}

	function edit($id){
		$data = array(
			'title' => 'Edit Data Transfer',
			'page' => 'admin/transaksi_kas/v_edit_transfer',
			'data_transfer' => $this->db->where('id',$id)->get('transfer')->row(),
			'id_kas' => $this->db->get('data_kas')->result(),
			'id_data_kas' => $this->db->get('data_kas')->result(),
			'id_pengguna' => $this->db->get('data_pengguna')->result(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$kode_transaksi = $this->input->post('kode_transaksi');
		$tanggal_transaksi = $this->input->post('tanggal_transaksi');
		$uraian = $this->input->post('uraian');
		$jumlah = $this->input->post('jumlah');
		$id_kas = $this->input->post('id_kas');
		$id_data_kas = $this->input->post('id_data_kas');
		$jumlah = $this->input->post('jumlah');
		$id_pengguna = $this->input->post('id_pengguna');

		$data = array(
			'kode_transaksi' => $kode_transaksi,
			'tanggal_transaksi' => $tanggal_transaksi,
			'uraian' => $uraian,
			'id_kas' => $id_kas,
			'id_data_kas' => $id_data_kas,
			'jumlah' => $jumlah,
			'id_pengguna' => $id_pengguna,
		);

		$where = array(
		'id' => $id
		);
 
		$this->db->where($where);
		$this->db->update('transfer',$data);
		$this->session->set_flashdata('success_tambah','a');
		redirect('admin/transaksi_kas/transfer');
	}

	function tambah(){
		$data = array(
			'title' => 'Tambah transfer',
			'page' => 'admin/transaksi_kas/v_tambah_transfer',
			'data_kas'=> $this->db->get('data_kas')->result(),
			'data'=> $this->db->get('data_kas')->result(),
			'data_pengguna'=>$this->db->get('data_pengguna')->result(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}

	function insert(){
		$kode_transaksi = $this->_getkode();
		$tanggal_transaksi = $this->input->post('tanggal_transaksi');
		$uraian = $this->input->post('uraian');
		$jumlah = $this->input->post('jumlah');
		$id_kas = $this->input->post('id_kas');
		$id_data_kas = $this->input->post('id_data_kas');
		$jumlah = $this->input->post('jumlah');
		$id_pengguna = $this->input->post('id_pengguna');

		$data = array(
			'kode_transaksi' => $kode_transaksi,
			'tanggal_transaksi' => $tanggal_transaksi,
			'uraian' => $uraian,
			'id_kas' => $id_kas,
			'id_data_kas' => $id_data_kas,
			'jumlah' => $jumlah,
			'id_pengguna' => $id_pengguna,
			
		);

		$this->db->insert('transfer',$data);
		$this->session->set_flashdata('success_tambah','a');
		redirect('admin/transaksi_kas/transfer');
	}

	 function hapus($id){
 
  		$this->db->where('id', $id);
  		$this->db->delete('transfer');
  		$this->session->set_flashdata('success_hapus','a'); 
  		redirect('admin/transaksi_kas/transfer');
 }
 	public function cetak(){
    	ob_start();
    	$data['data_transfer'] = $this->db->get('transfer')->result();
    	$this->load->view('admin/transaksi_kas/print_transfer', $data);
    	$html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    	$pdf = new HTML2PDF('P','A4','en');
    	$pdf->WriteHTML($html);
    	$pdf->Output('transfer.pdf', 'D');
    	}

    public function export(){
    	$data['data_transfer'] = $this->db->get('transfer')->result();
    	$this->load->view('admin/transaksi_kas/export_excel_transfer', $data);
        
        	
    	}
}