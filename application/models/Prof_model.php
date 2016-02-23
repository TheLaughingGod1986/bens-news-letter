<?php
class Prof_model extends CI_Model {

    public function getbank()
    {
        $query = $this->db->get('bank');
        return $query->result();
    }
}