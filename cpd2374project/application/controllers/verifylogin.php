<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user', '', TRUE);
    }

    function index() {
        //This method will have the credentials validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');
        $this->form_validation->set_rules('captcha', 'captcha', 'trim|required|callback_check_captcha');
        //$userCaptcha = set_value('captcha');

        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            // $this->load->view('login_view');
            redirect('login', 'index');
        } else {
            //Go to private area
            redirect('home', 'refresh');
        }
    }

    function check_database($password) {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');

        //query the database
        $result = $this->user->login($username, $password);
        


        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                   
                    'username' => $row->username,
                    'fname'=>$row->fname,
                     'lname'=>$row->lname
                    
                );

                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
        
    }

    function check_captcha() {

        // First, delete old captchas
        $expiration = time() - 60; // Two hour limit
        $this->db->query("DELETE FROM captcha WHERE captcha_time < " . $expiration);

        // Then see if a captcha exists:
        $sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
        $binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
        $query = $this->db->query($sql, $binds);
        $row = $query->row();
        if ($row->count == 0) {
            return false;
        }
    }

}
