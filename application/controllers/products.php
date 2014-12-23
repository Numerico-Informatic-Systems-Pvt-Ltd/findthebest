<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products extends CI_Controller {
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
        $this->load->model('product_model');
    /*  if (!$this->session->userdata('admin')){ 
            redirect('login');
        } */
    }
    public function listing(){
        $seesion_details = $this->session->userdata('admin');
        $data['product_list'] = $this->product_model->get_products();
        $this->load->view('admin/product_listing',$data);
    }
    public function manageProducts($id = null){
        if($id){
            $data['product_details'] = $this->product_model->get_products($id);
        }
        $data['category'] = $this->category_model->check_child_catg_exists();
        if($this->input->post()){
           $attr_list = $this->category_model->catg_attributes($this->input->post('category')); 
           $attributes = explode(',',$attr_list->attr_id);
           $c = count($attributes);
           $attr_value= array();
           for($i=0;$i<$c;$i++){
               $attr_value[] = array(
                   //$attributes[$i] => implode(',',$this->input->post('attribute_values_'.$attributes[$i])),
                     $attributes[$i] => $this->input->post('attribute_values_'.$attributes[$i]),
               );
               //print_r($this->input->post('attribute_values_'.$attributes[$i])) ;
           }
           //echo"<pre>";print_r($attr_value);exit;
           $inputs = array(
                'name'=> $this->input->post('product_name'),
                'catg_id'=> $this->input->post('category'),
                'price'=> $this->input->post('product_price'),
                'description'=> $this->input->post('product_description'),
            );
           if ($_FILES['product_image']['name'] != "") {
                    if (!is_dir(FCPATH . '/images/products')) {
                        mkdir(FCPATH . '/images/products');
                    }

                    $config['upload_path'] = 'images/products/'; // Location to save the image
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['overwrite'] = false;
                    $config['remove_spaces'] = true;
                    $config['max_size'] = '10000'; // in KB
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('product_image')) {

                        $config2['image_library'] = 'gd2';
                        $config2['source_image'] = 'images/products/' . $this->upload->file_name;
                        $config2['create_thumb'] = false;
                        $config2['maintain_ratio'] = TRUE;
                        $config2['master_dim'] = 'width';
                        $config2['width'] = 150; // image re-size  properties
                        $config2['height'] = 150; // image re-size  properties 
                        $config2['new_image'] = 'images/products/thumb' . $this->upload->file_name; // image re-size  properties 
                        $this->load->library('image_lib', $config2); //codeigniter default function
                        $this->image_lib->resize();
                        $inputs['image'] = $this->upload->file_name;
                         $inputs['thumb_image'] = 'thumb'.$this->upload->file_name;
                    } else {
                        $data['product_image'] = $this->upload->display_errors();
                        redirect("products/manageProducts");
                    }
                   
                }
                $pid = $this->product_model->manage_products($id,$inputs);
                if($pid){
                    $this->product_model->manage_product_attributes($pid,$attr_value);
                    redirect("products/manageProducts");
                }
        }
        $this->load->view('admin/manage_product',$data);
    }
    
     public function attributes_search() {
		
        $attr_value = $_POST['attr_value'];
        $catg_id = $_POST['catg'];
		//print_r($attr_value); die;
        $product_list = $this->product_model->search_by_attribute($catg_id, $attr_value);

        foreach ($product_list as $product) {
            echo "<div class='col-lg-12 less_pad product_list'>
                	<div class='col-lg-5 less_pad'>
                    	<div class='product_list_lt'>
                        	<div class='product_box'>
                            	<img src='";
            echo base_url() . "/images/products/$product->thumb_image' alt='$product->name' />
                            	<p>$product->name</p>
                            </div>
                        </div>
                        <div class='product_list_rt'>
                        	<p>$product->description</p>
                            <label class='checkbox-inline'>
                              <input type='checkbox' id='inlineCheckbox1' value='option1'>Add to Compare
                            </label>
                        </div>
                        <div class='clearfix'></div>
                        </div>
                        <div class='col-lg-1 less_pad'>
                            <a href='#' class='what'>What is this?</a>
                            <div class='rating_box'>40</div>
                        </div>
                        <div class='col-lg-2 less_pad'>
                            <div class='price'>
                                    MSRP
                                <p>$product->price</p>
                            </div>
                            <div style='width:70%; margin:0 auto;'><button class='price_btn' type='button'>See Prices</button></div>
                            <!--<div class='price_btn'>See Prices</div>-->
                            <div class='clearfix'></div>
                        </div>
                        <div class='col-lg-2 less_pad'>
                            <div class='impedance'><img src='";
            echo base_url() . "assets/img/imp_img.png' alt='' /></div>
                        </div>
                        <div class='col-lg-2 less_pad'>
                            <div class='sensitivity'><img src='";
            echo base_url() . "assets/img/sensivity.png' alt='' /></div>
                        </div>
                	<div class='clearfix'></div>
                    </div>";
        }

        exit;
    }
	
	function get_sorted_products(){
        $category = $_POST['category'];
        $input = $_POST['attribute'];
        $sorted_data = $this->product_model->product_sorting($category,$input);
        //echo"<pre>";print_r($sorted_data);exit;
        foreach ($sorted_data as $product) {
            echo "<div class='col-lg-12 less_pad product_list'>
                	<div class='col-lg-5 less_pad'>
                    	<div class='product_list_lt'>
                        	<div class='product_box'>
                            	<img src='";
            echo base_url() . "/images/products/$product->thumb_image' alt='$product->name' />
                            	<p>$product->name</p>
                            </div>
                        </div>
                        <div class='product_list_rt'>
                        	<p>$product->description</p>
                            <label class='checkbox-inline'>
                              <input type='checkbox' id='inlineCheckbox1' value='option1'>Add to Compare
                            </label>
                        </div>
                        <div class='clearfix'></div>
                        </div>
                        <div class='col-lg-1 less_pad'>
                            <a href='#' class='what'>What is this?</a>
                            <div class='rating_box'>40</div>
                        </div>
                        <div class='col-lg-2 less_pad'>
                            <div class='price'>
                                    MSRP
                                <p>$product->price</p>
                            </div>
                            <div style='width:70%; margin:0 auto;'><button class='price_btn' type='button'>See Prices</button></div>
                            <!--<div class='price_btn'>See Prices</div>-->
                            <div class='clearfix'></div>
                        </div>
                        <div class='col-lg-2 less_pad'>
                            <div class='impedance'><img src='";
            echo base_url() . "assets/img/imp_img.png' alt='' /></div>
                        </div>
                        <div class='col-lg-2 less_pad'>
                            <div class='sensitivity'><img src='";
            echo base_url() . "assets/img/sensivity.png' alt='' /></div>
                        </div>
                	<div class='clearfix'></div>
                    </div>";
        }

        exit;
    }
}