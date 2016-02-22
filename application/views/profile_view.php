<?php
$query = $this->db->query('SELECT first_name, username, email FROM membership');

foreach ($query->result() as $row)
{
echo $row->first_name;
echo $row->username;
echo $row->email;
}

echo 'Total Results: ' . $query->num_rows();
