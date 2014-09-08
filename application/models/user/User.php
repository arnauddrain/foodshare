<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class UserObject {

	public $id;
	public $pseudo;
	public $password;
	public $email;
	
	public function __construct($datas)
	{
		foreach ($datas as $name => $data)
			if (property_exists($this, $name))
				$this->$name = $data;
	}
	
}

/* End of file User.php */
