<?php

class Profiles_model extends CI_Model
{

    function get_bank()
    {
        $this->db->where('mem_id', $this->session->userdata("id"));
        $query = $this->db->get('bank');
        return $query->result();
    }

    function get_age()
    {
        $mem_id = $this->session->userdata('id');
        $query = $this->db
            ->select("12*(YEAR('account_add_date') - YEAR('start_date')) + (MONTH('account_add_date') - MONTH('start_date')) AS differenceInMonth")
            ->where('mem_id', $mem_id)
            ->get('bank');
        return $query;
    }
}

