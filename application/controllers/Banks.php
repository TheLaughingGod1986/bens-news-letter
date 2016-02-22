<?php

class Banks extends CI_Controller
{

//    function __construct()
//    {
//        parent::__construct();
//        $this->is_logged_in();
//    }

    function profile()
    {
        $this->load->view('logged_in_area');
    }

    function create_bank()
    {

        $this->is_logged_in();
        $this->load->library('form_validation');
        // field name, error message, validation rules

        $this->form_validation->set_rules('bank_name', 'Name', 'trim|required');

        $this->form_validation->set_rules('interest', 'trim|required');

        $this->form_validation->set_rules('start_amount', 'trim|required');

        $this->form_validation->set_rules('length', 'trim|required');


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('add_bank_form');
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
                $this->load->view('add_bank_form');
            }
        }
    }

//    function logout()
//    {
//        $this->session->sess_destroy();
//        $this->index();
//    }

}