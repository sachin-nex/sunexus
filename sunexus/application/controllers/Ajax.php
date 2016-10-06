<?php
defined('BASEPATH') OR exit('No direct script access allowd');
class Ajax extends CI_Controller{
    public function su_login_validation(){
        //print_r($_POST);
        $uname  = $_POST['user_name'];
        $passwd = md5($_POST['user_name']);
        $this->load->model('authenticate');
        $data = $this->authenticate->authenticateUser($uname,$passwd);
        $rowcount = count($data);
        if($rowcount == 1){
            $return_val = array();
        }else{
           $return_val = array(); 
        }
       // echo $uname.'<br>';
       // print_r($rowcount);
    }
}
?>