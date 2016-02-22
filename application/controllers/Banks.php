<?php

class Banks extends CI_Controller
{

    function index()
    {
        $data['main_content'] = 'login_form';
        $this->load->view('includes/template', $data);
    }

    function __construct()
    {
        parent::__construct();
        $this->load->members('is_logged_in');
    }

    function profile()
    {
        $this->load->view('logged_in_area');
    }

    function create_bank()
    {
        $this->load->library('form_validation');
        // field name, error message, validation rules

        $this->form_validation->set_rules('bank_name', 'Name', 'trim|required');

        $this->form_validation->set_rules('interest', 'trim|required');

        $this->form_validation->set_rules('start_amount', 'trim|required');

        $this->form_validation->set_rules('length', 'trim|required');


        if ($this->form_validation->run() == FALSE)
        {
            echo 'incorrect bank details';
            // validation is not working.. everything is validating !!
        }

        else
        {
            $this->load->model('bank_model');

            if ($query = $this->bank_model->create_bank())
            {
                $data['main_content'] = 'add_bank_successfull';
                $this->load->view('includes/template', $data);
            }
            else
            {
                echo 'Im sorry, something went wrong';
            }
        }
    }

//    function logout()
//    {
//        $this->session->sess_destroy();
//        $this->index();
//    }

}