<?php

class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
    }

    var $Front_End_data = array();
    var $template = array();

    public function layout () {
        $this->template['header'] = $this->load->view('layout/header', $this->Front_End_data, true);
        $this->template['left'] = $this->load->view('layout/left', $this->Front_End_data, true);
        $this->template['middle'] = $this->load->view($this->middle, $this->Front_End_data, true);
        $this->template['footer'] = $this->load->view('layout/footer', $this->Front_End_data, true);
        $this->load->view('layout/index', $this->template);
    }

    function index()
    {
        $data = array();
        $this->load->model('user_profile/profiles_model');
        $query = $this->profiles_model->get_bank();

        if (!empty($query)) {
            $data['records'] = $query;
        }

//        $this->middle = 'profile_view'; // passing middle to function. change this for different views.
        $this->layout();

        $this->load->view('profile_view', $data);
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