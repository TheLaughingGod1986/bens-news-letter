<?php

class Profile extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
        $this-&gt;load-&gt;model('test');
    }

    function index()
    {
        $data = array();
        $this->load->model('user_profile/profiles_model');
        $query = $this->profiles_model->get_bank();

        if (!empty($query)) {
            $data['records'] = $query;
        }

        $this->template['middle'] = $this->load->view($this->middle = 'profile_view', $data, true);
        $this->layout();
    }

    function test()
    {
        $this-&gt;load-&gt;view('chart');
        $data = array();
        $this->load->model('user_profile/profiles_model');
        $query = $this->profiles_model->get_bank();
        foreach ($query as $row) {

        }

        if (!empty($query)) {
            $data['records'] = $query;
        }

        $this->template['middle'] = $this->load->view($this->middle = 'test_view', $data, true);
        $this->layout();
    }
    public function data()
    {

        $data = $this-&gt;data-&gt;get_data();

$category = array();
$category['name'] = 'Category';

$series1 = array();
$series1['name'] = 'WordPress';

$series2 = array();
$series2['name'] = 'Code Igniter';

$series3 = array();
$series3['name'] = 'Highcharts';

foreach ($data as $row)
{
    $category['data'][] = $row-&gt;month;
$series1['data'][] = $row-&gt;wordpress;
$series2['data'][] = $row-&gt;codeigniter;
$series3['data'][] = $row-&gt;highcharts;
}

$result = array();
array_push($result,$category);
array_push($result,$series1);
array_push($result,$series2);
array_push($result,$series3);

print json_encode($result, JSON_NUMERIC_CHECK);
}

    public function account_data()
    {
        $string = trim($this->input->get_post('term'));
        $data['result'] = $this->profile_model->account_list($string);
        $this->load->view('user_profile/profiles_model', $data);
    }

    function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');

        if (!isset($is_logged_in) || $is_logged_in != true) {
            echo 'lol, try again. this area is secure. MEMBERS ONLY !. please ';
            echo anchor('login/index', 'Login');
            die();
        }
    }
}