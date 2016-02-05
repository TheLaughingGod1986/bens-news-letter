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
        $data['myValue'] = "some string";
        $data['anotherValue'] = "and string";
    $this->load->view('home');
    }
}