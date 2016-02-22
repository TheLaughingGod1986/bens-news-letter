<?php

class Profile extends CI_Controller
{
    function index()
    {
            $this->load->model('profile_model');
            $data['rows'] = $this->profile_model->getAll();

            $this->load->view('profile_view' , $data);
        }


}