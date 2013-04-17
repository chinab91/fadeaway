<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $this->load->helper('form');
        $data['title'] = 'User Login';
        $this->load->view('templates/header', $data);
        $this->load->view('login/user_login');
        $this->load->view('templates/footer');
    }

    public function verify() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_user');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            redirect('home', 'refresh');
        }
    }
    
    public function check_user($password){
        
        $username = $this->input->post('username');
        $result = $this->User_model->login($username,$password);
        
        if($result){
            $session_array = array(
                'id'=>$result['0']['user_id'],
                'username' => $result['0']['user_name']
                );
            $this->session->set_userdata('logged_in',$session_array);
            return TRUE;
        }else{
            $this->form_validation->set_message('check_database','Invalid username or password');
            return FALSE;
        }
    }
    
    public function logout(){
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home');
    }

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
