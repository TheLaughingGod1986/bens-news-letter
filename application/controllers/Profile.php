<?php

class Profile extends CI_Controller
{
    function index()
    {
        $data = array();

        $this->load->model('Prof_model');

        if($query = $this->prof_model->getbank())
        {
            $data['records'] = $query;
        }

        $this->load->view('profile_view', $data);
    }

}