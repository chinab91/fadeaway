<?php
class Entry_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    
    public function get_entries($topic_id = FALSE){
        if($topic_id === FALSE){
            $query = $this->db->get('entries',11,0);
            return $query->result_array();
        }
        $query = $this->db->get_where('entries',array('topic_id'=>$topic_id));
        return $query->result_array();
    }
}
