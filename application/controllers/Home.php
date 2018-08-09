<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view("store/includes/header");
		$this->load->view('store/includes/main_header');
		$this->load->view('store/includes/navbar');
		$this->load->view('store/includes/banners');
		$this->load->view('store/home');
		$this->load->view('store/includes/top_footer');
		$this->load->view('store/includes/footer');
	}
	
}
