<?php
Class attribute_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get_attributes(){
		$sql = "select * from attribute";
		$query = $this->db->query($sql);
		if ($query->num_rows()) {
		    foreach ($query->result() as $row) {
		        $result[$row->id] = $row;
		    }
		    $query->free_result();
		    return $result;
		}
	}
        function manage_attribute($id=null,$attrs){
           // echo"<pre>";print_r($attrs);exit;
            $data = array(
                    'name' => $attrs['new_attribute'],
                    'type' => $attrs['type'],
                    'unit' => $attrs['unit']
                    );
            if($id){
                $this->db->set('name', $attrs['new_attribute']);
                $this->db->set('type', $attrs['type']);
                $this->db->set('unit', $attrs['unit']);
                $this->db->where('id', $id);
                $this->db->update('attribute');
            }else{
                $this->db->insert('attribute',$data);
            }
            return ($this->db->affected_rows() != 1) ? false : true;
        }
        function manage_attribute_value($id=null,$values){
            $data = array('attr_id' => $values['attribute_name'],
                        'attr_value'=>$values['attribute_value']
                    );
            if($id){
                $this->db->set('attr_id', $values['attribute_name']);
                $this->db->set('attr_value', $values['attribute_value']);
                $this->db->where('id', $id);
                $this->db->update('attribute');
            }else{
                $this->db->insert('attribute_values',$data);
            }
            return ($this->db->affected_rows() != 1) ? false : true;
        }
        function get_attribute_by_id($id){
            //$sql = "SELECT a.id,av.* FROM attribute_values as av LEFT JOIN attribute as a ON a.id=av.attr_id AND a.id ='".$id."'";
            $sql = "Select * from attribute where id='".$id."'";
            $query = $this->db->query($sql);
            //$result = $query->result();
            $result = $query->first_row();
            return $result;
        }
        function get_attribute_values($id){
            $sql = "select A.name,AV.* from attribute_values as AV LEFT JOIN attribute as A ON A.id = AV.attr_id where AV.attr_id='".$id."'";
            $query = $this->db->query($sql);
            $result = $query->result();
            return $result;
        }
		
		function get_defined_attributes(){
           $sql = "select * from attribute where type=1";
			$query = $this->db->query($sql);
			if ($query->num_rows()) {
			  foreach ($query->result() as $row) {
				  $result[$row->id] = $row;
			  }
				$query->free_result();
				return $result;
            } 
        }
}

?>
