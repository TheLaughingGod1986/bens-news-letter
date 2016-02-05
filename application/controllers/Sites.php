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
        $this->load->model('site_model');
        $data['records'] = $this->site_model->getAll();
    $this->load->view('home');
    }
}