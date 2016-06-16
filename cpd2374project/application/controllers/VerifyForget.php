<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class VerifyForget extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('forgetPassword','',TRUE);
 }
 
 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('hints', 'hints', 'trim|required|xss_clean|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('forget_view');
   }
   else
   {
     //Go to private area
   
     redirect('home', 'refresh');
   }
 
 }
 
 function check_database($hints)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
 
   //query the database
   $result = $this->forgetPassword->forget($username, $hints);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         
         'username' => $row->username,
           'fname' => $row->fname,
               'lname' => $row->lname
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or hints');
     return false;
   }
 }
}
?>