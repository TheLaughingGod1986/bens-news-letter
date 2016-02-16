<?php

class Login extends CI_Controller
{
    function index()
    {
        $data['main_content'] = 'login_form';
        $this->load->view('includes/template', $data);
    }

    function validate_credentials()
    {
        $this->load->model('Membership_model');
        $query = $this->membership_model->validate();

        if ($query) // if user cred validate
        {
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true
            );

            $this->session->set_userdata('$data');
            redirect('sites/members_area');
        }

        else
        {
            $this->index();
        }
    }
}