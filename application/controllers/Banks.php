<?php

class Banks extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
    }

    function index()
    {
        $this->middle = 'add_bank_form';
        $this->layout();
    }

    function create_bank()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('bank_name', 'bank_name', 'trim|required');
        $this->form_validation->set_rules('interest', 'interest', 'trim|required|numeric');
        $this->form_validation->set_rules('monthly_deposits', 'monthly_deposits', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE)
        {
            $this->middle = 'add_bank_form'; // return page will validation error
            $this->layout();
        }

        else
        {
            $this->load->model('bank/bank_model');

            if ($query = $this->bank_model->create_bank())
            {
                $this->middle = 'add_bank_successfull';
                $this->layout();
            }
            else
            {
                echo 'Im sorry, something went wrong, go back and try again';
            }
        }
    }

    function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');

        if (!isset($is_logged_in) || $is_logged_in != true) {
            echo 'This area is secure. MEMBERS ONLY !. please ';
            echo anchor('login/index', 'Login');
            die();
        }
    }

}