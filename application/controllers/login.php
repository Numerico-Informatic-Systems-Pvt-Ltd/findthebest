<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('language');
		$this->lang->load('admin', 'english');
		$this->load->library('session');
		$this->load->model('user_model');	
    }	
	
	
	public function index()
	{
		if(!$this->input->post()){	
			$this->load->view('admin/login');
		}else{
			$logindata['username'] = $this->input->post('username');
			$logindata['password'] = md5($this->input->post('password'));
			
			$result=$this->user_model->login($logindata);
			if($result){
				if($result['status']==1 ){
					$newdata = array(
					   'logged_in' => TRUE,
					   'logged_id'   => $result['id']
				   );				   
					$this->session->set_userdata('admin', $newdata);
					redirect('category');
				}
				else{
					$data['login_error']=true;
					$this->load->view('admin/login',$data);
				}
			}
			else{
				$data['login_error']=true;
				$this->load->view('admin/login',$data);
			}
		}
	}
        
        public function forgetPassword() {

        if (!$this->input->post()) {
            $this->load->view('admin/forget_password');
        } else {
            $email = $this->input->post('email');
            $data['check_email'] = $this->user_model->checkEmail($email);  //validate Email 
            $password = chr(rand(65, 91)) . chr(rand(65, 91)) . chr(rand(65, 91)) . chr(rand(65, 91)) . rand(1000, 9999);
            if ($data['check_email']) {
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
                $mail->setFrom('noreply@nisclient.com', 'CouterBling');
                $mail->addReplyTo($email, 'Admin CoutureBling.');
                $mail->addAddress($email, 'CoutureBling');
                $mail->Subject = 'Reset Password Mail';
                $mail->Body = "Use this password to login       " . $password;
                $mail->AltBody = 'This is a plain-text message body';
                if (!$mail->send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                } else {

                    $data['update_password'] = $this->user_model->updatePassword($password, $email);
                    if ($data['update_password']) {
                        $data['change_password'] = true;
                    }
                    else {
                        $data['change_password'] = false;
                    }
                }
            } else {

                $data['invalid_email'] = true;
            }

            $this->load->view('admin/forget_password', $data);
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
