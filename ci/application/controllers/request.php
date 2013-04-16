<?php
class Request extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Entry_model');
    }
    public function get(){
        $topic_id = $this->input->post('topic_id');
        $json = $this->Entry_model->get_entries($topic_id);
        $encoded = json_encode($json);
        echo $encoded;
    }
}
