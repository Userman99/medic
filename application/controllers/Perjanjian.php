<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perjanjian extends CI_Controller {

	public function index()
	{
		$this->load->view('part/header');
		// $this->load->view('pages/login');
		$this->load->view('pages/Vperjanjian');
		$this->load->view('part/footer');
	}
	
}
