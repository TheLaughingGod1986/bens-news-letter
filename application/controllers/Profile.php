<?php

class Profile extends CI_Controller
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

        if(!empty($query))
        {
            $data['records'] = $query;
        }

        $this->load->view('profile_view', $data);
    }

    function get_age() {
        $data = array(
            'records' => array()
        );
        $this->load->model('user_profile/profiles_model');
        $bank = $this->profiles_model->get_age();

        if($bank->num_rows()){
            $data['records'] = $bank->row_array();
        }

        $this->load->view('profile_view', $data);
    }

    public function account_data()
    {
        $string = trim($this->input->get_post('term'));
        $data['result']= $this->profile_model->account_list($string);
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