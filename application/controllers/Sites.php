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

        $this->load->libray('pagination');

        $config['base_url'] = 'http://benoats.co/university/news-letter/index.php/sites/index';
        $config['total_rows'] = $this->db->get('data')->num_rows();
        $config['per_page'] = 10;
        $config['num_links'] = 20;

        $this->pagination->initialize($config);

        $data['records'] = $this->db->get('data', $config['per_page'], $this->uri->segment(3));

        $this->load->view('site_view', $data);

//        $data = array();
//
//        if ($query = $this->site_model->get_records()) {
//            $data['records'] = $query;
//        }
//
//        $this->load->view('options_view', $data);

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