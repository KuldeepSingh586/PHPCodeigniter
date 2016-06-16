<?php
class register_model extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data){
// Inserting in Table(acconts) of Database(cpd2374project)
$this->db->insert('accounts', $data);
}
}
?>