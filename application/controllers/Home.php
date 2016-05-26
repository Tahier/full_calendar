<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mevent');
		
	}

	function index(){
		$data['event'] = $this->mevent->get_all_event();
		$this->load->view('lihat_calendar', $data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */