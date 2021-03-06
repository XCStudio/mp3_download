<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Layouts');
	}

	public function index()
	{
		$title = 'News';
		$this->layouts->set_title($title);
		$this->layouts->add_include('css/init.css')
		->add_include('css/button.css');
		$data['title'] = $title;
		$this->layouts->view('news', $data);
	}
}
