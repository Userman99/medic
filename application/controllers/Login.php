<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		// $this->load->view('part/header');
		$this->load->view('pages/login');
		// $this->load->view('part/footer');
	}

	public function Proses_login()
	{
		$username= $_POST['username'];
		$password= $_POST['pass'];

		if ($username == "tes" && $password == "tes") {
			// $this->load->view('part/header');
			// $this->load->view('part/footer'));
		}else{
			echo "Login gagal";
		}
	}

	public function register()
	{
		$this->load->view('pages/register');
	}
}
