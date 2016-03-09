<?php

/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 05/02/2016
 * Time: 06:48
 */
class Members extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
    }


    function index()
    {
        $data['main_content'] = 'member_pages/members_view';
        $this->load->view('includes/template', $data);
    }

    function members_area()
    {
        $data['main_content'] = 'member_pages/logged_in_area';
        $this->load->view('includes/template', $data);
    }

    function add_bank_account() // just for sample
    {
        $data['main_content'] = 'add_bank_form';
        $this->load->view('includes/template', $data);
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