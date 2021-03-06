<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		header("Access-Control-Allow-Origin: *");
		$data = array();
		$this->template->set('title', 'Home');
		$this->template->load('default_layout', 'contents' , 'home/index', $data);
	}

	public function contact()
	{
		header("Access-Control-Allow-Origin: *");
        $data = array();
        $this->template->set('title', 'Home');
        $this->template->load('default_layout', 'contents' , 'home/contact', $data);
	}

	public function profile()
	{
		header("Access-Control-Allow-Origin: *");
        $data = array();
        $this->template->set('title', 'Home');
        $this->template->load('default_layout', 'contents' , 'home/profile', $data);
	}
}
