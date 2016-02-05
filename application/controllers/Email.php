<?php

Class Email extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->view('newsletter');
    }

    function send()
    {
        echo "hello"; die();
        $this->load->library('email');
        $this->email->set_newline("\r\n");

        $this->email->from('benoats@gmail.com', 'ben oats');
        $this->email->to('benoats@gmail.com');
        $this->email->subject('this is a test');
        $this->email->message('working');

        $path = $this->config->item('server_root');
        $file = $path .'/news-letter/attachements/yourinfo.txt';

        $this->email->attach($file);

        if($this->email->send())
        {
            echo "success";
        }

        else {
            show_error($this->email->print_debugger());
        }
    }
}