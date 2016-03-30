<?php

class Home extends MY_Controller
{

    function index()
    {

            $data['main_content'] = 'home_view';
            $this->template['middle'] = $this->load->view ($this->middle = 'login_form',$data, true);
            $this->layout();
    }

}