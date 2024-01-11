<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('landing/login');
	}

	public function register()
	{
		$this->load->view('landing/register');
	}
	public function notes()
	{
		$this->load->view('landing/notes');
	}
	public function registration()
	{
		$this->form_validation->set_rules('typeUsername', 'Username', 'required|trim|is_unique[user.username]');
		$this->form_validation->set_rules('typePassword', 'Password', 'required|trim|min_length[5]|matches[typePasswordConfirm]');
		$this->form_validation->set_rules('typePasswordConfirm', 'Password Confirmation', 'required|trim|matches[typePassword]');

		if ($this->form_validation->run() == false) {
			redirect('user/register');
		} else {
			$data = [
				'username' => htmlspecialchars($this->input->post('typeUsername', true)),
				'password' => password_hash($this->input->post('typePassword'), PASSWORD_DEFAULT),
				'is_active' => '1',
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been created</div>');
			redirect('user');
		}
	}

	public function login()
	{
		$username = $this->input->post('typeUsername');
		$password = $this->input->post('typePassword');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'username' => $user['username'],
					'id_user' => $user['id_user'],
					'is_active' => $user['is_active']
				];
				$this->session->set_userdata($data);
				redirect('user/notes');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password</div>');
				redirect('user');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">username Not Registered</div>');
			redirect('user');
		}
	}
}
