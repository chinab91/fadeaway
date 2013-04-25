<?php

class Topic extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Entry_model');
        $this->load->model('Topic_model');
        $this->load->library('form_validation');
    }

    public function view($topic_id) {
        $data['username'] = NULL;
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
        }
        
        //testing with 1
        $topic_array = $this->Topic_model->get_topics($topic_id);
        $data['entries'] = $this->Entry_model->get_entries($topic_array['topic_id']);
        $data['title'] = $topic_array['topic'];
        $data['topic'] = $topic_array['topic'];
        $data['topic_id'] = $topic_array['topic_id'];


        $this->load->view('templates/header', $data);
        $this->load->view('topic/view', $data);
        $this->load->view('templates/footer');
    }

    public function fills($topic_id) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $topic_array = $this->Topic_model->get_topics($topic_id);
        $data['topic'] = $topic_array['topic'];
        $data['topic_id'] = $topic_array['topic_id'];
        $data['title'] = 'Create new fills';
        $this->load->view('templates/header', $data);
        $this->load->view('topic/fills', $data);
        $this->load->view('templates/footer');
    }

    public function fill_add() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create new fills';

        $this->form_validation->set_rules('text', 'text', 'trim|required|min_length[1]|max_length[70]|xss_clean');

        if ($this->form_validation->run() === FALSE) {
            $topic_id = $this->input->post('topic_id');
            $this->fills($topic_id);
        } else {
            $this->Entry_model->add_entry();
            $this->load->view('templates/header', $data);
            $this->load->view('topic/fills_success');
            $this->load->view('templates/footer');
        }
    }

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
