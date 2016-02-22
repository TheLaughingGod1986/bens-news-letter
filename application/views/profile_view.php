<?php
$query = $this->db->query('SELECT username FROM membership');

foreach ($query->result() as $row)
{

echo $row->username;

}

echo 'Total Results: ' . $query->num_rows();
