<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function login($username, $password) {
        $this->db->select('user_id, user_name, password');
        $this->db->from('users');
        $this->db->where('user_name', $username);
        $this->db->where('password', MD5($password));
        //$this->db->or_where('email',$username);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_usernames() {
        $this->db->select('user_name');
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_emails() {
        $this->db->select('email');
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            return $query->result_array();
        } else {
            return false;
        }
    }
//    public function set_entry(){
//        $data = array(
//            'content'=>  $this->input->post('text'),
//            'user_id' => 0,
//            'topic_id' =>0
//        );
//        return $this->db->insert('entries',$data);
//        
//    }
    public function add_user(){
        $data = array(
            'user_name'=> $this->input->post('username'),
            'password' => MD5($this->input->post('password')),
            'email' => $this->input->post('email')
        );
        return $this->db->insert('users',$data);
    }
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
