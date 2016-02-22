<?php

/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 05/02/2016
 * Time: 06:48
 */
class Profile extends CI_Controller
{
    function index()
    {

        $this->load->view('profile_view');

    }

    function getprofile()
    {
        $this->members/profile_model();
        $this->index();
    }

}