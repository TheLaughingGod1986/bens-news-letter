<?php
if ($this->session->userdata('id')) { ?>
    <ul class="nav nav-sidebar">

            <li class="active"><?php echo anchor('profile', 'Overview'); ?></a></li>
            <li><?php echo anchor('members/add_bank_account', 'Add Regular Savings'); ?></li>
            <li><a href="#">Notification Accounts</a></li>
            <li><a href="#">Fixed rate Bonds</a></li>
            <?php
        }?>
    </ul>
