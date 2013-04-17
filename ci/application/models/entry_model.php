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
        $entries_number = 11;
        $query = $this->db->get_where('entries',array('topic_id'=>$topic_id),$entries_number);
        return $query->result_array();
    }
    
        public function get_entries_not_in($topic_id = FALSE, $entries_id){
        if($topic_id === FALSE){
            $query = $this->db->get('entries',11,0);
            return $query->result_array();
        }
        $entries_number = 11;
        $this->db->where_not_in('entry_id',$entries_id);
        $query = $this->db->get_where('entries',array('topic_id'=>$topic_id),$entries_number);
        //$query = $this->db->select('*')->from('entries')->where('topic_id',$topic_id)->where_not_in('entry_id',$entries_id);
        //$query = $this->db->where_not_in('entry_id',$entries_id);
        return $query->result_array();
    }
}
