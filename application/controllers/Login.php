<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{


    function __construct(){
        parent::__construct();
        // Load google oauth library
        $this->load->library('google');

        $this->load->model('Login_model2');
        $this->load->model('login_model');
    }

    function index(){
        if (!$this->session->userdata('login')){

        if(isset($_GET['code'])){

            // Authenticate user with google
            if($this->google->getAuthenticate()){

                // Get user info from google
                $gpInfo = $this->google->getUserInfo();
                // Preparing data for database insertion
                $userData['oauth_provider'] = 'google';
                $userData['oauth_uid']         = 'G-'.$gpInfo['given_name'];
                $userData['first_name']     = $gpInfo['given_name'];
                $userData['last_name']         = $gpInfo['family_name'];
                $userData['email']             = $gpInfo['email'];
				$userData['gender']         = !empty($gpInfo['gender'])?$gpInfo['gender']:'';
				$userData['locale']         = !empty($gpInfo['locale'])?$gpInfo['locale']:'';
				$userData['picture']         = !empty($gpInfo['picture'])?$gpInfo['picture']:'';

                // Insert or update user data to the database
                $userID = $this->Login_model2->checkUser($userData);

                //谷歌登入
                $user_data = array(
                    // 'username' => $userData['oauth_uid'],
                    'username' => $userData['oauth_uid'],
                    'login' => true, //create session variable
                    'picture' => $userData['picture'],
                    'google_login' => true
                );
                $this->session->set_userdata($user_data);
                // Redirect to profile page
                redirect('home');
                }
            }
        }

        // Google authentication url
        $data['loginURL'] = $this->google->loginURL();

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('template/navbar');
        $this->load->view('login_signup/login', $data);
        $this->load->view('template/footer');
    }

    public function do_login() {
        $this->load->model('login_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('cookie');

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $remember = $this->input->post('remember');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
        $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');

        $e_pass = $this->login_model->find_password($username);
        

        if (!$this->session->userdata('login')){
            if($this->form_validation->run()){
                if(!password_verify($password, $e_pass)){
                    redirect('login');
                } else{
                    //普通登入
                    $picture = $this->login_model->find_picture($username);
                    $user_data = array(
                        'username' => $username,
                        'login' => true,
                        'picture' => $picture
                    );
                    $this->session->set_userdata($user_data);
                    if($remember){
                        $this->input->set_cookie('username', $username);
                    }else{
                        delete_cookie('username');
                    }
                    redirect('home');
                }
            } else {
                redirect('login');
            }
        } else {
            redirect('home');
        }
    }


    function validate_captcha() {
        //from https://webeasystep.com/blog/view_article/integrate_recaptcha_with_codeigniter_validation
        $recaptcha = trim($this->input->post('g-recaptcha-response'));
        $userIp= $this->input->ip_address();
        $secret='6LfRLCYcAAAAAJiIEimYO6sM8MRbgnvlgWZnvZA7';
        $data = array(
            'secret' => "$secret",
            'response' => "$recaptcha",
            'remoteip' =>"$userIp"
        );
        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($verify);
        $status = json_decode($response, true);
        if(empty($status['success']) || $status['success']==false){
            return FALSE;
        }else{
            return TRUE;
        }
    }

    public function profile(){
        // Redirect to login page if the user not logged in
        if(!$this->session->userdata('login')){
            redirect('/login/');
        }

        // Get user info from session
//		$data['userData'] = $this->session->userdata('userData');

        // Load user profile view
//		$this->load->view('login_google/profile',$data);
        redirect('home');
    }

    public function logout(){
        // Reset OAuth access token
        $this->google->revokeToken();

        // Remove token and user data from the session
        $this->session->unset_userdata('login');

        // Destroy entire session data
		$this->session->sess_destroy();

        // Redirect to login page
        redirect('/login/');
    }

}
