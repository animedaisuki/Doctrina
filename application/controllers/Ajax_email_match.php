<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ajax_email_match extends CI_Controller {

    function search() {
        $this->load->model('ajax_model');
        $query = $this->input->post('query');//get value from search box
        $data = $this->ajax_model->find_email($query);//find the value in database
        if ($query != null) {
            if ($data != false) {
                $this->do_forget_pass($query);
                echo json_encode(array('status_message' =>"1"));
            } else {
                echo json_encode(array('status_message'=>"0"));
//                var_dump($query);
            }
        } else {
            echo json_encode(array('status_message'=>"0"));
//            var_dump($query);
        }
    }

    function do_forget_pass($email) {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');

        $this->load->model('login_model');
        $this->load->model('forget_pass_model');


        $token = base64_encode(random_bytes(32));
        $id = $this->login_model->find_id_by_email($email);
        $date = time();

        $this->load->library('email');

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'mailhub.eait.uq.edu.au';
        $config['smtp_port'] = 25;
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['starttls'] = true;
        $config['wordwrap'] = true;
        $config['newline'] = "\r\n";

        $this->email->initialize($config);

        $this->email->from('uqwche12@uq.edu.au', 'Uq Zone');
        $this->email->to($email);

        $this->email->subject('Reset your password');

        $this->email->message('Click this link to reset your password :
        <a href="'.base_url().'ajax_email_match/reset_pass?email='.$email.'&token='.urlencode($token).'">Reset Password</a>');
        $this->email->send();
        $this->session->set_userdata('reset', $email);
        // $error = $this->email->print_debugger();
        // $data['error']= $error;
        $data['error']= "The email has been sent!";
        // echo $this->email->print_debugger();
        $this->forget_pass_model->add_token($id, $email, $token, $date);
    }

    function reset_pass(){
        $this->load->helper('form');
        $this->load->helper('url');

        $this->load->model('login_model');
        $this->load->model('forget_pass_model');

        $email = $this->input->get('email');
        $token = $this->input->get('token');

        if(!$this->forget_pass_model->check_token($email, $token)) {
            redirect('login');
        } else {
            redirect('reset_password');
        }
    }

    function do_reset_password(){
        $this->load->library('encryption');
        $this->load->model('forget_pass_model');
        if(!$this->session->userdata('reset')){
            redirect('home');
        } else{
            $email = $this->session->userdata('reset');
            $password = $this->input->post('password_ajax');
            $e_pass = password_hash($password, PASSWORD_DEFAULT);
            $this->forget_pass_model->update_pass($email, $e_pass);
            $this->session->unset_userdata('reset');
            redirect('login');
        }
    }
}