<?php 
 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function cek_session(){
		if(!$this->session->userdata('admin')){
			$this->session->set_flashdata('message', 'Login Terlebih dahulu');
        	redirect('login');
        }
	}	

	function cek_session_member(){
		if(!$this->session->userdata('member')){
			$this->session->set_flashdata('message', 'Login Terlebih dahulu');
        	redirect('login');
        }
	}	
	

	function uploadImage($upload_path,$name_input,$name_image)
	{
		if (!is_dir($upload_path)) mkdir($upload_path,0777,true);
		$config['upload_path']          = $upload_path;
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['file_name']            = $name_image;
	    $config['overwrite']			= true;
	    $config['max_size']             = 4000; // 4MB
	    $this->load->library('upload', $config);
	    $this->upload->initialize($config);
	    if ($this->upload->do_upload($name_input)) {
	        return $this->upload->data("file_name");
	    }
	    return null;
	}
}