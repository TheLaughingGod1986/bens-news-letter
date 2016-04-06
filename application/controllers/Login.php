<?php

class Login extends MY_Controller
{
    function index()
    {
        $this->middle = 'login_form';
        $this->layout();
    }

    function validate_credentials()
    {
        $this->load->model('members/member_model');
        $query = $this->member_model->validate();

        if ($query) // if user cred validate the user session start
        {
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

            redirect('members/index');
        } else {
            $this->index();
            echo 'Incorrect Password or Username';
        }
    }


    function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
        $this->index();
    }

}