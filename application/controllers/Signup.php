<?php
function signup()
{
    $this->middle = 'signup_form';
    $this->layout();
}

function create_member()
{
$this->load->library('form_validation');

$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');

$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');

if ($this->form_validation->run() == FALSE) {
$this->middle = 'signup_form';
$this->layout();
} else {
$this->load->model('members/member_model');
if ($query = $this->member_model->create_member()) {
$this->middle = 'signup_successfull';
$this->layout();
} else {
$this->middle = 'signup_form';
$this->layout();
}
}
}