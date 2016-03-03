<?php

class Profiles_model extends CI_Model
{

    function get_bank()
    {
        $this->db->where('mem_id', $this->session->userdata("id"));
        $query = $this->db->get('bank');
        return $query->result();
    }

}