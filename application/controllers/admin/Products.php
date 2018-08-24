<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    //  DASHBOARD CONSTRUCT FUNCTION //
    public function __construct()
    {
        parent::__construct();

    }
	public function index()
	{
        $reference = $this->session->userdata('logged_in');
		if(empty($reference)){
			redirect('','refresh');
		}

		$this->load->view("admin/includes/header");
		$this->load->view('admin/includes/top_header');
		$this->load->view('admin/includes/sidebar');
		$this->load->view('admin/viewProducts');
		$this->load->view('admin/includes/foot');
		$this->load->view('admin/includes/footer');
    }
    public function add()
	{
        $reference = $this->session->userdata('logged_in');
		if(empty($reference)){
			redirect('','refresh');
		}

		$this->load->view("admin/includes/header");
		$this->load->view('admin/includes/top_header');
		$this->load->view('admin/includes/sidebar');
		$this->load->view('admin/addProducts');
		$this->load->view('admin/includes/foot');
		$this->load->view('admin/includes/footer');
	}
	
}
