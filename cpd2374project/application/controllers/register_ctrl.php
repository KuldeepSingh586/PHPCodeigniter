<?php
class register_ctrl extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->model('register_model');
}
function index()
{
// Including Validation Library
$this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
// Validating Name Field
$this->form_validation->set_rules('fname', 'First Name', 'required|min_length[3]|max_length[15]');
$this->form_validation->set_rules('lname', 'Last Name', 'required|min_length[1]|max_length[15]');
// Validating username Field
$this->form_validation->set_rules('username', 'User Name', 'required|valid_email');
// Validating Mobile no. Field
$this->form_validation->set_rules('password', 'Password', 'required|regex_match[/^[0-9]{5}$/]|md5');
$this->form_validation->set_rules('confPassword', 'Confirm Password', 'required|regex_match[/^[0-9]{5}$/]|matches[password]');
// Validating Address Field
$this->form_validation->set_rules('hints', 'Hints', 'required|min_length[3]|max_length[50]');
if ($this->form_validation->run() == FALSE)
{
$this->load->view('register_view');
    
}
else
{
// Setting Values For Tabel Columns
$data = array(
'fname' => $this->input->post('fname'),
 'lname' => $this->input->post('lname'),   
'username' => $this->input->post('username'),
'password' => $this->input->post('password'),
'hints' => $this->input->post('hints')
);
// Transfering Data To Model
$this->register_model->form_insert($data);
// Loading View
 redirect('home', 'refresh');



}
}
}
?>