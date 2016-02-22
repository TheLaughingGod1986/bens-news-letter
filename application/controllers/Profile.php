<?php

class Profile extends CI_Controller
{
    function index()
    {
        $data = array();

        $this->load->model('Profile_model');

        if ($query = $this->Profile_model->getbank()) {
            $data['records'] = $query;
        }

        $this->load->view('profile_view', $data);
    }

}