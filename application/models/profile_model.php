<?php

class Profile_model extends CI_Model {

    public function getbank()  # Changed
    {
        $query = $this->db->get('bank');
        return $query->results_array();  # Changed
    }
}

//    function update_user_bank()
//    {
//        $this->db->where('id', 5);
//        $this->db->update('bank', $data);
//    }

}