<div id='nav'>
    <?php

    if( !isset($_SESSION) ){
      echo "yes";
    }
    else {
        echo "no";
    }
    ?>

</div>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>untitled</title>
</head>

<body>
<h2>Your Dashboard</h2>
<h3>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h3>
<h3>Your Surname, <?php echo $this->session->userdata('last_name'); ?></h3>
<h3>Your First Name, <?php echo $this->session->userdata('first_name'); ?></h3>
<h3>Your Email Address, <?php echo $this->session->userdata('email_address'); ?></h3>
<!---->
<!---->
<!--<p>This section represents the area that only logged in members can access.</p>-->
<!---->
<!--<ul>-->
<!--    <li>--><?php //echo anchor('profile/index', 'My Accounts'); ?><!--</li>-->
<!---->
<!--    <field>Accounts</field>-->
<!---->
<!--    <li>--><?php //echo anchor('members/add_bank_account', 'Add Regular Savings'); ?><!--</li>-->
<!--    <li>Add Notification Account</li>-->
<!--    <li>Add Fixed Rate Bond Account</li>-->
<!--    <li>subscribe to newsletter</li>-->
<!--    <li>--><?php //echo anchor('login/logout', 'Logout'); ?><!--</li>-->
<!---->
<!--</ul>-->

</body>
</html>