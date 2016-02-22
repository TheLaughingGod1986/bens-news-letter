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

    function members_area()
    {
//        $this->load->view('members_area');
        $this->load->view('logged_in_area');
    }

        function add_bank_account() // just for sample
        {
            $this->load->view('add_bank_form');
            echo 'good. you\'re logged in.';
        }


        function is_logged_in()
        {
            $is_logged_in = $this->session->userdata('is_logged_in');

            if (!isset($is_logged_in) || $is_logged_in != true) {
                echo 'lol, try again. this area is secure. MEMBERS ONLY !. please <a href= "../login">Login</a>';
                die();
            }
        }

    }