<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('part/header');
		// $this->load->view('pages/login');
		$this->load->view('pages/home');
		$this->load->view('part/footer');
	}
	
}
