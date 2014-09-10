<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class User extends APP_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
                $this->load->helper('url');
	}
	
	private function validate_user_infos($pseudo, $password, $email)
	{
		$errors = array();
		if (!$pseudo || !$password || !$email)
			$errors[] = 'Tout les champs sont obligatoires';
		if ($pseudo && $this->user_model->get(array('pseudo' => $pseudo)))
			$errors[] = 'Le pseudo est déjà utilisé';
		if ($email && $this->user_model->get(array('email' => $email)))
			$errors[] = 'L\'email est déjà utilisé';
		
		foreach ($errors as $error)
			$this->alerts->add($error, 'error');
		return (empty($errors));
	}
	
	public function registration()
	{
            if ($this->input->post('pseudo'))
            {
		$pseudo = $this->input->post('pseudo');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		
		$success = $this->validate_user_infos($pseudo, $password, $email);
		if ($success)
		{
			$datas = array(
				'pseudo' => $pseudo,
				'password' => md5($password),
				'email' => $email
			);
			$this->user_model->add($datas);
			$user_infos = $this->user_model->get($datas);
			$this->session->set_userdata(array('user' => $user_infos));
			$this->alerts->add('Inscription réussie', 'success');
                        redirect('/');
		}
            }
            $this->show_page('user/registration');
	}
	
	public function login()
	{
		$pseudo = $this->input->post('pseudo');
		$password = $this->input->post('password');
		
		$datas = array(
			'pseudo' => $pseudo,
			'password' => md5($password),
		);
		$user_infos = $this->user_model->get($datas);
		if (!$user_infos)
			$this->alerts->add('La combinaison pseudo / mot de passe n\'est pas valide', 'error');
		else
		{
			$this->alerts->add('Bienvenue '.$pseudo, 'success');
			$this->session->set_userdata(array('user' => $user_infos));
		}
		redirect('/');	
	}
	
	public function logout()
	{
		$this->session->unset_userdata('user');
                $this->alerts->add('Deconnexion réussie', 'success');
		redirect('/');
	}
	
}

/* End of file authentication.php */
