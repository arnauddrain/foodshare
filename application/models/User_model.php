<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class User_model extends CI_Model {
	
	public function add($datas)
	{
		$this->db->insert('users', $datas);
	}
	
	public function get($datas = array())
	{
		$query = $this->db->get_where('users', $datas);
		return $query->first_row('array');
	}
	
}

/* End of file User_model.php */
