<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

	public function getUserinfo()
	{
		$query = $this->db->get('user_table');
		if ( $query->num_rows() > 0 ) {
			# code...
			return $query->result();
		} else {
			# code...
		}
		
	}

	public function insert_user_data ()
	{
		$userData=array();
		$userData['name'] = $this->input->post('name');
		$userData['email'] = $this->input->post('email');
		$userData['contact_no'] = $this->input->post('contact_no');
		$this->db->insert('user_table', $userData);
	}

	public function single_user_data($name, $email, $contact_no)
	{
		$this->db->select('*');
		$this->db->from('user_table');
		$this->db->where('name',$name);
		$this->db->where('email',$email);
		$this->db->where('contact_no',$contact_no);
		$query_result = $this->db->get();
		$result = $query_result -> row();
		return $result;
	}

	public function getSingleUserinfo($user_id)
	{
		$query = $this->db->get_where('user_table', array('user_id' => $user_id));
		if ( $query->num_rows() > 0 ) {
			# code...
			return $query->row();
		}
	}

	public function updateUser()
	{
		$userData = array();
		$user_id = $this->input->post('user_id');
		$userData['name'] = $this->input->post('name');
		$userData['email'] = $this->input->post('email');
		$userData['contact_no'] = $this->input->post('contact_no');
		$this->db->where('user_id',$user_id);
		$this->db->update('user_table', $userData);
	}

	public function deleteUser($user_id)
	{
		$this->db->where('user_id',$user_id);
		$this->db->delete('user_table');
	}

	



}
