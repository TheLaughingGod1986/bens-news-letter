<?php
class Bank_model extends CI_Model {

    function current_date() {
        // gets current timestamp
        date_default_timezone_set ("Europe/London"); // What timezone you want to be the default value for your current date.
        return date('Y-m-d H:i:s');
    }

    function create_bank()
    {
        $this->load->helper('date');

        $new_bank_acc_insert_data = array(
            'bank_name' => $this->input->post('bank_name'),
            'interest' => ($this->input->post('interest') / 100),
            'start_amount' => $this->input->post('monthly_deposits'),
//            'length' => $this->input->post ('length'),
            'start_date' => date('Y-m-d',strtotime($this->input->post('start_date'))),
            'mem_id' => $this->session->userdata('id'),
            'account_add_date' => $this->current_date(),
            'monthly_deposits' => $this->input->post('monthly_deposits'),
//            'compound_frequency' => $this->input->post('compound_frequency')
        );

        $insert = $this->db->insert('bank', $new_bank_acc_insert_data);
        return $insert;
    }

    function bank_math()
    {
        if (isset($records)) : foreach ($records as $row) :
        $join_date = $row->start_date;
    $date1 = new DateTime('now');
    $date2 = new DateTime($join_date);

    $p = 0;
    $i = $row->interest;
    $c = 12; // compound frequency set to monthly
    $n = ((int)$date1->diff($date2)->format("%m")) / 12;
    $r = $row->monthly_deposits;

    $x = $i / $c;
    $y = pow((1 + $x), ($n * $c));

    $Total_balance = $p * $y + ($r * (1 + $x) * ($y - 1) / $x);

    $remain = 365 - $date1->diff($date2)->format("%a days");


    $Int = $row->monthly_deposits * (int)$date1->diff($date2)->format("%m");
    $Total_Int = $Total_balance - $Int;
    }
}