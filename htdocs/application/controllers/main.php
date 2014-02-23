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
   			$data['awesome'] = $this->facultymain_model->getMoodID1( $data['idnum']);
   			$data['contented'] = $this->facultymain_model->getMoodID2( $data['idnum']);
   			
   		}

        $this->load->view("head", $data);
		$this->load->view("header");
		$this->load->view("main_content");
		$this->load->view("footer");
        
    }

  





	

}

