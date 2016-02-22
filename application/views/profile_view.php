<?php


$query = $this->db->get('membership');

foreach ($query->result() as $row)
{
    echo $row->username;
}