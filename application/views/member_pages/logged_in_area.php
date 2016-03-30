<h2>Your Dashboard</h2>
<h3>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h3>
<h3>Your Surname, <?php echo $this->session->userdata('last_name'); ?></h3>
<h3>Your First Name, <?php echo $this->session->userdata('first_name'); ?></h3>
<h3>Your Email Address, <?php echo $this->session->userdata('email_address'); ?></h3>

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
    ?>



        <?php
        // Add field values to get row total
        $rowTotal = $Total_balance;

        // Add row total to grand total
        $grandTotal += $rowTotal;
        ?>



<?php endforeach; ?>

                <h3>Total Savings To Date £<?php echo round($grandTotal, 2, PHP_ROUND_HALF_UP); ?></h3>


<?php else : ?>
    <h3>No Savings.</h3>
<?php endif; ?>


