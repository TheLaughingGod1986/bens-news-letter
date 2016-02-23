<?php

class Profile extends CI_Controller
{
    function index()
    {
        $data = array();
        $this->load->model('profiles_model');
        $query = $this->profiles_model->get_bank();

        if(!empty($query))
        {
            $data['records'] = $query;
        }

        $this->load->view('profile_view', $data);
    }

}