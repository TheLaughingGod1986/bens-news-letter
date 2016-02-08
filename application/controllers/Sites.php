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
        $this->load->view('options_view');

//       $this->load->model('data_model');
//        $data['row'] = $this->data_model->getAll();
//
//        $this->load->view('home', $data);
    }

    function create()
    {
        $data = array(
            'title' => $this->input->post('title'),
            'contents' => $this->input->post('contents')
        );

        $this->site_model->add_record('$data');
        $this->index();

    }

}