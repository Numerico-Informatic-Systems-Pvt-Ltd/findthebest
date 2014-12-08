<?php

Class category_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
	function viewParentCategory() {
        $sql = 'SELECT * FROM category where parent_id =  "0" AND 	is_deleted = "1" ';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            foreach ($query->result() as $row) {
                $result[] = $row;
            }
            $query->free_result();
            return $result;
        }
    }

    function viewCategory() {
        $sql = 'SELECT * FROM category where is_deleted = "1" ';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            foreach ($query->result() as $row) {
                $result[] = $row;
            }
            $query->free_result();
            return $result;
        }
    }

    function viewCategoryEdit($category_id) {
        $sql = 'SELECT * FROM category where id =  "' . $category_id . '"';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            return $query->first_row();
        }
    }
    
    function viewSubCategory($category) {
        $sql = 'SELECT * FROM category where parent_id =  "'.$category.'" AND 	is_deleted = "1" ';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            foreach ($query->result() as $row) {
                $result[] = $row;
            }
            $query->free_result();
            return $result;
        }
    }

}

?>