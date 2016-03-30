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

//    function profile()
//    {
//        $this->middle = 'member_pages/logged_in_area';
//        $this->layout();
//    }

    function create_bank()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('bank_name', 'Name', 'trim|required');

        $this->form_validation->set_rules('interest', 'trim|required');

        $this->form_validation->set_rules('start_amount', 'trim|required');

        $this->form_validation->set_rules('length', 'trim|required');

        $this->form_validation->set_rules('start_date', 'trim|required');



        if ($this->form_validation->run() == FALSE)
        {
            echo 'incorrect bank details';
            // validation is not working.. everything is validating !!
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
                echo 'Im sorry, something went wrong';
            }
        }
    }

    function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');

        if (!isset($is_logged_in) || $is_logged_in != true) {
            echo 'lol, try again. this area is secure. MEMBERS ONLY !. please ';
            echo anchor('login/index', 'Login');
            die();
        }
    }

}