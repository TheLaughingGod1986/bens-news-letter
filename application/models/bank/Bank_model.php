<?php
class Bank_model extends CI_Model {

    function current_date() {
        // gets current timestamp
        date_default_timezone_set('Asia/Manila'); // What timezone you want to be the default value for your current date.
        return date('Y-m-d H:i:s');
    }

    function create_bank()
    {

        $new_bank_acc_insert_data = array(
            'bank_name' => $this->input->post('bank_name'),
            'interest' => ($this->input->post('interest') / 100),
            'start_amount' => $this->input->post('start_amount'),
            'length' => $this->input->post('length'),
            'start_date' => date('Y-m-d',strtotime($this->input->post('start_date'))),
            'mem_id' => $this->session->userdata('id'),
            'account_add_date' => $$this->input->post('current_date')
        );

        $insert = $this->db->insert('bank', $new_bank_acc_insert_data);
        return $insert;
    }
}