<?php
class Authenticate extends CI_Model{
    public function authenticateUser($user_name,$paaswd){
        //$this->load->database();
        $where = "(user_id='".$user_name."' OR email_id='".$user_name."') AND password='".$paaswd."'";
        $this->db->where($where);
        $user = $this->db->get("su_user");
        $result = $user->result();
        return $result;
    }
}
?>