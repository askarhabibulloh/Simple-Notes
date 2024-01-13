<?php
function logged_in()
{
    $ci = get_instance();

    if (!$ci->session->userdata('username')) {
        redirect('user');
    }
}
function home()
{
    $ci = get_instance();

    if ($ci->session->userdata('username')) {;
        redirect('data/notes');
    }
}
function is_logged_in()
{
    $ci = get_instance();

    if ($ci->session->userdata('username')) {
        $ci->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">You must logout first<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('data/notes');
    }
}
