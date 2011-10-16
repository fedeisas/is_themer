<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function upload_file($field_name)
	{

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|doc|txt';
		$config['max_size']  = 1024 * 8;
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload($field_name))
		{
			$status = "error";
			$data = $this->upload->display_errors('', '');
			$url = "";
		}
		else
		{
			$status = "ok";
			$data = $this->upload->data();
			$url = site_url("uploads/".$data["file_name"]);
		}
		
		echo json_encode(
			array(
				'status' => $status,
				'url' => $url
			)
		);
	}
}

/* End of file upload.php */
/* Location: ./application/controllers/upload.php */