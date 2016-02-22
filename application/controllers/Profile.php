<?php

class Profile extends CI_Controller
{
    function index()
    {
            $this->load->model('profiles_model');
            $data['rows'] = $this->profiles_model->getAll();

            $this->load->view('profile_view' , $data);
        }


}