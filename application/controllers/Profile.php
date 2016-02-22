<?php

class Profile extends CI_Controller
{
    function index()
    {
        $data = array();

        if($query = $this->profiles_model->getbank())
        {
            $data['records'] = $query;
        }

        $this->load->view('profile_view', $data);
    }

}