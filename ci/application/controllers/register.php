<?php

Class Register Extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index($page = 'register') {

        $this->load->helper('form');
        $data['title'] = 'Register';
        $this->load->view('templates/header', $data);
        $this->load->view('register/register');
        $this->load->view('templates/footer');
    }

    public function verify() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username'
                , 'trim|required|xss_clean|is_unique[users.user_name]|min_length[5]|max_length[12]');

        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|matches[comfirm_password]|min_length[5]|max_length[12]');

        $this->form_validation->set_rules('comfirm_password', 'Password comfirmation'
                , 'trim|required|xss_clean|min_length[5]|max_length[12]');

        $this->form_validation->set_rules('email', 'Email'
                , 'trim|required|xss_clean|valid_email|is_unique[users.email]');

        if ($this->form_validation->run()) {
            $data['username'] = $this->input->post('username');
            $data['title'] = 'Register Success';
            $this->User_model->add_user();
            $this->load->view('templates/header', $data);
            $this->load->view('register/register_success', $data);
            $this->load->view('templates/footer');
        } else {
            $this->index();
        }
    }

}