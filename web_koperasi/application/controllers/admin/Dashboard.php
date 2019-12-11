<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	 function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->m_login->cek_session();
    }

	public function index()
	{
		// $sess = $this->session->userdata('user');
		// print_r($sess);

		$data = array(
			'title' => 'Dashboard',
			'page' => 'admin/dashboard_v'
		);
		$this->load->view('admin/layout/template',$data);
	}

	}
