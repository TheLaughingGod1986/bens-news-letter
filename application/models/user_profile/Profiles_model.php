<?php
class Profiles_model extends CI_Model
{

    function get_bank()
    {
//        $query = $this->db->get('bank');
        $query = $this->db->get ("SELECT * FROM 'bank' WHERE 'mem_id' MATCH {$_SESSION['id']}");
        return $query->result();
    }
}