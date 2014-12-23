<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Visitors extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('language');
        $this->lang->load('admin', 'english');
        $this->load->model('category_model');
        $this->load->model('attribute_model');
        $this->load->model('visitor_model');
        /*  if (!$this->session->userdata('admin')){ 
          redirect('login');
          } */
    }

    public function index() {
        if (!$this->input->post()) {
            $this->load->view('users/userRegister');
        } else {
            $visitors_info = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'f_name' => $this->input->post('f_name'),
                'l_name' => $this->input->post('l_name'),
                'google_id' => $this->input->post('google_id'),
                'facebook_id' => $this->input->post('facebook_id'),
                'phone' => $this->input->post('phone')
            );
            $this->db->insert('visitors', $visitors_info);
        }
    }
    
    
}
