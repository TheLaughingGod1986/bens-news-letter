    <ul class="nav nav-sidebar">
        <?php
        if ($this->session->userdata('id')) { ?>
            <li class="active"><?php echo anchor('profile', 'Overview'); ?></a></li>
            <li><?php echo anchor('members/add_bank_account', 'Add Regular Savings'); ?></li>
            <li><a href="#">Notification Accounts</a></li>
            <li><a href="#">Fixed rate Bonds</a></li>
            <?php
        }

        else { ?>

            <?php
        }
        ?>

    </ul>