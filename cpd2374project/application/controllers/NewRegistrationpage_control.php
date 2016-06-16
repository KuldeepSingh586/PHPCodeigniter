<?php
class NewRegistrationPage_control extends CI_Controller {
function __construct() {
parent::__construct();

}
function register()
{

$this->load->view('NewRegistrationPage_view');
}
}

?>