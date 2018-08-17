<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autherization extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
    
    // AUTHERIZATION OF USER FROM DATABASE //
    public function verification($username, $userpass){

        $this->db->select('*');
        $this->db->from('store_users');
        $this->db->where('usrs_email', $username);
        $this->db->where('usrs_password', $userpass);
        $query = $this->db->get();
        //echo $this->db->last_query();
        // $rowCount = $query->num_rows();
    	// 	if($rowCount>0)	{
    	// 		$result = $query->row();
        //         $id = $result->usrs_id;
        //         $role = $result->usrs_role;
        //         print_r($role);die;
    	// 		$userdata = array(
    	// 		'id' => $result->usrs_id,
    	// 		'email' => $result->usrs_email,
        //         'role' => $result->usrs_role
        //         );
    	// 		$this->session->set_userdata($userdata);
    	// 		return $role;
    	// 	} else {
    	// 		return false;
        // 	}
        $result = $query->row();
        return $result;
    }
	
}