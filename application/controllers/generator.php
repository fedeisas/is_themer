<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generator extends CI_Controller {

	public function index()
	{
		$variables = $this->input->post();

	 	$string = "";

	 	foreach ( $this->input->post('colors') as $key => $val ) {
    		$string.= "$"."$key: '$val';\n";
		}

		foreach ( $this->input->post('import') as $key => $val ) {
    		$string.= "@import ".'"assets/scss/'."$val".'";'."\n";
		}


		if ( ! write_file('tmp/custom.scss', $string))
		{
		     echo 'Unable to write the file';
		}
		else
		{
		    $this->load->helper('scss');
		    render_scss('tmp/custom.scss', 'tmp/custom.css', '--style expanded');
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */