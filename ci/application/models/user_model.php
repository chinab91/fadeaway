<?php
class User_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function login($username,$password){
        $this->db->select('user_id','user_name','password','email');
        $this->db->from('users');
        $this->db->where('user_name',$username);
        $this->db->or_where('email',$username);
        $this->db->where('password',MD5($password));
        $this->db->limit(1);
        
        $query = $this ->db ->get();
        
        if($query -> num_rows() == 1){
            return $query ->resutl();
        }else{
            return false;
        }
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
