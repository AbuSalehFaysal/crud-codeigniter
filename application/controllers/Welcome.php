<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->model('user_model');
		$users = $this->user_model->getUserinfo();
		$this->load->view('index',['users'=>$users]);
	}

	public function view($user_id)
	{
		$this->load->model('user_model');
		$users = $this->user_model->getSingleUserinfo($user_id);
		$this->load->view('view',['users'=>$users]);
			
	}

	public function edit($user_id)
	{
		$this->load->model('user_model');
		$users = $this->user_model->getSingleUserinfo($user_id);
		$this->load->view('edit',['users'=>$users]);
	}

	public function delete($user_id)
	{
		$this->load->model('user_model');
		$this->user_model->deleteUser($user_id);
		$this->session->set_flashdata('error', 'User Removed!');
		redirect(base_url());


	}

	public function add_user()
	{
		$this->load->view('add_user');
	}

	public function user_data()
	{

		$this->load->model('user_model');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('contact_no','Contact No','required');
		if ($this->form_validation->run()==false) {
			# code...
			$this->session->set_flashdata('error', 'Please, fill the form properly!');
			$this->load->view('add_user');
			
		} else {
			# code...
			$this->user_model->insert_user_data();
			$this->session->set_flashdata('success', 'User added successfully!');
			redirect(base_url());
		}


		
	}

	public function update()
	{
		$this->load->model('user_model');
		$this->user_model->updateUser();
		$this->session->set_flashdata('success', 'User updated successfully!');
		redirect(base_url());
	}


}
