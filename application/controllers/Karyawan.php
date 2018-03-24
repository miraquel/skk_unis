<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function index()
	{
		header("Access-Control-Allow-Origin: *");
		$data = array();
		$this->template->set('title', 'Home');
		$this->template->load('default_layout', 'contents' , 'karyawan/index', $data);
	}

	public function create()
	{
		header("Access-Control-Allow-Origin: *");
		$data = array();
		$this->template->set('title', 'Home');
		$this->template->load('default_layout', 'contents' , 'karyawan/create', $data);
	}

	public function insert()
	{
		$this->karyawan->insert('nama','asdasd');
	}
}
