<?php
class pengeluaran extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Data Pengeluaran',
			'page' => 'admin/transaksi_kas/v_pengeluaran',
			'data_pengeluaran' => $this->db->select('a.*,b.nama_kas,c.jenis_akun,d.username')
										->from('pengeluaran a')
										->join('data_kas b','a.id_kas=b.id')
										->join('jenis_akun c','a.id_akun=c.id')
										->join('data_pengguna d','a.id_pengguna=d.id')
										->order_by('a.kode_transaksi ASC')
										->get()->result(),
		);
		$this->load->view('admin/layout/template',$data);
	}
	function _getkode() {
		$query = $this->db->select_max('kode_transaksi')->get('pengeluaran')->row();
		$max_kode = $query->kode_transaksi;
		$noUrut = (int) substr($max_kode, 3, 4);
		$noUrut++;
		$char = "DPK";
		$kodeTransaksi = $char . sprintf("%04s", $noUrut);
		return $kodeTransaksi;
	}

	function edit($id){
		$data = array(
			'title' => 'Edit Data Pengeluaran',
			'page' => 'admin/transaksi_kas/v_edit_pengeluaran',
			'data_pengeluaran' => $this->db->where('id',$id)->get('pengeluaran')->row(),
			'id_kas' => $this->db->get('data_kas')->result(),
			'id_akun' => $this->db->get('jenis_akun')->result(),
			'id_pengguna' => $this->db->get('data_pengguna')->result(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$kode_transaksi = $this->input->post('kode_transaksi');
		$tanggal_transaksi = $this->input->post('tanggal_transaksi');
		$uraian = $this->input->post('uraian');
		$id_kas = $this->input->post('id_kas');
		$id_akun = $this->input->post('id_akun');
		$jumlah = $this->input->post('jumlah');
		$id_pengguna = $this->input->post('id_pengguna');

		$data = array(
			'kode_transaksi' => $kode_transaksi,
			'tanggal_transaksi' => $tanggal_transaksi,
			'uraian' => $uraian,
			'id_kas' => $id_kas,
			'id_akun' => $id_akun,
			'jumlah' => $jumlah,
			'id_pengguna' => $id_pengguna,
		);

		$where = array(
		'id' => $id
		);
 
		$this->db->where($where);
		$this->db->update('pengeluaran',$data);
		$this->session->set_flashdata('success_tambah','a');
		redirect('admin/transaksi_kas/pengeluaran');
	}

	function tambah(){
		$data = array(
			'title' => 'Tambah Pengeluaran Tunai',
			'page' => 'admin/transaksi_kas/v_tambah_pengeluaran',
			'data_kas'=> $this->db->get('data_kas')->result(),
			'jenis_akun'=> $this->db->get('jenis_akun')->result(),
			'data_pengguna'=>$this->db->get('data_pengguna')->result(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}

	function insert(){
		$kode_transaksi = $this->_getkode();
		$tanggal_transaksi = $this->input->post('tanggal_transaksi');
		$uraian = $this->input->post('uraian');
		$id_kas = $this->input->post('id_kas');
		$id_akun = $this->input->post('id_akun');
		$jumlah = $this->input->post('jumlah');
		$id_pengguna = $this->input->post('id_pengguna');

		$data = array(
			'kode_transaksi' => $kode_transaksi,
			'tanggal_transaksi' => $tanggal_transaksi,
			'uraian' => $uraian,
			'id_kas' => $id_kas,
			'id_akun' => $id_akun,
			'jumlah' => $jumlah,
			'id_pengguna' => $id_pengguna,
		);

		$this->db->insert('pengeluaran',$data);
		$this->session->set_flashdata('success_tambah','a');
		redirect('admin/transaksi_kas/pengeluaran');
	}

	function hapus($id){
 
  		$this->db->where('id', $id);
  		$this->db->delete('pengeluaran');
  		$this->session->set_flashdata('success_hapus','a'); 
  		redirect('admin/transaksi_kas/pengeluaran');
 }
 	public function cetak(){
    		ob_start();
    		$data['data_pengeluaran'] = $this->db->get('pengeluaran')->result();
    		$this->load->view('admin/transaksi_kas/print_pengeluaran', $data);
    		$html = ob_get_contents();
        	ob_end_clean();
        
        	require_once('./assets/html2pdf/html2pdf.class.php');
    		$pdf = new HTML2PDF('P','A4','en');
    		$pdf->WriteHTML($html);
    		$pdf->Output('pengeluaran.pdf', 'D');
    	}
    public function export(){
    		$data['data_pengeluaran'] = $this->db->get('pengeluaran')->result();
    		$this->load->view('admin/transaksi_kas/export_excel', $data);
        
        	
    	}

 //    public function search(){
 //    		$keyword = $this->input->post('keyword');
 //    		$data['data_pengeluaran'] = $this->m_pengeluaran->get_keyword($keyword);
 //    		$this->load->view('admin/layout/template',$data);
 //    		$this->db->search('pengeluaran');	
 //    		redirect('admin/transaksi_kas/pengeluaran');
 //    	}
 //    public function get_keyword($keyword){
	// 	$this->db->select('*');
	// 	$this->db->from('pengeluaran');
	// 	$this->db->like('kode_transaksi', $keyword);
	// 	$this->db->or_like('tanggal_transaksi',$keyword);
	// 	$this->db->or_like('uraian',$keyword);
	// 	$this->db->or_like('dari_kas',$keyword);
	// 	$this->db->or_like('untuk_akun',$keyword);
	// 	$this->db->or_like('jumlah',$keyword);
	// 	$this->db->or_like('user',$keyword);

	// 	return $this->db->get()->result();
	// }

}