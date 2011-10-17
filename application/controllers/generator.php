<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generator extends CI_Controller {

	public function index()
	{
		print_r($this->input->post());
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */