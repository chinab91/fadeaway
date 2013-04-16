<?php
class Request extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Entry_model');
    }
    public function get(){
        $topic_id = $this->input->post('id');
        //$json['content'] = $this->entry_model->get_entries($topic_id);
        $json['content'] = "testing post";
        $encoded = json_encode($json);
        echo $encoded;
    }
}
