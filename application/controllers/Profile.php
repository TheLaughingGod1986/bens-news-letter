<?php

class Profile extends CI_Controller
{
    function index()
    {
        $data = array();

        $this->load->model('prof_model');

        if($query = $this->prof_model->get_bank())
        {
            $data['records'] = $query;
        }

        $this->load->view('profile_view', $data);
    }

}