<?php

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function view($page = 'home') {
        if (!file_exists('ci/application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst('Fill this _____'); // Capitalize the first letter
        //load pages
        $data['username'] = FALSE;
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
        }
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }

}