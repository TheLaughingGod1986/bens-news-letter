<div class="container-fluid">
    <h2>Your Dashboard</h2>
    <hr>
    <div class="col-sm-4">
        <h3>Welcome Back, <strong><?php echo $this->session->userdata('username'); ?></strong>!</h3>
        <h3>Your Surname, <strong><?php echo $this->session->userdata('last_name'); ?></strong></h3>
        <h3>Your First Name, <strong><?php echo $this->session->userdata('first_name'); ?></strong></h3>
        <h3>Your Email Address, <strong><?php echo $this->session->userdata('email_address'); ?></strong></h3>

        <?php $grandTotal = 0; ?>
        <?php
        if (isset($records)) : foreach ($records as $row) :

            $join_date = $row->start_date;
            $date1 = new DateTime('now');
            $date2 = new DateTime($join_date);

            $p = $row->start_amount;
            $i = $row->interest;
            $c = 12; // compound frequency set to monthly
            $n = ((int)$date1->diff($date2)->format("%m")) / 12;
            $r = $row->monthly_deposits;

            $x = $i / $c;
            $y = pow((1 + $x), ($n * $c));

            $Total_balance = $p * $y + ($r * (1 + $x) * ($y - 1) / $x);

            $remain = 365 - $date1->diff($date2)->format("%a days");

            $Total_Deposits = ($row->monthly_deposits * (int)$date1->diff($date2)->format("%m")) + $row->start_amount;
            $Total_Int = $Total_balance - $Total_Deposits;

            $originalDate = $row->start_date;
            $newDate = date("jS \of F Y", strtotime($originalDate));

            // Add field values to get row total
            $rowTotal = $Total_balance;

            // Add row total to grand total
            $grandTotal += $rowTotal;
            ?>


        <?php endforeach; ?>

            <h3>Total Savings To Date <strong>£<?php echo round($grandTotal, 2, PHP_ROUND_HALF_UP); ?></strong></h3>


        <?php else : ?>
            <h3>No Savings.</h3>
        <?php endif; ?>
    </div>
    <div id="desktop-content" class="col-sm-7">
        <?php
        $this->load->helper('html');
        $img = base_url('img/cash-flow.jpg');
        $path = 'login';
        ?>
        <div class="logged-img">
            <?php
            echo anchor($path, img($img));
            ?>
        </div>
    </div>
</div>

</div>

