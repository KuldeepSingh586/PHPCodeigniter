<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->helper(array('form'));
        $this->load->helper('captcha');
        $vals = array(
            'img_path' => './captcha/',
            'img_width' => '150',
            'img_height' => 50,
            'img_url' => base_url() . 'captcha/',
        );
        $cap = create_captcha($vals);


        $data = array(
            'captcha_id' => '',
            'captcha_time' => $cap['time'],
            'ip_address' => $this->input->ip_address(),
            'word' => $cap['word']
        );
        $query = $this->db->insert_string('captcha', $data);
        $this->db->query($query);

        $this->load->view('login_view', $cap);
        return $cap;
    }
public function captcha_refresh(){
$values = array(
'word' => '',
'word_length' => 8,
'img_path' => './images/',
'img_url' => base_url() .'images/',
'font_path' => base_url() . 'system/fonts/texb.ttf',
'img_width' => '150',
'img_height' => 50,
'expiration' => 3600
);
$data = create_captcha($values);
$_SESSION['captchaWord'] = $data['word'];
echo $data['image'];

}
    
}
