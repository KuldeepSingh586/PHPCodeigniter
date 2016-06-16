<?php

Class forgetPassword extends CI_Model
{
 function forget($username, $hints)
 {
   $this -> db -> select('username, hints,fname,lname');
   $this -> db -> from('accounts');
   $this -> db -> where('username', $username);
   $this -> db -> where('hints', $hints);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>