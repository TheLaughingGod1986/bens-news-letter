<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 16/02/2016
 * Time: 12:08
 */
class Membership_model extends CI_Model {
    function validate()
    {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('membership');

        if($query->num_rows == 1)
        {
            return true;
        }
    }
}