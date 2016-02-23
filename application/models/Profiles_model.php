<?php
class Profiles_model extends CI_Model
{

    function get_bank()
    {
        $query = $this->db->get('bank');
        return $query->result();
    }
}