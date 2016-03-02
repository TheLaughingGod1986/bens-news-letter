<?php

class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
    }

//    function index()
//    {
//        $data = array();
//        $this->load->model('user_profile/profiles_model');
//        $query = $this->profiles_model->get_bank();
//
//
//        if(!empty($query))
//        {
//            $data['records'] = $query;
//        }
//
//        $this->load->view('profile_view', $data);
//    }

    function get_bank() {
        $mem_id = $this->session->userdata('id');
        $query = $this->db
            ->select("12*(YEAR('account_add_date') - YEAR('start_date')) + (MONTH('account_add_date') - MONTH('start_date')) AS differenceInMonth")
            ->where('mem_id', $mem_id)
            ->get('bank');

        return $query;
        // $data['account_age'] =  $query->row_array(); <-- Statement after return is useless.
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