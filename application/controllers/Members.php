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

    var $Front_End_data = array();
    var $template = array();

    public function layout () {
        $this->template['header'] = $this->load->view('layout/header', $this->Front_End_data, true);
        $this->template['left'] = $this->load->view('layout/left', $this->Front_End_data, true);
//        $this->template['middle'] = $this->load->view($this->middle, $this->Front_End_data, true);
//        $this->template['footer'] = $this->load->view('layout/footer', $this->Front_End_data, true);
        $this->load->view('layout/index', $this->template);

if(is_logged_in())
{
    echo anchor('yes','Admin yes');
}


else
{
    echo anchor('user/login','Login');
    echo anchor('user/signup','Signup');
}
    }


    function index()
    {
        $data['main_content'] = 'member_pages/members_view';
        $this->load->view('includes/template', $data);
    }

    function members_area()
    {
        $data['main_content'] = 'member_pages/logged_in_area';
//        $this->load->view('includes/template', $data);

        $this->template['middle'] = $this->load->view ($this->middle = 'member_pages/logged_in_area',$data, true);
        $this->layout();
    }

    function add_bank_account()
    {
        $data['main_content'] = 'add_bank_form';
        $this->template['middle'] = $this->load->view ($this->middle = 'add_bank_form',$data, true);
        $this->layout();
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