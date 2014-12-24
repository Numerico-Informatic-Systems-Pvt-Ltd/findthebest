<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class logout extends CI_Controller {
	
	public function __construct()
     {
            parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
     }
	 
	public function index()
	{
	    $this->session->unset_userdata('admin');
	    $this->session->sess_destroy();
            redirect('login');	
	}
        
        public function UserLogout(){
            $pagelink=$_GET['pagelink'];            
            $this->session->unset_userdata('userdata');
	    $this->session->sess_destroy();         
            redirect($pagelink);	
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */