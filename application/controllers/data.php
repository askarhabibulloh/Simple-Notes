<?php
defined('BASEPATH') or exit('No direct script access allowed');

class data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        logged_in();
    }
    public function notes()
    {
        $notes = $this->db->get_where('notes', ['id_notes' => $this->session->userdata('id_notes')])->row_array();
        $data = [
            'notes' => $notes['notes']
        ];
        $this->session->set_userdata($data);
        $this->load->view('landing/notes');
    }
}
