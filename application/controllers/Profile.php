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
//        $sesdata = array(
//            'username' => $query->username,
//            'id' => $query->id,
//            'password' => $query->password,
//            'first_name'=>$query->first_name,
//            'last_name'=>$query->last_name,
//            'email_address'=>$query->email_address,
//            'is_logged_in' => true
//        );
//
//        $this->session->set_userdata($sesdata);


        if(!empty($query))
        {
            $data['records'] = $query;
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