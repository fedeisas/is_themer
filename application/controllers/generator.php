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
    		$string.= "@import ".'"'.FCPATH.'assets/scss/'."$val".'";'."\n";
		}


		if ( ! write_file('tmp/custom.scss', $string))
		{
		     echo 'Unable to write the file';
		}
		else
		{
		    //$cmd = escapeshellcmd("sass --style expanded ".FCPATH."tmp/custom.scss");

			//return shell_exec($cmd);
			echo '<pre>';
			echo shell_exec(escapeshellcmd('sass -t expanded --unix-newlines --no-cache '.FCPATH.'tmp/custom.scss'));
			echo '</pre>';
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */