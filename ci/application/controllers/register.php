<?php
Class Register Extends CI_Controller{
	public function view ($page = 'register'){
		
		//show 404 if file not found
		if(! file_exists('ci/application/views/register/'.$page.'.php'))
		{
			show_404();
		}
		
		$data['title'] = ucfirst('Register _____'); // Capitalize the first letter
		
		$this->load->view('templates/header', $data);
		$this->load->view('register/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}