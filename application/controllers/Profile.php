<?php

class Profile extends CI_Controller
{
    function index()
    {
        $data = array();
        $this->load->model('prof_model');
        $query = $this->prof_model->getbank();

        if(!empty($query))
        {
            $data['records'] = $query;
        }

        $this->load->view('profile_view', $data);
    }

}