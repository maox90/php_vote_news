<?php
class Site extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}
	function index()
	{
		
		$this->load->model('site_model');
		$data = array();
		if($query = $this->site_model->get_records())
		{
			$data['records'] = $query;
		}

		$data['main_content'] = 'site_form';
		$data['logged'] = $this->is_logged_in();
		$this->load->view('includes/template', $data);
	}

	function members_area()

	{	
		
		$this->load->model('site_model');
		$data = array();
		if($query = $this->site_model->get_records())
		{
			$data['records'] = $query;
		}
		$data['main_content'] = 'site_form';
		$data['logged'] = $this->is_logged_in();
		$this->load->view('includes/template', $data);

	}

	function top_rated()
	{
		$this->load->model('site_model');
		$data=array();
		$data_by_time= array();

		if($query = $this->site_model->get_records_top_rated())
		{
			foreach ($query as $row) {
				
			}
			$data['records'] = $query;
		}

		$data['main_content'] = 'site_form';
		$data['logged'] = $this->is_logged_in();
		$this->load->view('includes/template', $data);
	}

	function news_by_date()
	{
		$this->load->model('site_model');
		$data=array();
		$data_by_time= array();

		if($query = $this->site_model->get_records())
		{
			foreach ($query as $row) {
				
			}
			$data['records'] = $query;
		}

		$data['main_content'] = 'site_form';
		$data['logged'] = $this->is_logged_in();
		$this->load->view('includes/template', $data);

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
	function add(){
		if($this->is_logged_in())
		{
			$data['main_content'] = 'add_view';
			$data['records'] = 0;
			$data['logged'] = $this->is_logged_in();
			$this->load->view('includes/template', $data);
		}
		else
		{
			redirect('login/index');
		}
	}
	function add_new()
	{

		
		
			$data = array(
				'title' => $this->input->post('title'),
				'link' =>$this->input->post('link')
				);
			$this->load->model('site_model');
			$this->site_model->add_news($data);
			$this -> index();
	}

	function vote_up()
	{

		if($this->is_logged_in())
		{
			
			$data['id'] = $this->input->post('id');
			$this->load->model('site_model');
			$this->site_model->vote_up($data);

			$this->index();
		}else{
			redirect('login/index');
		}

	}
}