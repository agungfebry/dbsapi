<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Auth_model', 'A_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email' );
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == false)
		{
			$data['content'] = 'login';
			$this->load->view('auth/template/content', $data);
		}
		else
		{
			// jalankan fungsi  login
			$this->_login();
		}
	}

	private function _login()
	{
		$email    = $this->input->post('email');
		$password = $this->input->post('password');
		
		$user     = $this->A_model->get_user($email);

		if($user)
		{
			if(($password == $user['password']))
			{
				$data = [ 'email' => $user['email']];

				$this->session->set_userdata($data);

				redirect('dashboard');
			}
			else
			{
				$this->session->set_flashdata('message', '<div class="alert alert-danger mx-4 mt-2 mb-n2 shadow" role="alert">Wrong password!</div>');
				redirect('auth');
			}
		}
		else
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger mx-4 mt-2 mb-n2 shadow" role="alert">Wrong email!</div>');

			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('password');

		$this->session->set_flashdata('message', '<div class="alert alert-success mx-4 mt-2 mb-n2 shadow" role="alert">You have been logout!</div>');

		redirect('auth');
	}


	public function blocked()
	{
		$data['title'] = '403 Page';	
		$this->load->view('template/header', $data);
		$this->load->view('auth/blocked');
	}

}

