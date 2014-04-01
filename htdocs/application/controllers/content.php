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

  		$this->load->view('evaluation.php', $data);
	}

	public function register_member(){
		$this->load->model('organization_model');
		$data['orgCode'] = $this->input->get('orgCode');
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
		
 		$arr = array();

 		$colorObj = $this->mood_model->getMoodColorById($this->mood_model->getMoodOfTheDay());

 		$arr['color'] = $colorObj[0]->bgcolor;

		$arr['content'] = $this->load->view('summary.php', $data, TRUE);

		$json = json_encode($arr, JSON_FORCE_OBJECT);

		echo $json;
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

		$this->load->view('list.php', $data);
	}

	public function faculty_main(){

		$this->load->model('facultymain_model');  
		$data['moodName'] = $this->facultymain_model->getMoodNames();	

		$moodData = array();
		 for($moodid = 1; $moodid <= 9; $moodid++){ 
		 	$moodData[$moodid] = $this->facultymain_model->getMoodID($this->session->userdata('idnum'),$moodid); 
		 }

		  $data['moodData'] = $moodData;

		  $moodData2 = array();
		 for($moodid = 1; $moodid <= 9; $moodid++){ 
		 	$moodData2[$moodid] = $this->facultymain_model->getMoodID2($this->session->userdata('idnum'),$moodid); 
		 }

		  $data['moodData2'] = $moodData2;

		  $moodData3 = array();
		 for($moodid = 1; $moodid <= 9; $moodid++){ 
		 	$moodData3[$moodid] = $this->facultymain_model->getMoodID3($this->session->userdata('idnum'),$moodid); 
		 }

		  $data['moodData3'] = $moodData3;

		  $moodData4 = array();
		 for($moodid = 1; $moodid <= 9; $moodid++){ 
		 	$moodData4[$moodid] = $this->facultymain_model->getMoodID4($this->session->userdata('idnum'),$moodid); 
		 }

		  $data['moodData4'] = $moodData4;

		  $moodData5 = array();
		 for($moodid = 1; $moodid <= 9; $moodid++){ 
		 	$moodData5[$moodid] = $this->facultymain_model->getMoodID5($this->session->userdata('idnum'),$moodid); 
		 }

		  $data['moodData5'] = $moodData5;

		  $moodData6 = array();
		 for($moodid = 1; $moodid <= 9; $moodid++){ 
		 	$moodData6[$moodid] = $this->facultymain_model->getMoodID6($this->session->userdata('idnum'),$moodid); 
		 }

		  $data['moodData6'] = $moodData6;


		    $moodData7 = array();
		 for($moodid = 1; $moodid <= 9; $moodid++){ 
		 	$moodData7[$moodid] = $this->facultymain_model->getMoodID7($this->session->userdata('idnum'),$moodid); 
		 }

		  $data['moodData7'] = $moodData7;

		  $moodData8 = array();
		 for($moodid = 1; $moodid <= 9; $moodid++){ 
		 	$moodData8[$moodid] = $this->facultymain_model->getMoodID8($this->session->userdata('idnum'),$moodid); 
		 }

		  $data['moodData8'] = $moodData8;

		  $moodData9 = array();
		 for($moodid = 1; $moodid <= 9; $moodid++){ 
		 	$moodData9[$moodid] = $this->facultymain_model->getMoodID9($this->session->userdata('idnum'),$moodid); 
		 }

		  $data['moodData9'] = $moodData9;


  		$this->load->view('faculty_main.php', $data);
	}

	public function studentMain(){ 

		$this->load->model('studentmain_model');  
		$data['topProf'] = $this->studentmain_model->getTopProf();

		$data['topOffice'] = $this->studentmain_model->getTopOffice();

		$data['topOrg'] = $this->studentmain_model->getTopOrg();

  		$this->load->view('student_main.php', $data);	
	}
}

