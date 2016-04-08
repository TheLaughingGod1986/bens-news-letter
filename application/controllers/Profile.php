<?php

class Profile extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
    }

    function index()
    {
        $data = array();
        $this->load->model('user_profile/profiles_model');
        $query = $this->profiles_model->get_bank();

        if (!empty($query)) {
            $data['records'] = $query;
        }

        $this->template['middle'] = $this->load->view ($this->middle = 'profile_view',$data, true);
        $this->layout();
    }

    function test()
    {
        $data = array();
        $this->load->model('user_profile/profiles_model');
        $query = $this->profiles_model->get_bank();
 $grandTotal = 0;
        foreach ($query as $row)  {
$join_date = $row->start_date;
$date1 = new DateTime('now');
$date2 = new DateTime($join_date);

$p = $row->start_amount;
$i = $row->interest;
$c = 12; // compound frequency set to monthly
$n = ((int)$date1->diff($date2)->format("%m")) / 12;
$r = $row->monthly_deposits;
$x = $i / $c;
$y = pow((1 + $x), ($n * $c));
$Total_balance = $p * $y + ($r * (1 + $x) * ($y - 1) / $x);

$remain = 365 - $date1->diff($date2)->format("%a days");

$Total_Deposits = ($row->monthly_deposits * (int)$date1->diff($date2)->format("%m")) + $row->start_amount;
$Total_Int = $Total_balance - $Total_Deposits;

$originalDate = $row->start_date;
$newDate = date("jS \of F Y", strtotime($originalDate));

// Add field values to get row total
$rowTotal = $Total_balance;

// Add row total to grand total
$grandTotal += $rowTotal;

        }
        
        if (!empty($query)) {
            $data['records'] = $query;
        }

        $this->template['middle'] = $this->load->view ($this->middle = 'test_view',$data, true);
        $this->layout();
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