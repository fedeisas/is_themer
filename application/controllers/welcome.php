<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		log_message('error', 'This works!');
		$this->load->view('main');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */