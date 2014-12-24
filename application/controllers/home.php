<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $this->load->model('product_model');
        $this->load->model('attribute_model');
//         if (!$this->session->userdata('user')){ 
//          redirect('userlogin');
//          } 
    }

    public function index() {

        $parent_category = $this->category_model->viewParentCategory();
        /* foreach($parent_category as $key){
          $categories[$key->id] = $this->category_model->getAllCategories($key->id);
          } */
        $data['category'] = $this->category_model->category();
        //print_r($data['category']); die;
        $data['json_parent_category'] = json_encode($parent_category);

        $this->load->view('users/home', $data);
    }

    public function listing($cid = null) {
        //changes by shibu
        $parent_category = $this->category_model->viewParentCategory();
        $data['json_parent_category'] = json_encode($parent_category);
        //changes end by shibu
        $cid = 10;
        $products = $this->product_model->getAllProducts($cid);
        if ($products) {
            $attributes = $products[0]->attributes;
        }
        $attribute_list = explode(',', $attributes);
        foreach ($attribute_list as $attr) {
            $attr_details[] = $this->attribute_model->get_attribute_values($attr);
        }
        $data['category'] = $this->category_model->category();
        $data['category_info'] = $this->category_model->get_parent_catg_info($cid);

        $data['products'] = $products;
        $data['attributes'] = $attr_details;
        $this->load->view('users/listing', $data);
    }

    public function productDetails($pid = null) {
        //changes by shibu
        $parent_category = $this->category_model->viewParentCategory();
        $data['json_parent_category'] = json_encode($parent_category);
        $data['category'] = $this->category_model->category();
        //changes end by shibu
        $pid = 1;
        $data['product_details'] = $this->product_model->getProductDetails($pid);
        //print_r($product_details);exit;
        $data['review_details'] = $this->product_model->getReviewDetails($pid);
        $data['avg_review'] = $this->product_model->getAvgReview($pid);
        //print_r($data['review_details']);
        $this->load->view('users/productDetails', $data);

        if ($this->input->post()) {
            //if ($this->session->userdata('userdata')) {
            $review = array(
                'visitor_id' => '1',
                'product_id' => $pid,
                'review' => $this->input->post('review'),
                'rate' => $this->input->post('rate'),
                'post_date' => date('Y-m-d H:i:s')
            );
            $this->db->insert('review', $review);
            //}
        }
    }

    public function reviewDetails() {
        //changes by shibu
        $parent_category = $this->category_model->viewParentCategory();
        $data['json_parent_category'] = json_encode($parent_category);
        $data['category'] = $this->category_model->category();
        $pid = 1;
        $data['product_details'] = $this->product_model->getProductDetails($pid);
        $data['review_details'] = $this->product_model->getReviewDetails($pid);
        $data['avg_review'] = $this->product_model->getAvgReview($pid);
        if ($this->input->post()) {
            if (($this->session->userdata('userdata'))) {
                $review = array(
                    'visitor_id' => '1',
                    'product_id' => $pid,
                    'review' => $this->input->post('review'),
                    'rate' => $this->input->post('rate'),
                    'post_date' => date('Y-m-d H:i:s')
                );

                $this->db->insert('review', $review);
            } else {
                //$page_link = $this->input->post('pageurl');
                //redirect($page_link);                
            }
        }
        //changes end by shibu
        $this->load->view('users/reviewDetails', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
