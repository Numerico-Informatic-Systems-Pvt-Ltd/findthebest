<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Userlogin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('language');
        $this->lang->load('admin', 'english');
        $this->load->library('session');
        $this->load->model('user_model');
    }

    public function index() {
        if (!$this->input->post()) {
            $this->load->view('users/include/usersignin');
        } else {

            $logindata['email'] = $this->input->post('email');
            $logindata['password'] = $this->input->post('password');
            //print_r($logindata['password']);die;
            $result = $this->user_model->loginUser($logindata);
            //print_r($result);die;
            if ($result) {
                if ($result['status'] == 1) {
                    $newdata = array(
                        'logged_in' => TRUE,
                        'logged_id' => $result['id'],
                        'email' => $result['email'],
                        'name' => $result['name']
                    );
                    $this->session->set_userdata('userdata', $newdata);
                    $page_link = $this->input->post('pageurl');                    
                    redirect($page_link);
                } else {
                    $data['login_error'] = true;
                    $this->load->view('users/include/usersignin', $data);
                }
            } else {
                $data['login_error'] = true;
                $this->load->view('users/include/usersignin', $data);
            }
        }
    }

//    public function forgetPassword() {
//
//        if (!$this->input->post()) {
//            $this->load->view('admin/forget_password');
//        } else {
//            $email = $this->input->post('email');
//            $data['check_email'] = $this->user_model->checkEmail($email);  //validate Email 
//            $password = chr(rand(65, 91)) . chr(rand(65, 91)) . chr(rand(65, 91)) . chr(rand(65, 91)) . rand(1000, 9999);
//            if ($data['check_email']) {
//                date_default_timezone_set('Etc/UTC');
//                require_once($_SERVER['DOCUMENT_ROOT'] . '/application/libraries/phpmailer/PHPMailerAutoload.php');
//                $mail = new PHPMailer();
//                $mail->isSMTP();
//                $mail->SMTPDebug = 0;
//                $mail->Debugoutput = 'html';
//                $mail->Host = "mail.nisclient.com";
//                $mail->SMTPSecure = "ssl";
//                $mail->Port = 465;
//                $mail->SMTPAuth = true;
//                $mail->Username = "noreply@nisclient.com";
//                $mail->Password = "@admin2013";
//                $mail->setFrom('noreply@nisclient.com', 'CouterBling');
//                $mail->addReplyTo($email, 'Admin CoutureBling.');
//                $mail->addAddress($email, 'CoutureBling');
//                $mail->Subject = 'Reset Password Mail';
//                $mail->Body = "Use this password to login       " . $password;
//                $mail->AltBody = 'This is a plain-text message body';
//                if (!$mail->send()) {
//                    echo "Mailer Error: " . $mail->ErrorInfo;
//                } else {
//
//                    $data['update_password'] = $this->user_model->updatePassword($password, $email);
//                    if ($data['update_password']) {
//                        $data['change_password'] = true;
//                    } else {
//                        $data['change_password'] = false;
//                    }
//                }
//            } else {
//
//                $data['invalid_email'] = true;
//            }
//
//            $this->load->view('admin/forget_password', $data);
//        }
//    }

    public function userRegister() {
        if ($this->input->post()) {
            $visitor = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'name' => $this->input->post('name'),
                'google_id' => $this->input->post('email'),
                'facebook_id' => $this->input->post('email')
            );
            $email = $this->input->post('email');
                date_default_timezone_set('Etc/UTC');
                require_once($_SERVER['DOCUMENT_ROOT'] . '/application/libraries/phpmailer/PHPMailerAutoload.php');
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->SMTPDebug = 0;
                $mail->Debugoutput = 'html';
                $mail->Host = "mail.nisclient.com";
                $mail->SMTPSecure = "ssl";
                $mail->Port = 465;
                $mail->SMTPAuth = true;
                $mail->Username = "noreply@nisclient.com";
                $mail->Password = "@admin2013";
                $mail->setFrom('noreply@nisclient.com', 'FindTheBest');
                $mail->addReplyTo($email, 'Admin FindTheBest.');
                $mail->addAddress($email, 'FindTheBest');
                $mail->Subject = 'Confirmation Mail';
                $mail->Body = "Thank You for registring" ;
                $mail->AltBody = 'This is a plain-text message body';
                if (!$mail->send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                } else {
                    $data['change_password'] = true;
                }
                
            $this->db->insert('visitors', $visitor);
            $page_url = $this->input->post('pageurl');
            redirect($page_url);
            
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
