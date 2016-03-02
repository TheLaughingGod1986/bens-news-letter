<?php

class Profiles_model extends CI_Model
{

    function get_bank()
    {
        $this->db->where('mem_id', $this->session->userdata("id"));
        $query = $this->db->get('bank');
        return $query->result();

        $query = $this->db->query("SELECT
(
   12* (YEAR('account_add_date') - YEAR('start_date')) +
          (MONTH('account_add_date') - MONTH('start_date'))
) AS differenceInMonth
->FROM ('bank')
WHERE mem_id = '".$this->session->userdata('id')."'");

    $data =  $query->row_array();


    }
}

