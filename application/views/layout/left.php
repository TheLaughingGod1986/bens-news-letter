    <ul class="nav nav-sidebar">
        <li Logged In As <?php echo $this->session->userdata('username'); ?> </li>
        <li class="active"><?php echo anchor('profile', 'Overview'); ?></span></a></li>
        <li><?php echo anchor('members/add_bank_account', 'Add Regular Savings'); ?></li>
        <li><a href="#">Notification Accounts</a></li>
        <li><a href="#">Fixed rate Bonds</a></li>
    </ul>