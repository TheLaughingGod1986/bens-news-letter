<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>untitled</title>
</head>
<body>
<h2>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h2>

<p>This section represents the area that only logged in members can access.</p>

<h2>Yor Name Is , <?php echo $this->session->userdata('first_name', 'last_name'); ?>!</h2>
<h2>Yor Name Is bb , <?php echo $this->models->test('first_name', 'last_name'); ?>!</h2>

<?php //echo die(var_dump($this->input->post('username'))); ?>


<h4><?php echo anchor('login/logout', 'Logout'); ?></h4>



<ul>
    <li>Profile</li>
    <li>home</li>
    <li>subscribe to our newsletter</li>
</ul>
</body>
</html>