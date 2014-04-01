<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
	}


	public function index(){
		if($this->session->userdata('idnum') == FALSE)
			$this->login();
		else 
			$this->main();
	}

	public function login(){
		$data['title'] = 'Animood';

		$this->load->model('mood_model');
		$data['mood'] = $this->mood_model->getMoodById($this->mood_model->getMoodOfTheDay());


		$data['color'] = $this->mood_model->getMoodColorById($this->mood_model->getMoodOfTheDay());


		$data['fontColor'] = '#ffffff';
		$data['jumboColor'] = 'rgba(0,0,0,0.3)';
		$this->load->view("login_view", $data);
	}

	public function login_invalid(){
		$data['title'] = 'Animood';

		$this->load->model('mood_model');
		$data['mood'] = $this->mood_model->getMoodById($this->mood_model->getMoodOfTheDay());


		$data['color'] = $this->mood_model->getMoodColorById($this->mood_model->getMoodOfTheDay());


		$data['fontColor'] = '#ffffff';
		$data['jumboColor'] = 'rgba(0,0,0,0.3)';
		$this->load->view("login_invalid", $data);
	}

	public function register_invalid(){
		$data['title'] = 'Animood';

		$this->load->model('mood_model');
		$data['mood'] = $this->mood_model->getMoodById($this->mood_model->getMoodOfTheDay());


		$data['color'] = $this->mood_model->getMoodColorById($this->mood_model->getMoodOfTheDay());


		$data['fontColor'] = '#ffffff';
		$data['jumboColor'] = 'rgba(0,0,0,0.3)';
		$this->load->view("register_invalid", $data);
	}
	public function register_success(){
		$data['title'] = 'Animood';

		$this->load->model('mood_model');
		$data['mood'] = $this->mood_model->getMoodById($this->mood_model->getMoodOfTheDay());


		$data['color'] = $this->mood_model->getMoodColorById($this->mood_model->getMoodOfTheDay());


		$data['fontColor'] = '#ffffff';
		$data['jumboColor'] = 'rgba(0,0,0,0.3)';
		$this->load->view("register_success", $data);
	}

	public function main()
    {	

		$this->load->model('mood_model');
		$data['color'] = $this->mood_model->getMoodColorById($this->mood_model->getMoodOfTheDay());
        
        $data['title'] = "Home";
        $data['idnum'] =  $this->session->userdata('idnum');
 		$data['name'] =  $this->session->userdata('firstname'). " ".  $this->session->userdata('lastname');
 		$data['type'] = $this->session->userdata('type');

		$this->load->model('class_model');
   		$data['courses']  = $this->class_model->getCourses($data['idnum'], 21314);

   		$this->load->model('organization_model');
 		$data['organizations']  = $this->organization_model->getOrgs($data['idnum']);  

 		if($data['type'] == 2){
   			$this->load->model('facultymain_model');
   			$data['moodName'] = $this->facultymain_model->getMoodNames();

   		/*	$data['moodData'] = $this->facultymain_model->getMoodID( $data['idnum','moodData']); */

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



		




		 }

   		
		 $this->load->model('studentmain_model');
 		$data['topProf']  = $this->studentmain_model->getTopProf(); 

 		$data['topOffice']  = $this->studentmain_model->getTopOffice();

 		$data['topOrg']  = $this->studentmain_model->getTopOrg();

        $this->load->view("head", $data);
		$this->load->view("header");
		$this->load->view("main_content");
		$this->load->view("footer");
        
    }

  





	

}

