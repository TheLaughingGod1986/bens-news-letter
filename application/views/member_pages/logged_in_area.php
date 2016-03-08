<?php $this->load->view('includes/template'); ?>

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

<ul>
    <li><?php echo anchor('profile/index', 'My Accounts'); ?></li>

    <field>Accounts</field>

    <li><?php echo anchor('members/add_bank_account', 'Add Regular Savings'); ?></li>
    <li>Add Notification Account</li>
    <li>Add Fixed Rate Bond Account</li>
    <li>subscribe to newsletter</li>
    <li><?php echo anchor('login/logout', 'Logout'); ?></li>

</ul>
</body>
</html>