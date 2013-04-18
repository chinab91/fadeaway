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
        $this->db->order_by('timestamp','desc');
        $query = $this->db->get_where('entries',array('topic_id'=>$topic_id),$entries_number);
        
//        $entries_number = 11;
//        $query = $this->db->query("SELECT * FROM users ORDER BY entry_id DESC LIMIT 11");
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
    
    public function set_entry(){
        if($this->session->userdata('user_id')){
            $user_id = $this->session->userdata('user_id');
        }else{
            $user_id = 0;
        }
            
        $data = array(
            'content'=>  $this->input->post('text'),
            'user_id' => $user_id,
            'topic_id' =>0
        );
        return $this->db->insert('entries',$data);
        
    }
}
