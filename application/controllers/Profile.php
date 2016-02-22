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

        if($query = $this->profile_model->getbank())
        {
            $data['records'] = $query;
        }

        $this->load->view('profile_view', $data);
    }

}