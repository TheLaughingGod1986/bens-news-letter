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

        if (!empty($query)) {
            $data['records'] = $query;
        }
        $this->load->library('controller/bank');
        $this->bank->layout();
        $this->middle = 'profile_view'; // passing middle to function. change this for different views.
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