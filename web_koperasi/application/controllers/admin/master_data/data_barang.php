<?php
class data_barang extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Data Barang',
			'page' => 'admin/master_data/v_data_barang',
			'data_barang' => $this->db->get('data_barang')->result(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}

	function edit($id){
		$data = array(
			'title' => 'Edit Data Barang',
			'page' => 'admin/master_data/v_edit_barang',
			'data_barang' => $this->db->where('id',$id)->get('data_barang')->row(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$nama_barang = $this->input->post('nama_barang');
		$type = $this->input->post('type');
		$merk = $this->input->post('merk');
		$harga = $this->input->post('harga');
		$jumlah_barang = $this->input->post('jumlah_barang');
		$ket = $this->input->post('ket');

		$data = array(
			'nama_barang' => $nama_barang,
			'type' => $type,
			'merk' => $merk,
			'harga' => $harga,
			'jumlah_barang' => $jumlah_barang,
			'ket' => $ket,
		);

		$where = array(
		'id' => $id
		);
 
		$this->db->where($where);
		$this->db->update('data_barang',$data);
		$this->session->set_flashdata('success_tambah','a');
		redirect('admin/master_data/data_barang');
	}

	function insert(){
		$nama_barang = $this->input->post('nama_barang');
		$type = $this->input->post('type');
		$merk = $this->input->post('merk');
		$harga = $this->input->post('harga');
		$jumlah_barang = $this->input->post('jumlah_barang');
		$ket = $this->input->post('ket');

		$data = array(
			'nama_barang' => $nama_barang,
			'type' => $type,
			'merk' => $merk,
			'harga' => $harga,
			'jumlah_barang' => $jumlah_barang,
			'ket' => $ket,
		);

		$this->db->insert('data_barang',$data);
		$this->session->set_flashdata('success_tambah','a');
		redirect('admin/master_data/data_barang');
		
	}

	function tambah(){
		$data = array(
			'title' => 'Tambah Data Barang',
			'page' => 'admin/master_data/v_tambah_barang',
			
		);
		$this->load->view('admin/layout/template',$data);
	}

	 function hapus($id){
 
  		$this->db->where('id', $id);
  		$this->db->delete('data_barang');
  		$this->session->set_flashdata('success_hapus','a'); 
  		redirect('admin/master_data/data_barang');
 }


 	 public function cetak(){
    		ob_start();
    		$data['barang'] = $this->db->get('data_barang')->result();
    		$this->load->view('admin/master_data/print_barang', $data);
    		$html = ob_get_contents();
        	ob_end_clean();
        
        	require_once('./assets/html2pdf/html2pdf.class.php');
    		$pdf = new HTML2PDF('P','A4','en');
    		$pdf->WriteHTML($html);
    		$pdf->Output('data_barang.pdf', 'D');
    	}


    	public function export(){
    		$data['barang'] = $this->db->get('data_barang')->result();
    		$this->load->view('admin/master_data/export_barang', $data);
        
        	
    	}

	}