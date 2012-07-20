<?php

class Login extends CI_Controller
{
	function index()
	{
		$data['main_content'] = 'login_form';
		$data['records'] = 0;
		$data['logged'] = $this->is_logged_in();
		$this->load->view('includes/template', $data);
	}

	function validate()
	{
		$this->load->model('site_model');
		$query = $this->site_model->validate();

		if($query)
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
				);
			$this->session->set_userdata($data);
			redirect('site/members_area');
		}

		else
		{
			$this->index();
		}
	}
	function signup()
	{
		$data['records']=0;
		$data['main_content'] = 'signup_form';
		$data['logged'] = $this->is_logged_in();
		$this->load->view('includes/template', $data);
	}

	function create_member()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password2', 'Password Confrmation', 'trim|required|match[password]');
	
		if($this->form_validation->run() == FALSE)
		{
			$data['records'] = 0;
			$this->load->view('signup_form', $data);

		}
		else
		{
			$this->load->model('site_model');
			if($query=$this->site_model->create_member())
			{
				$data['records'] = 0;
				$data['main_content'] = 'signup_successful';
				$this->load->view('includes/template', $data);
			}
			else
			{
				$this->load->view('signup_form');
			}
		}



	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('site/index');
	}

	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			return False;
		}
		return True;

	}

	
}

?>