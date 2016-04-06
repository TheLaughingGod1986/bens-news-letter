<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 05/02/2016
 * Time: 06:48
 */
class Members extends MY_Controller
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

        $this->template['middle'] = $this->load->view ($this->middle = 'member_pages/logged_in_area',$data, true);
        $this->layout();
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