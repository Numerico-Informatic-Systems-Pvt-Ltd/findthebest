<?php
Class product_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function get_products($id = null){
        $this->db->select('*');
        if($id){
            $sql = "select * from products where id='".$id."'";
            $query = $this->db->query($sql);
            $result = $query->first_row();
        }else{
            $query = $this->db->get('products');
            $result = $query->result();
        }
        return $result;
    }
    function manage_products($id=null,$inputs){
        if(!$id){
            $this->db->insert('products', $inputs);
            $pid = $this->db->insert_id();
            //$this->db->affected_rows() = 1 ? $pid = $this->db->insert_id(): $pid='';
            return $pid;
        }else{
            $this->db->where('id', $id);
            $this->db->update('products', $inputs);
            return $id;
        }
    }
    function manage_product_attributes($pid,$attribute_values){
        //echo"<pre>";print_r($attribute_values);exit;
        foreach($attribute_values as $value){
            foreach($value as $k=>$v){
                $data = array(
                    'prd_id' => $pid,
                    'attr_id' => $k,
                    'attr_value'=>$v,
                ); 
            }
           $this->db->insert('product_attributes', $data);
        }
    }
    function getAllProducts($cid){
        $sql = "select C.attr_id as attributes,P.* from products as P LEFT JOIN category as C ON C.id = P.catg_id where P.catg_id='".$cid."'";
        //$sql = "select * from products WHERE catg_id='".$cid."'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    function getProductDetails($pid){
        $sql = "SELECT * FROM products WHERE id='".$pid."'";
        $query = $this->db->query($sql);
        $result = $query->first_row();
        return $result;
    }
    function search_by_attribute($catg,$id,$value){
        $sql="select A.*,P.* from products P LEFT JOIN product_attributes A ON A.prd_id = P.id where P.catg_id='".$catg."' AND A.attr_id='".$id."' AND  attr_value LIKE '%".$value."%'"; 
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    
    function getReviewDetails($pid){
        $sql = "SELECT * FROM review AS re INNER JOIN visitors AS vi ON vi.id = re.visitor_id WHERE product_id='".$pid."' ORDER BY re.id DESC LIMIT 5 ";
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            foreach ($query->result() as $row) {
                $result[$row->id] = $row;
            }
            $query->free_result();
            return $result;
        }
        return $result;
    }
    function getAvgReview($pid){
        $sql = "SELECT (sum(rate)/count(product_id)) AS avgrate,sum(rate) AS totalrate FROM review WHERE product_id='".$pid."' GROUP BY product_id";
        $query = $this->db->query($sql);
        $result = $query->first_row();
        return $result;
    }
}