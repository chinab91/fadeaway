<?php

class Topic_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    
    public function get_topics($topic = FALSE){
        if($topic === FALSE){
            $query = $this->db->get('topics');
            return $query->result_array();
        }
        $query = $this->db->get_where('topics',array('topic_id'=>$topic));
        return $query->row_array();
    }
}
