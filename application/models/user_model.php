<?php

Class user_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function login($data) {
        $username = $data['username'];
        $password = $data['password'];
        $sql = 'SELECT * FROM users WHERE username = "' . $username . '" and password = "' . $password . '"';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            foreach ($query->result() as $row) {
                $result['id'] = $row->id;
                $result['status'] = $row->status;
            }
            $query->free_result();
            return $result;
        }
    }

    function loging_info($userid) {
        $sql = 'SELECT * FROM login_info WHERE user_id = "' . $userid . '" order by id DESC';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            foreach ($query->result() as $row) {
                $result[] = $row;
            }
            $query->free_result();
            return $result;
        }
    }

    function userdata($userid) {
        $sql = 'SELECT * FROM users WHERE id = "' . $userid . '" ';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            return $query->first_row();
        }
    }
    
    function userdataFull() {
        $sql = 'SELECT * FROM users ';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            foreach ($query->result() as $row) {
                $result[] = $row;
            }
            $query->free_result();
            return $result;
        }
    }

    function roleView() {
        $sql = 'SELECT * FROM role_permission ';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            foreach ($query->result() as $row) {
                $result[] = $row;
            }
            $query->free_result();
            return $result;
        }
    }
    
    function roleViewActive() {
        $sql = 'SELECT * FROM role_permission where status = 1 ';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            foreach ($query->result() as $row) {
                $result[] = $row;
            }
            $query->free_result();
            return $result;
        }
    }
    
    function roleViewDetails($rid) {
        $sql = 'SELECT * FROM role_permission WHERE id = "' . $rid . '" ';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            return $query->first_row();
        }
    }

//changes made by shibu

 function checkDomain($domain) {
        $sql = 'SELECT domain from users WHERE domain = "'.$domain.'"';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            return false;
        
        }
        else {
            return true;
        }
    }
    
    function checkSubDomain($subdomain)
    {
        $sql = 'SELECT domain from users WHERE subdomain_name = "'.$subdomain.'"';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            return false;
        
        }
        else {
            return true;
        }
    }
    
    function checkEmail($email) {
        $sql = 'SELECT * FROM users WHERE email = "' . $email . '" ';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            return true;
        } else {
            return false;
        }
    }
    
    
    function updatePassword($password,$email){
        $sql = 'UPDATE users set password ="'.$password.'" WHERE email = "'. $email .'" ';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            return true;
        } else {
            return false;
        }

    }
	
	function checkUserAjax($user){
        $sql = 'select * from users where username = "'.$user.'" ';
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            return true;
        } else {
            return false;
        }

    }

}

?>
