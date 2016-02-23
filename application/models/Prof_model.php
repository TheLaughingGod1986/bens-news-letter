<?php
class Prof_model extends CI_Model
{

    function getbank()
    {
        $query = $this->db->get('bank');
        return $query->results();
    }
}