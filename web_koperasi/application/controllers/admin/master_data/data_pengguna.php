<?php
class data_pengguna extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Data Pengguna',
			'page' => 'admin/master_data/v_data_pengguna',
			'pengguna' => $this->db->get('data_pengguna')->result(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}
	function edit($id){
		$data = array(
			'title' => 'Edit Data Pengguna',
			'page' => 'admin/master_data/v_edit_pengguna',
			'pengguna' => $this->db->where('id',$id)->get('data_pengguna')->row(),
			
		);
		$this->load->view('admin/layout/template',$data);
	}

	function insert(){
		$username = $this->input->post('username');
		$level = $this->input->post('level');
		$aktif = $this->input->post('aktif');
		
		$data = array(
			'username' => $username,
			'level' => $level,
			'aktif' => $aktif,
			
		);

		$this->db->insert('data_pengguna',$data);
		$this->session->set_flashdata('success_tambah','a');
		redirect('admin/master_data/data_pengguna');
	}
	function update(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$level = $this->input->post('level');
		$aktif = $this->input->post('aktif');
		
		$data = array(
			'username' => $username,
			'level' => $level,
			'aktif' => $aktif,
		);

		$where = array(
		'id' => $id
		);
 
		$this->db->where($where);
		$this->db->update('data_pengguna',$data);
		$this->session->set_flashdata('success_tambah','a');
		redirect('admin/master_data/data_pengguna');
	}
	function tambah(){
		$data = array(
			'title' => 'Tambah Data Pengguna',
			'page' => 'admin/master_data/v_tambah_pengguna',
			
		);
		$this->load->view('admin/layout/template',$data);
	}

	 function hapus($id){
 
  		$this->db->where('id', $id);
  		$this->db->delete('data_pengguna');
  		$this->session->set_flashdata('success_hapus','a'); 
  		redirect('admin/master_data/data_pengguna');
 }


 	 public function cetak(){
    		ob_start();
    		$data['pengguna'] = $this->db->get('data_pengguna')->result();
    		$this->load->view('admin/master_data/print_pengguna', $data);
    		$html = ob_get_contents();
        	ob_end_clean();
        
        	require_once('./assets/html2pdf/html2pdf.class.php');
    		$pdf = new HTML2PDF('P','A4','en');
    		$pdf->WriteHTML($html);
    		$pdf->Output('data_pengguna.pdf', 'D');
    	}


    	public function export(){
    		$data['pengguna'] = $this->db->get('data_pengguna')->result();
    		$this->load->view('admin/master_data/export_pengguna', $data);
        
        	
    	}

	}