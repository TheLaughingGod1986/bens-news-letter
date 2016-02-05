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
        $this->load->library('form_validation');

        //validation, error messages, validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('newsletter');
        }
        else
        {
            // validation has passed. no send email
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            $this->load->library('email');
            $this->email->set_newline("\r\n");

            $this->email->from('benoats@gmail.com', 'ben oats');
            $this->email->to('benoats@gmail.com');
            $this->email->subject('test newsletter signup is working');
            $this->email->message('you noe signd up');

            $path = $this->config->item('server_root');
            $file = $path . '/news-letter/attachments/yourinfo.txt';

//        $this->email->attach($file);

            if($this->email->send())
            {
                echo 'sent.';
            }

            else {
                show_error($this->email->print_debugger());
            }
        }
    }
}