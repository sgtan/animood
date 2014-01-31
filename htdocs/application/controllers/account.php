<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('user_model');
	}


	
	public function log_in(){
		/*
			*if the request was (should never be) a GET request, it's not a valid request.
		*/
		if($this->input->server('REQUEST_METHOD') == 'GET') redirect('');

		/*
			*get inputs from previous page
			*$this->input->post() is used instead of $this->input->get() because the request was (should always be) a POST request.
		*/

		$idnum = $this->input->post('idnum');

		$password = $this->input->post('password');

		

		$result = $this->user_model->getUserInfo($idnum,$password);
		if($result != false)
		{
			$this->session->set_userdata('idnum', $result->idnumber);
			$this->session->set_userdata('firstname', $result->firstname);
			$this->session->set_userdata('lastname', $result->lastname);
			$this->session->set_userdata('type', $result->type);
		}
	
		redirect('');

	
	}

	public function register(){
	
	$inputs = $this->input->post(NULL, TRUE);
		$regSuccess = $this->user_model->register($inputs);
		
		if(is_bool($regSuccess) == TRUE)
			if($regSuccess == TRUE)
				echo 'congratulations';
			else 
				echo 'error';
		else
			echo 'exist';
		

	}

	public function log_out(){

		$this->session->sess_destroy();
		
		redirect('');
	}

	

}

