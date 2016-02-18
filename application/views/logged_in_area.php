<?php //$this->load->view('includes/template'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>untitled</title>
</head>

<body>

<h2>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h2>
<h2>Your Surname, <?php echo $this->session->userdata('last_name'); ?>!</h2>
<h2>Your First Name, <?php echo $this->session->userdata('first_name'); ?>!</h2>
<h2>Your Email Address, <?php echo $this->session->userdata('email_address'); ?>!</h2>
<h2>Your Total Interest, <?php echo $this->session->userdata('money'); ?>!</h2>

<p>This section represents the area that only logged in members can access.</p>

<h4><?php echo anchor('login/logout', 'Logout'); ?></h4>

<ul>
    <li>Profile</li>
    <li>home</li>
    <li>subscribe to our newsletter</li>
</ul>
</body>
</html>