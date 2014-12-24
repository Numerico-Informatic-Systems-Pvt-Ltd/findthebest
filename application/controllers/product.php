<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller {

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

    public function review() {
        if (!$this->input->post()) {
            $this->load->view('users/productReview');
        } else {
            $review = array(
                'visitor_id' => '1',
                'product_id' => '1',
                'review' => $this->input->post('review'),
                'rate' => $this->input->post('rate'),
                'post_date' => date('Y-m-d H:i:s')
            );
            $this->db->insert('review', $review);
        }
    }

   

}
