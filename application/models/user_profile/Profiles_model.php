<?php
class Profiles_model extends CI_Model
{

    function get_bank()
    {
//        $query = $this->db->get('bank');
        $query = $this->db->get $query = $this->db->query("SELECT * FROM bank WHERE mem_id = '".$this->session->userdata('id')."'");
        return $query->result();

    }
}