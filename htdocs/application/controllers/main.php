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
		$data['color'] = '#3b243f';
		$data['fontColor'] = '#ffffff';
		$data['jumboColor'] = 'rgba(255,255,255,0.1)';
		$data['mood'] = 'AWESOME';
		$this->load->view("login_view", $data);
	}

	public function main()
    {

        $data['title'] = "Home";
        $data['idnum'] =  $this->session->userdata('idnum');
 		$data['name'] =  $this->session->userdata('firstname'). " ".  $this->session->userdata('lastname');
 		$data['type'] = $this->session->userdata('type');

		$this->load->model('class_model');
   		$data['course']  = $this->class_model->getCourses($data['idnum'], 21314);


        $this->load->view("head", $data);
		$this->load->view("header");
		$this->load->view("main_content");
		$this->load->view("footer");
        
    }

    public function home(){
        $this->load->view('student_main.php');

	}

	public function evaluation(){
		$courseCode = $this->input->get('courseCode');
		//getgourse from db lagay sa data
		$this->load->model('evaluation_model'); 
		$data['question'] = $this->evaluation_model->getEvalQuestions($this->session->userdata('type')); 
		$data['recommendation'] = $this->evaluation_model->getEvalRecom($this->session->userdata('type'));
  		$this->load->view('evaluation.php', $data);

	}





	

}

