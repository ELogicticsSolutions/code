<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_page extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url'); // Load url helper
	}

	public function index()
	{
		
		$this->load->view('new_home_page/home_page');
	}
	public function view()
	{
		
		$this->load->view('login_page');
	}
	public function authenticate()
	{

		$this->load->view('login_page');
	}
}
