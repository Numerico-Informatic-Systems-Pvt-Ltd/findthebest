<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
       
		$this->load->library('session');
        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('user_model');
		if (!$this->session->userdata('admin')){ 
            redirect('login');		
        }
    }	
	
	
	public function index()
	{
		$seesion_details=$this->session->userdata('admin'); 
		$data['log_info']=$this->user_model->loging_info($seesion_details['logged_id']);
		//print_r($this->session->userdata('admin')); die;
		$this->load->view('admin/dashboard',$data);
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */