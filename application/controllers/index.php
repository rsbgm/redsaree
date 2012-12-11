<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function __Construct()
	{
		parent::__Construct();
	}
	
	public function index()
	{
		$this->load->view($this->config->item('template').'/index');
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */