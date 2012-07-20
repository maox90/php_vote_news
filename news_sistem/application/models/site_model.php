<?php
class Site_model extends CI_Model
{
	function get_records()
	{
		$query = $this->db->get('news');
		return $query->result();
	}

	function get_records_top_rated()
	{
		$this->db->order_by('num_votes','desc');
		$query = $this->db->get('news');
		return $query->result();
	}

	function get_records_by_date()
	{
		$this->db->order_by('datum','desc');
		$query = $this->db->get('news');
		return $query->result();
	}

	function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('users');

		if($query->num_rows ==1)
		{
			return true;
		} 
	}

	function create_member()
	{
		$new_member_insert_data = array(
			'f_name' => $this->input->post('first_name'),
			'l_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email_address'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
			);
		$insert = $this->db->insert('users', $new_member_insert_data);
		return $insert;
	}

	function add_news()
	{
		$new_news = array(
			'title' => $this->input->post('title'),
			'link' => $this->input->post('link'),
			'num_votes' => 0
			);

		$this->db->insert('news',$new_news);

	
	}

	function vote_up($data=array()){
		/*$this->db->where('id', $data['id']);
		$this->db->set('num_votes','num_votes+1', FALSE);
		$this->db->update('news');*/
		$this->db->query('UPDATE news SET num_votes = num_votes + 1 WHERE id = ' . $data['id']);
	}






}