<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Attribute extends CI_Controller {

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
        /* if (!$this->session->userdata('admin')){ 
          redirect('login');
          } */
    }

    public function manageAttribute($id = 0){
        $response = false;
       if($id){
        $data['attr_data'] = $this->attribute_model->get_attribute_by_id($id);
       }
        $seesion_details = $this->session->userdata('admin');
        $data['attribute']= $this->attribute_model->get_attributes();
        if($this->input->post()){
            $attrs = $this->input->post();
            if($this->input->post('id')){
                $response = $this->attribute_model->manage_attribute($id,$attrs);
            }else{
                $response = $this->attribute_model->manage_attribute($id=null,$attrs);
            }
        }
        if($response){
            redirect("attribute/manageAttribute");
        }
        $this->load->view('admin/manage_attribute',$data);
    }
    public function deleteAttribute(){

    }
    public function get_catg_attributes(){
        $id = $_POST['catg_id'];
        $attr_list = $this->category_model->catg_attributes($id); 
        $attributes = explode(',',$attr_list->attr_id);
        $details = array();
        $name = array();
        $c = 0;
        foreach($attributes as $attr){
            $c++;
            $name = $this->attribute_model->get_attribute_by_id($attr);
            echo "<div class='control-group'><label class='control span2'>".ucfirst($name->name)."</label>";

            $details = $this->attribute_model->get_attribute_values($attr);
                echo"<div class='controls'><select name='attribute_values_".$attr."' class='span4'><option value='0' selected>".$this->lang->line("select")." ".$this->lang->line("attribute")." ".$this->lang->line("value")."</option>";
                foreach($details as $values):
                    echo"<option value='$values->id'>".$values->attr_value."</option>";
                endforeach;
                echo"</select><span class='help-inline'></span></div>";
            echo "</div>";

        }
        exit;
    }
    public function manageAttributevalues($id = null){
        $seesion_details = $this->session->userdata('admin');
        $data['attribute'] = $this->attribute_model->get_defined_attributes();
        if($this->input->post()){
            //echo"<pre>";print_r($this->input->post());exit;
            $inputs = $this->input->post();
            $this->attribute_model->manage_attribute_value($id,$inputs);
        }
        $this->load->view('admin/manage_attribute_values',$data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
