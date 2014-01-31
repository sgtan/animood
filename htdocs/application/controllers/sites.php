<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sites extends CI_Controller {

	public function index(){
	
		$this->login();
	}

	public function login(){
		$data['title'] = "Animood";
		$this->load->view("login_view", $data);
	}

	

	public function main(){
		$data['title'] = "Home";
	$this->load->view("head", $data);
		$this->load->view("header");
		$this->load->view("main_content");
			$this->load->view("footer");
	
	}

	public function insert(){
		$this->load->model("user_model");

		$newRow = array(
			"idnumber" => "123456",
			"firstname" => "awtsu",
			"lastname" => "awtsu",
			"email" => "awtsu",
			);

		$this->user_model->insert2($newRow);

	}
	

}

