<?php
class Bank_model extends CI_Model {

    function create_bank()
    {

        $new_bank_acc_insert_data = array(
            'bank_name' => $this->input->post('bank_name'),
            'interest' => ($this->input->post('interest') / 100),
            'start_amount' => $this->input->post('start_amount'),
            'length' => $this->input->post('length'),
            'start_date' => date('Y-m-d',strtotime($this->input->post('start_date'))),
            'mem_id' => $this->session->userdata('id'),
            'account_add_date' => $this->input-> date('Y-m-d')
        );

        $insert = $this->db->insert('bank', $new_bank_acc_insert_data);
        return $insert;
    }
}