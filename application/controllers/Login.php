<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        if($this->session->userdata('logged_in'))
        {
            $this->load->view('halamanutama');
        }
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('halamanutama');
	}

	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->auth->login_user($username,$password))
		{
            redirect("user","refresh");
            
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			redirect("user","refresh");
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('is_login');
        $this->load->view('halamanutama');
	}

	

}