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
        $data = array();
        $this->load->view('profile_view');

        if($query = $this->profile_model->get_user_bank())
        {
            $data['records'] = $query;
        }

        $this->load->view('profile_view', $data);

    }

    function getprofile()
    {
        $this->members/profile_model();
        $this->index();
    }

}