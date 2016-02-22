<?php
class Profiles_model extends CI_Model {

    public function getbank()
    {
        $query = $this->db->get('bank');
        return $query->results_array();  #
    }
}