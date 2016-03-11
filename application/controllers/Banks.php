<?php

class Banks extends CI_Controller
{
    var $Front_End_data = array();
    var $template = array();

    public function layout () {
        $this->template['header'] = $this->load->view('layout/header', $this->Front_End_data, true);
        $this->template['middle'] = $this->load->view($this->middle, $this->Front_End_data, true);
        $this->template['footer'] = $this->load->view('layout/footer', $this->Front_End_data, true);
        $this->load->view('layout/index', $this->template);
    }

    function index()
    {

        $this->middle = 'member_pages/bank_view'; // passing middle to function. change this for different views.
        $this->layout();
    }

    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
    }

    function profile()
    {
        $this->load->view('member_pages/logged_in_area');
//        $this->load->model('members_area');
    }

    function create_bank()
    {
        $this->load->library('form_validation');
        // field name, error message, validation rules

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
                $data['main_content'] = 'add_bank_successfull';
                $this->load->view('includes/template', $data);
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