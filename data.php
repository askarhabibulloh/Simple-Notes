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
        $this->load->view('landing/notes');
    }
}
