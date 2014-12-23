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
    function search_by_attribute( $catg, $value ){
        $sql="select A.*,P.* from products P LEFT JOIN product_attributes A ON A.prd_id = P.id where P.catg_id='".$catg."' ";
		
		$d = 0;
		foreach( $value as $attr_id => $attr_value ){
			if($attr_value){
				if( $d>0 ){
					$sql .= " OR ";
				}else{
					$sql .= " AND ( ";
				}
				$d++;
				$sql .= "  ( A.attr_id = '".$attr_id."' AND ( ";
				$attr_exp_value = explode( "," , $attr_value);
				$c = 0;
				foreach($attr_exp_value as $attr){
					if($attr){
						if($c>0){
							$sql .= " OR ";
						}
						$sql .= " attr_value = '".$attr."' ";
						$c++;
					}
				}
				$sql .= ") ) ";
			}
			
		}
		$sql .= " ) GROUP BY p.id";
		//echo $sql; exit;
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
	
	function product_sorting($category,$input = NULL,$order){
        if($input){
        $sql = "select P.*,AV.attr_value as attribute,A.* from product_attributes A LEFT JOIN attribute_values AV ON AV.id=A.attr_value LEFT JOIN products P ON P.id=A.prd_id where P.catg_id='".$category."' AND A.attr_id='".$input."' ORDER BY AV.attr_value $order";
        }
        else{
          $sql = "select P.* from products as P LEFT JOIN category as C ON C.id = P.catg_id where P.catg_id='".$category."' order by P.id $order";
        
        }
        $query=$this->db->query($sql);
        $result = $query->result();
        return $result;
    }
}