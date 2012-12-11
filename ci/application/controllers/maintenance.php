<?php
class Maintenance extends CI_Controller {

	public function view($page = 'down')
	{
		if ( ! file_exists('ci/application/views/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst('maintenance is _______'); // Capitalize the first letter

		$this->load->view('templates/header', $data);
		$this->load->view($page, $data);
		$this->load->view('templates/footer', $data);
	}
}