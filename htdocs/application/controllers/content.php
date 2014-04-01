<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
	}


 	public function home(){
 		if($this->session->userdata('type') == 1){
 			$this->load->view('student_main.php');
 		}
 		else{
 			$this->faculty_main();
 		}
        
	}

	public function evaluation(){
		$data['type'] = $this->input->get('type');
		$this->load->model('evaluation_model');
		$this->load->model('mood_model');
		if($data['type']==1){
			$data['courseCode'] = $this->input->get('coursecode');
			$data['section'] = $this->input->get('section'); 
 
			$data['professor'] = $this->evaluation_model->getProfessor($data[
				'courseCode'], $data['section'], 21314);
			
  		}
  		else if ($data['type'] ==2){
  			$this->load->model('organization_model');
  			$data['orgCode'] = $this->input->get('orgCode');
  			$data['orgName'] = $this->organization_model->getOrgName($data['orgCode']);

  		}
  		else if($data['type'] == 3){
  			$data['eventname'] = $this->input->get('eventname');
  			$data['eventid'] = $this->input->get('eventid');


  		}
  		else if($data['type'] == 4){
  			$data['officename'] = $this->input->get('officename');
  			$data['officeid'] = $this->input->get('officeid');
  		}

  		$data['question'] = $this->evaluation_model->getEvalQuestions($data['type']); 
  		$data['recommendation'] = $this->evaluation_model->getEvalRecom($data['type']);
  		$data['mood'] = $this->mood_model->getMood();
  		$data['color'] = $this->mood_model->getMoodColorById($this->mood_model->getMoodOfTheDay());


		$data['idnum'] =  $this->session->userdata('idnum');
 		$data['name'] =  $this->session->userdata('firstname'). " ".  $this->session->userdata('lastname');


		$this->load->view("header", $data);

  		$this->load->view('evaluation.php', $data);
	}

	public function register_member(){
		$this->load->model('organization_model');
		 $data['org_members'] = $this->organization_model->getMembers($this->input->get('orgCode')); 
		 $this->load->view("org_register", $data);
	}

	public function eval_summary(){
		$type = $_POST['type'];
		$this->load->model('evaluation_model');
		$data['question'] = $_POST['question'];
		$data['answer'] = $_POST['answer'];
		$data['checkbox'] = $_POST['checkbox'];
		$data['comment'] = $_POST['comment'];
		$data['timestamp'] = $_POST['timestamp'];


		if($type == 1){
			$data['courseCode'] = $_POST['courseCode'];
			$data['section'] = $_POST['section'];

			$id = $this->evaluation_model->insertEval($this->session->userdata('idnum'), 21314, $data['courseCode'], $data['section'], $data['comment'], $data['timestamp']);

		}
		else if($type == 2){
			$data['orgCode'] = $_POST['orgCode'];

			$id = $this->evaluation_model->insertOrgEval($this->session->userdata('idnum'), $data['orgCode'], 21314, $data['comment'], $data['timestamp']);

		}
		else if($type == 3){
			$data['eventid'] = $_POST['eventid'];

			$id = $this->evaluation_model->insertEventEval($this->session->userdata('idnum'), $data['eventid'], $data['comment'], $data['timestamp']);
		}
		else if($type == 4){
			$data['officeid'] = $_POST['officeid'];

			$id = $this->evaluation_model->insertOfficeEval($this->session->userdata('idnum'), $data['officeid'], 21314, $data['comment'], $data['timestamp']);
		}

		$this->evaluation_model->insertRecom($id, $data['checkbox'], $type);
		$this->evaluation_model->insertAns($id, $data['question'], $data['answer'], $type);

		$this->load->model('mood_model');
		$data['color'] = $this->mood_model->getMoodColorById($this->mood_model->getMoodOfTheDay());
		
		$data['idnum'] =  $this->session->userdata('idnum');
 		$data['name'] =  $this->session->userdata('firstname'). " ".  $this->session->userdata('lastname');


		$this->load->view("header", $data);
		$this->load->view('summary.php');
	}

	public function view_list(){
		$data['type'] = $this->input->get('type');
		if($data['type']==3){
			$this->load->model('event_model');
			$data['event'] = $this->event_model->getEventList();
		}
		else if($data['type']==4){
			$this->load->model('office_model');
			$data['office'] = $this->office_model->getOfficeList();
		}

		$this->load->model('mood_model');
		$data['color'] = $this->mood_model->getMoodColorById($this->mood_model->getMoodOfTheDay());
		
		$data['idnum'] =  $this->session->userdata('idnum');
 		$data['name'] =  $this->session->userdata('firstname'). " ".  $this->session->userdata('lastname');


		$this->load->view("header", $data);
		
		$this->load->view('list.php', $data);
	}

	public function faculty_main(){

		$this->load->model('facultymain_model');
		$data['awesome'] = $this->facultymain_model->getMoodID1($this->session->userdata('idnum'));
		$data['contented'] = $this->facultymain_model->getMoodID2($this->session->userdata('idnum'));  
	
  		$this->load->view('faculty_main.php', $data);
	}
}

