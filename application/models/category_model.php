<?php

Class category_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
	function viewParentCategory() {
        $sql = 'SELECT * FROM category where parent_id =  "0" AND is_deleted = "1" ';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            foreach ($query->result() as $row) {
                $result[] = $row;
            }
            $query->free_result();
            return $result;
        }
    }
	
	function category() {
        $sql = 'SELECT * FROM category where is_deleted = "1" ';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            foreach ($query->result() as $row) {
                $result[$row->parent_id][$row->id] = $row;
            }
            $query->free_result();
            return $result;
        }
    }

function viewParentSubcategory($category) {
        $sql = 'SELECT * FROM category where parent_id =  "'.$category.'" AND is_deleted = "1" ';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            foreach ($query->result() as $row) {
                $result[$row->id] = $row;
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
        $sql = 'SELECT c.category, p.category as cname, p.parent_id, p.details, p.image, p.status  FROM category p
				LEFT JOIN category c ON p.parent_id = c.id 
				where p.id =  "' . $category_id . '"';
		//echo $sql; exit;
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
	
	function getAllCategories($category) {
        
		$sql = 'SELECT c1.category as parent, c2.* FROM category c1 LEFT JOIN category c2 ON c2.parent_id = c1.id WHERE c1.id = "'.$category.'" ';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            foreach ($query->result() as $row) {
                $result[] = $row;
            }
            $query->free_result();
            return $result;
        }
    }
	
	function check_child_catg_exists(){
	//$sql="select id,parent_id from category where id != parent_id";
	$sql = "select yt1.category,yt1.id from category yt1 left join category yt2 on yt1.id = yt2.parent_id where yt2.id is null";
	$query = $this->db->query($sql);
	$result = $query->result();
	return $result;
	
    }
    function add_attribute($attrs,$category_id){
            if($category_id){
                $this->db->set('attr_id', $attrs);
                $this->db->where('id', $category_id);
		$this->db->update('category');
                return ($this->db->affected_rows() != 1) ? false : true;
            }
	}
    function catg_attributes($id){
		$sql = "select * from category where id='".$id."'";
		$sql = $query = $this->db->query($sql);
		$result = $query->first_row();
		return $result;
	}
		
		
	function get_parent_catg_info($id){
        $sql = "SELECT c.*,p.category as parent, m.category as main_category FROM category c LEFT JOIN category p ON p.id = c.parent_id LEFT JOIN category m ON m.id = p.parent_id WHERE c.id ='".$id."'"; 
        //echo $sql;exit;
        $query = $this->db->query($sql);
        $result = $query->first_row();
        return $result;
    }

}

?>
