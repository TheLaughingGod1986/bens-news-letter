<?php

class Profile extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
    }

    function index()
    {
        $data = array();
        $this->load->model('user_profile/profiles_model');
        $query = $this->profiles_model->get_bank();

        if (!empty($query)) {
            $data['records'] = $query;
        }

        $this->template['middle'] = $this->load->view($this->middle = 'profile_view', $data, true);
        $this->layout();
    }

    function test()
    {
        $data = array();
        $this->load->model('user_profile/profiles_model');
        $query = $this->profiles_model->get_bank();
        foreach ($query as $row) {

        }

        if (!empty($query)) {
            $data['records'] = $query;
        }

        $this->template['middle'] = $this->load->view($this->middle = 'test_view', $data, true);
        $this->layout();
    }

    public function account_data()
    {
        $string = trim($this->input->get_post('term'));
        $data['result'] = $this->profile_model->account_list($string);
        $this->load->view('user_profile/profiles_model', $data);
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