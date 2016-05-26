<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mevent extends CI_Model {

	function get_all_event(){
		return $this->db->get('event');
	}	

}

/* End of file mevent.php */
/* Location: ./application/models/mevent.php */