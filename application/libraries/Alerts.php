<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Alerts {
	
	private $CI;
	private $alerts;
	
	public function __construct()
	{
		$this->CI =& get_instance();
		
		$this->CI->load->library('session');
		if (!$this->alerts = $this->CI->session->userdata('alerts'))
			$this->alerts = array();
	}
	
	public function get()
	{
		return $this->alerts;
	}
	
	public function add($text, $type = 'error')
	{
		$this->alerts[] = array('text' => $text, 'type' => $type);
		$this->CI->session->set_userdata('alerts', $this->alerts);
	}
	
	public function clean()
	{
		$this->alerts = array();
		$this->CI->session->set_userdata('alerts', $this->alerts);
	}
	
}

/* End of file Alerts.php */
