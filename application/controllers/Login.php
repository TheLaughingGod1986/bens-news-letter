<?php

class Login extends MY_Controller
{
    function index()
    {
        $this->middle = 'login_form';
        $this->layout();
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
        $this->index();
    }

    function signup()
    {
        $this->middle = 'signup_form';
        $this->layout();
    }

    function validate_credentials()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email_address', 'email_address', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->middle = 'login_form'; // return page will validation error
            $this->layout();
        }

        else {
            $this->load->model('members/member_model');
            if ($query = $this->member_model->validate()) {

                $data = array(
                'username' => $query->username,
                'id' => $query->id,
                'password' => $query->password,
                'first_name' => $query->first_name,
                'last_name' => $query->last_name,
                'email_address' => $query->email_address,
                'is_logged_in' => true
            );

            $this->session->set_userdata($data);

                $this->middle = 'member_pages/logged_in_area';
                $this->layout();
            } else {
                $this->middle = 'login_form';
                $this->layout();
                echo "Incorrect Password or Username, Please Try Again.";
            }
        }
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
            $this->middle = 'signup_form'; // return page will validation error
            $this->layout();
        } else {
            $this->load->model('members/member_model');
            if ($query = $this->member_model->create_member()) {
                $this->middle = 'signup_successfull';
                $this->layout();
            } else {
                echo "somthing went wrong";
            }
        }
    }
}