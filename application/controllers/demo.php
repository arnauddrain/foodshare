<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Demo extends APP_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
        public function __construct()
	{
            parent::__construct();
            $this->load->helper('url');
	}
    
        public function findBook()
        {
            $this->show_page('demo/findBook');
        }
        
	public function book()
	{
            $this->show_page('demo/book');
	}
        
        public function myBook()
        {
            $this->show_page('demo/myBook');
        }
        
        public function myRestaurant()
        {
            $this->show_page('demo/myRestaurant');
        }
        
        public function doBook()
	{
            $this->alerts->add('Repas réservé', 'success');
            redirect('/');
	}

	public function note()
	{
		$this->show_page('demo/note');
	}

	public function noter()
	{
		$this->alerts->add('Notation envoyée', 'success');
		redirect('/');
	}

	public function addMenu()
	{
		$this->alerts->add('Menu ajouté', 'success');
		redirect('/');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */