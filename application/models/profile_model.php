<?php

class Profile_model extends CI_Model {

    function getbank()
{
    $query = $this->db->get('bank');
    return $query->results();
}

//    function update_user_bank()
//    {
//        $this->db->where('id', 5);
//        $this->db->update('bank', $data);
//    }

}