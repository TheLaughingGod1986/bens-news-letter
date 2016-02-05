<?php

/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 05/02/2016
 * Time: 06:48
 */
class Sites extends CI_Controller
{
    function index(){
       $this->load->model('data_model');
        $data['row'] = $this->data_model->getAll();

        $this->load->view('home', $data);
    }
}