<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generator extends CI_Controller {

	public function index()
	{
		$variables = $this->input->post();

	 	$string = "";

	 	foreach ( $this->input->post('colors') as $key => $val ) {
    		$string.= "$"."color_"."$key: '$val';\n";
		}

		foreach ( $this->input->post('url') as $key => $val ) {
    		$string.= "$"."url_"."$key: '$val';\n";
		}

		$string .= "@import ".'"'.FCPATH.'assets/scss/main"'.";\n";
		$string .= "@import ".'"'.FCPATH.'assets/scss/header"'.";\n";

		foreach ( $this->input->post('import') as $key => $val ) {
    		$string.= "@import ".'"'.FCPATH.'assets/scss/'."$val".'";'."\n";
		}


		if ( ! write_file('tmp/custom.scss', $string))
		{
		     echo 'Unable to write the file';
		}
		else
		{
			$this->load->library('zip');
			$compiled_css = shell_exec(escapeshellcmd('sass -t expanded --unix-newlines --no-cache '.FCPATH.'tmp/custom.scss'));
		    $this->zip->read_dir(FCPATH.'third_party/ideascale/ideas.ideascale.com/',FALSE); 
		    $this->zip->add_data('ideas.ideascale.com/css/custom.css', $compiled_css); 

			foreach ( $this->input->post('url') as $key => $val ) {
				$this->zip->add_data("ideas.ideascale.com/".$val, file_get_contents($val)); 
			}

		    $this->zip->download('demo_'.time().'.zip'); 
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */