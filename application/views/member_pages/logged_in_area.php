<h2>Your Dashboard</h2>
<h3>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h3>
<h3>Your Surname, <?php echo $this->session->userdata('last_name'); ?></h3>
<h3>Your First Name, <?php echo $this->session->userdata('first_name'); ?></h3>
<h3>Your Email Address, <?php echo $this->session->userdata('email_address'); ?></h3>