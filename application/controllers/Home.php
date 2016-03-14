<?php

class Home extends CI_Controller
{

    var $Front_End_data = array();
    var $template = array();

    public function layout () {
        $this->template['header'] = $this->load->view('layout/header', $this->Front_End_data, true);
        $this->template['left'] = $this->load->view('layout/left', $this->Front_End_data, true);
//        $this->template['middle'] = $this->load->view($this->middle, $this->Front_End_data, true);
//        $this->template['footer'] = $this->load->view('layout/footer', $this->Front_End_data, true);
        $this->load->view('layout/index', $this->template);

    }

    function index()
    {

        if( !isset($_SESSION) ){
            echo "nope";
        }
        else {
            $data['main_content'] = 'home_view';
//        $this->load->view('includes/template', $data);
            $this->template['middle'] = $this->load->view ($this->middle = 'login_form',$data, true);
            $this->layout();
        }

    }

}