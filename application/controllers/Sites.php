<?php

/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 05/02/2016
 * Time: 06:48
 */
class Sites extends CI_Controller
{
    function index()
    {
    }

    function create()
    {
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content')
        );

        $this->site_model->add_record($data);
        $this->index();
    }

    function update()
    {
        $data = array(
            'title' => 'updated title',
            'content' => 'content update here'
        );

        $this->site_model->update_record($data);
    }

    function delete()
    {
        $this->site_model->delete_row();
        $this->index();
    }
}