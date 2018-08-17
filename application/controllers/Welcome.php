<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

    // CREATE CUNSTRUCT FUNCTION //
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Autherization', 'auth');
    }

    // LOAD LOGIN PAGE //
	public function index()
	{
		$this->load->view('login');
    }
    
    // VERIFY LOGIN CREDENTIAL FOR SUCCESSFULL LOGIN //
    public function login()
    {
        // $data = $this->input->post();
        // print_r($data);die;
        $this->form_validation->set_rules('username', 'Email Address', 'required');
		$this->form_validation->set_rules('userpass', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		if($this->input->post('username') !='' && $this->input->post('userpass') !=''){
			if($this->form_validation->run() == FALSE) {   } else {
				$username = $this->input->post('username');
				$userpass = md5($this->input->post('userpass'));
                $result = $this->auth->verification($username, $userpass);
                
				if($result > 0){
                    //print_r($result);die;
					if($result->usrs_role=="admin"){
						$userArray = array(
							'usrs_id' 	=> $result->usrs_id,
							'usrs_email' => $result->usrs_email,
							'usrs_role' 	=> $result->usrs_role,
							'logged_in' => TRUE
						);
						$this->session->set_userdata('logged_in',$userArray);
						//$this->session->set_userdata('profile_pic',$result->profile_picture);
						//echo "super";
						redirect('admin/dashboard');
					}
	
					if($result->usrs_role=="users"){
						$userArray = array(
							'usrs_id' 	=> $result->usrs_id,
							'usrs_email' => $result->usrs_email,
							'usrs_role' 	=> $result->usrs_role,
							'logged_in' => TRUE
						);
						$this->session->set_userdata('logged_in',$userArray);
						//$this->session->set_userdata('profile_pic',$result->profile_picture);
						//echo "subadmin";
						redirect('users/dashboard');
					}
				}else{
					$this->session->set_flashdata('error','<span class="text-danger" style="">Invalid Email ID And Password.</span>');
					redirect('welcome');
				}
			}
		}else{
				$this->session->set_flashdata('error','<span class="text-danger" style="">Fields are blank.</span>');
				redirect('welcome');
		}
    }
}
