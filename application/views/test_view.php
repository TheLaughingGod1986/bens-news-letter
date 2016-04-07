<div class="container-fluid">
    <h2>Account Overview</h2>
    <hr>
    <?php $grandTotal = 0; ?>

        <table class="table table-stripe">
            <thead>
            <tr>
                <td>Account Name</td>
                <td>Initial Deposit Date</td>
                <td>Interest Rate</td>
                <td>Monthly Deposit</td>
                <td>Days Till Account Maturity</td>
                <td>Total Interest</td>
                <td>Total Balance</td>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($records)) :
            foreach ($records as $row) :
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
                <tr>
                    <td><?php echo $row->bank_name; ?></td>
                    <td><strong><?php echo $newDate; ?></strong></td>
                    <td><strong><?php echo $row->interest * 100; ?>%</strong> Interest</td>
                    <td><strong>£<?php echo $row->monthly_deposits; ?></strong> (PCM)</td>
                    <td><strong><?php echo $remain; ?></strong> Days Left</td>
                    <td><strong>£<?php echo round($Total_Int, 2, PHP_ROUND_HALF_UP); ?></strong> After <strong><?php echo $date1->diff($date2)->format("%m"); ?></strong> Months</td>
                    <td><strong>£<?php echo round($Total_balance, 2, PHP_ROUND_HALF_UP); ?></strong> After <strong><?php echo $date1->diff($date2)->format("%m"); ?></strong> Months</td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <h3>Total Savings To Date <strong>£<?php echo round($grandTotal , 2, PHP_ROUND_HALF_UP); ?></strong></h3>

<?php else : ?>
    <h3>You Have No Accounts</h3>
    <h4>Why No Add A Account?</h4>
<?php endif; ?>
</div>