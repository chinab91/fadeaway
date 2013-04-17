<?php
class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->load->helper('form');
        $data['tittle'] = 'User Login';
        $this->load->view('templates/header', $data);
        $this->load->view('login/user_login');
        $this->load->view('templates/footer');
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
