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
//        $this->load->model('profile_model');
        $query = $this->profile_model->getbank();

        if(!empty($query))
        {
            $data['records'] = $query;
        }

        $this->load->view('profile_view', $data);
    }
}