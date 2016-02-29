<?php
class Profiles_model extends CI_Model
{

    function get_bank()
    {
        $this->db->where('mem_id', $this->session->userdata("id"));
        $query = $this->db->get('bank');
        return $query->result();
    }

//    function account_list($var_bank_name = null)
//    {
//        if($var_bank_name != ''){
//            $this->db->where('mem_id', $this->session->userdata("id"));
//            $query = $this->db->query("SELECT bank_name FROM `bank` WHERE bank_name LIKE '%".$var_bank_name."%\'");
//            return $query->row_array();
//        }
//        else
//            return false;
//    }
}