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
		home();
		$this->load->view('landing/home');
	}
	public function register()
	{
		is_logged_in();
		$this->load->view('landing/register');
	}
	public function login_page()
	{
		is_logged_in();
		$this->load->view('landing/login');
	}

	public function registration()
	{
		$this->form_validation->set_rules('typeUsername', 'Username', 'required|trim|is_unique[user.username]');
		$this->form_validation->set_rules('typePassword', 'Password', 'required|trim|min_length[5]|matches[typePasswordConfirm]');
		$this->form_validation->set_rules('typePasswordConfirm', 'Password Confirmation', 'required|trim|matches[typePassword]');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password doesnt match<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('user/register');
		} else {
			$data = [
				'username' => htmlspecialchars($this->input->post('typeUsername', true)),
				'password' => password_hash($this->input->post('typePassword'), PASSWORD_DEFAULT),
				'is_active' => '1',
			];

			$this->db->insert('user', $data);
			$owner = $this->db->get_where('user', ['username' => $data['username']])->row_array();
			$data2 = [
				'notes' => '',
				'owner' => $owner['id_user']
			];
			$this->db->insert('notes', $data2);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Account Created</div>');
			redirect('user/login_page');
		}
	}

	public function login()
	{
		$username = $this->input->post('typeUsername');
		$password = $this->input->post('typePassword');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		if ($user) {
			$notes = $this->db->get_where('notes', ['owner' => $user['id_user']])->row_array();
			if (password_verify($password, $user['password'])) {
				$data = [
					'username' => $user['username'],
					'id_user' => $user['id_user'],
					'is_active' => $user['is_active'],
					'notes' => $notes['notes'],
					'id_notes' => $notes['id_notes']
				];
				$this->session->set_userdata($data);
				redirect('data/notes');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong username or password<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
				redirect('user/login_page');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong username or password<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
			redirect('user/login_page');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('is_active');
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">Logout Success</div>');
		redirect('user/login_page');
	}

	public function update()
	{
		$notes = $textareaValue = $this->input->post('catatan');
		$dataToUpdate = array(
			'notes' => $notes,
		);
		$whereCondition = array('id_notes' => $this->session->userdata('id_notes'));
		$this->db->update('notes', $dataToUpdate, $whereCondition);
		// $notes = $this->db->get_where('notes', ['id_notes' => $this->session->userdata('id_notes')])->row_array();
		// $data = [
		// 	'notes' => $notes['notes']
		// ];
		// $this->session->set_userdata($data);
		redirect('data/notes');
	}

	public function verifUsername()
	{
		// Mengambil data input dari formulir
		$username = $this->input->post('username');

		// Validasi input
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');

		if ($this->form_validation->run() == FALSE) {
			// $this->output->set_status_header(409); 
			echo json_encode(['message' => 'Yes']);
		} else {
			echo json_encode(['message' => 'No']);
		}
	}

	public function clear_notes()
	{
		$dataToUpdate = array(
			'notes' => '',
		);
		$whereCondition = array('id_notes' => $this->session->userdata('id_notes'));
		$this->db->update('notes', $dataToUpdate, $whereCondition);
		$this->db->update('notes', $dataToUpdate, $whereCondition);
		$notes = $this->db->get_where('notes', ['id_notes' => $this->session->userdata('id_notes')])->row_array();
		$data = [
			'notes' => $notes['notes']
		];
		$this->session->set_userdata($data);
		redirect('data/notes');
	}
}
