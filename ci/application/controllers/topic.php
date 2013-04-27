<?php

class Topic extends CI_Controller {

    var $captcha_error = FALSE;

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
        $this->session->set_userdata('last_page','topic/view/'.$topic_id);
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
        $this->load->library('recaptcha');

        $topic_array = $this->Topic_model->get_topics($topic_id);
        $data['topic'] = $topic_array['topic'];
        $data['topic_id'] = $topic_array['topic_id'];
        $data['title'] = 'Create new fills';

        $data['captcha_error'] = FALSE;
        if ($this->captcha_error) {
            $data['captcha_error'] = 'Captcha Error!';
        }
        if($this->session->userdata('logged_in')){
            $data['recaptcha_html'] = NULL;
        }else{
            $data['recaptcha_html'] = $this->recaptcha->recaptcha_get_html();
        }
        //$data['page'] = 'login/login';


        $this->load->view('templates/header', $data);
        $this->load->view('topic/fills', $data);
        $this->load->view('templates/footer');
    }

    public function fill_add() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('recaptcha');
        
        $captcha_true;
        
        $data['captcha_error'] = FALSE;
        $data['title'] = 'Create new fills';

        $this->form_validation->set_rules('text', 'text', 'trim|required|min_length[1]|max_length[70]|xss_clean');

        if ($this->session->userdata('logged_in')) {
            $captcha_true = TRUE;
        } else {
            $this->recaptcha->recaptcha_check_answer(
                    $_SERVER['REMOTE_ADDR'], 
                    $this->input->post('recaptcha_challenge_field'), 
                    $this->input->post('recaptcha_response_field'));

            if ($this->recaptcha->is_valid == FALSE) {
                $this->captcha_error = $this->recaptcha->error;
                $captcha_true = FALSE;
            }else{
                $captcha_true = TRUE;
            }
        }


        if ($this->form_validation->run() && $captcha_true == TRUE) {
            $this->Entry_model->add_entry();
            $this->load->view('templates/header', $data);
            $this->load->view('topic/fills_success');
            $this->load->view('templates/footer');
        } else {
            $topic_id = $this->input->post('topic_id');
            $this->fills($topic_id);
        }
    }

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
