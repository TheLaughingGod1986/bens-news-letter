<?php

class Home extends MY_Controller
{

    function index()
    {
        $this->middle = 'home_view';
        $this->layout();
    }

}