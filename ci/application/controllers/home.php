<?php

class Home extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model('Entry_model');
        $this->load->model('Topic_model');
    }

    public function index() {
        $data['topic'] = $this->Topic_model->get_topics(0);
        $data['entries'] = $this->Entry_model->get_entries($data['topic']['topic_id']);
        $data['title'] = $data['topic']['topic'];

        
        $this->load->view('templates/header', $data);
        $this->load->view('home/home', $data);
        $this->load->view('templates/footer');
    }

    public function view($prima_key) {
        $data['entries_item'] = $this->Entry_model->get_entries($prima_key);

        if (empty($data['news_item'])) {
            show_404();
        }
        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('home/view', $data);
        $this->load->view('templates/footer');
    }

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
