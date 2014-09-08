<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class APP_Controller extends CI_Controller {
	
	public $user;
	
	public function __construct()
	{
		parent::__construct();
		require_once(APPPATH . 'models/user/User.php');
		$this->user = $this->get_user();
	}
	
	private function get_user()
	{
		$user_session_infos = $this->session->userdata('user');
		if (!$user_session_infos)
			return null;
		$user = new UserObject($user_session_infos);
		return $user;
	}
	
	public function show_page($view = 'welcome/index', $datas = array())
	{
		$datas = array_merge($datas, array(
			'alerts' => $this->alerts->get(),
			'user' => $this->user
		));
		$this->alerts->clean();
		$this->twig->display($view.'.html.twig', $datas);
	}
	
}

/* End of file APP_Controller.php */
/* Location: ./application/core/APP_Controller.php */
