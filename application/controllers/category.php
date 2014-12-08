<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('category_model');
        /* if (!$this->session->userdata('admin')){ 
          redirect('login');
          } */
    }

    public function index() {
        $seesion_details = $this->session->userdata('admin');
        $data['category'] = $this->category_model->viewParentCategory();

        if (!$this->input->post()) {
            $this->load->view('admin/add_category', $data);
        } else {

            $this->form_validation->set_rules('category_name', 'Category Name', 'trim|required|max_length[200]');
            $this->form_validation->set_message('max_length', 'Max 200 characters only allowed');
            $this->form_validation->set_message('required', '%s can\'t be blank');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/add_category', $data);
            } else {
                //print_r($data['log_info']); die;
                $create = array(
                    'parent_id' => $this->input->post('category'),
                    'category' => $this->input->post('category_name'),
                    'details' => $this->input->post('category_description'),
                    'status' => $this->input->post('category_status')
                );

                if ($_FILES['category_image']['name'] != "") {
                    if (!is_dir(FCPATH . '/images/category')) {
                        mkdir(FCPATH . '/images/category');
                    }

                    $config['upload_path'] = 'images/category/'; // Location to save the image
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['overwrite'] = false;
                    $config['remove_spaces'] = true;
                    $config['max_size'] = '10000'; // in KB
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('category_image')) {

                        $config2['image_library'] = 'gd2';
                        $config2['source_image'] = 'images/category/' . $this->upload->file_name;
                        $config2['create_thumb'] = false;
                        $config2['maintain_ratio'] = TRUE;
                        $config2['master_dim'] = 'width';
                        $config2['width'] = 150; // image re-size  properties
                        $config2['height'] = 150; // image re-size  properties 
                        $config2['new_image'] = 'images/category/thumb' . $this->upload->file_name; // image re-size  properties 
                        $this->load->library('image_lib', $config2); //codeigniter default function
                        $this->image_lib->resize();
                        $create['image'] = $this->upload->file_name;
                    } else {
                        $data['category_image'] = $this->upload->display_errors();
                        redirect("category");
                    }
                }
                $this->db->insert('category', $create);
                $this->load->view('admin/add_category', $data);
            }
        }
    }

    public function viewCategory() {
        $seesion_details = $this->session->userdata('admin');
        $data['category'] = $this->category_model->viewCategory();
        $this->load->view('admin/show_category', $data);
    }

    public function editCategory() {
        $category_id = $this->uri->segment(3);
        $data['edit_category'] = $this->category_model->viewCategoryEdit($category_id);
        $data['category'] = $this->category_model->viewParentCategory();
        $seesion_details = $this->session->userdata('admin');
        
        if (!$this->input->post()) {
            $this->load->view('admin/edit_category', $data);
        } else {

            $this->form_validation->set_rules('category_name', 'Category Name', 'trim|required|max_length[200]');
            $this->form_validation->set_message('max_length', 'Max 200 characters only allowed');
            $this->form_validation->set_message('required', '%s can\'t be blank');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/edit_category', $data);
            } else {
                //print_r($data['log_info']); die;
                $create = array(
                    'category' => $this->input->post('category_name'),
                    'description' => $this->input->post('category_description'),
                    'status' => $this->input->post('product_status')
                );

                if ($_FILES['category_image']['name'] != "") {
                    if (!is_dir(FCPATH . '/images/category/')) {
                        mkdir(FCPATH . '/images/category/');
                    }

                    $config['upload_path'] = 'images/category/'; // Location to save the image
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['overwrite'] = false;
                    $config['remove_spaces'] = true;
                    $config['max_size'] = '10000'; // in KB
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('category_image')) {

                        $config2['image_library'] = 'gd2';
                        $config2['source_image'] = 'images/category/' . $this->upload->file_name;
                        $config2['create_thumb'] = false;
                        $config2['maintain_ratio'] = TRUE;
                        $config2['master_dim'] = 'width';
                        $config2['width'] = 150; // image re-size  properties
                        $config2['height'] = 150; // image re-size  properties 
                        $config2['new_image'] = 'images/category/thumb' . $this->upload->file_name; // image re-size  properties 
                        $this->load->library('image_lib', $config2); //codeigniter default function
                        $this->image_lib->resize();
                        $create['image'] = $this->upload->file_name;
                    } else {
                        //print_r($this->upload->display_errors()); die;
                        $data['category_image'] = $this->upload->display_errors();
                        redirect("category/editCategory");
                    }
                }

                $this->db->update('category', $create, array('id' => $category_id));
                redirect("category/viewCategory");
            }
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */