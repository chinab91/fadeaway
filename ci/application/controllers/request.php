<?php
class Request extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Entry_model');
    }
    public function get(){
        $topic_id = $this->input->post('topic_id');
        $entries_id = $this->input->post('entries_id');
        $json = $this->Entry_model->get_entries_not_in($topic_id,$entries_id);
        $rand_min = 0;
        $rand_max = count($json)-1;
        $encoded = json_encode($json[rand($rand_min,$rand_max )]);
        echo $encoded;
    }
}
