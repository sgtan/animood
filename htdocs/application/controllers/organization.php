<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organization extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}


	public function register_member(){
			
			$id_num = $this->input->post('idnumber');
			$orgCode = $this->input->post('orgCode');
			
			$this->load->model('organization_model');
			
			$this->load->model('user_model');
			$addSuccess = $this->organization_model->addMember($orgCode, $id_num);
			$userInfo = $this->user_model->getUserInfo2($id_num);

			if($addSuccess == TRUE){ 
				echo '<tr><td>'.$id_num.'</td><td>'.$userInfo->firstname.'</td><td>'.$userInfo->lastname.'</td><td>'.$userInfo->email.'</td></tr>';

			} 
			else
				$this->output->set_status_header('501');
	}

	public function load_member(){
			$this->load->model('organization_model');
			$orgCode = $this->input->get("o");
			$data["orgCode"] = $orgCode;
			
			$data["members"] = $this->organization_model->getMembers($orgCode);
			$data["admins"] = $this->organization_model->getAdmins($orgCode);
			$this->load->view('appoint_admin', $data);
	}

	public function appoint_members(){
			$this->load->model('organization_model');
			$users = $this->input->post("id");
			$orgCode = $this->input->post("o");
			
			$insertSuccess = $this->organization_model->appointAdmins($users, $orgCode);
			
			if($insertSuccess == true){
				$this->output->set_status_header('200');
				$admins = $this->organization_model->getAdmins($orgCode);
				
				foreach($admins as $admin){
					echo '<tr><td>'.$admin->idnumber.'</td><td>'.$admin->lastname.', '.$admin->firstname.'</td></tr>';
				}
			}
			else
				$this->output->set_status_header('501');
			
	
	
	}
}

