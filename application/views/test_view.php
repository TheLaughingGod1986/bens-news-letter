<div class="container-fluid">
    <h2>Account Overview</h2>
    <hr>
    <?php $grandTotal = 0; ?>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr style="background: rgba(134, 240, 133, 0.31); text-align: center;">
                <td><h4>Account Name</h4></td>
                <td id="desktop-content"><h4>Initial Deposit Date</h4></td>
                <td id="desktop-content"><h4>Interest Rate</h4></td>
                <td id="desktop-content"><h4>Monthly Deposit</h4></td>
                <td id="desktop-content"><h4>Days Till Account Maturity</h4></td>
                <td><h4>Total Interest</h4></td>
                <td><h4>Total Balance</h4></td>
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
                <tr style="background-color: rgba(94, 101, 255, 0.29); text-align: center;">
                    <td><?php echo $row->bank_name; ?></td>
                    <td id="desktop-content"><strong><?php echo $newDate; ?></strong></td>
                    <td id="desktop-content"><strong><?php echo $row->interest * 100; ?>%</strong> Interest</td>
                    <td id="desktop-content"><strong>£<?php echo $row->monthly_deposits; ?></strong> (PCM)</td>
                    <td id="desktop-content"><strong><?php echo $remain; ?></strong> Days Left</td>
                    <td><strong>£<?php echo round($Total_Int, 2, PHP_ROUND_HALF_UP); ?></strong><br>
                        <strong id="desktop-content"><?php echo $date1->diff($date2)->format("%m"); ?></strong> Months Old</td>
                    <td><strong>£<?php echo round($Total_balance, 2, PHP_ROUND_HALF_UP); ?></strong><br>
                        <strong id="desktop-content"><?php echo $date1->diff($date2)->format("%m"); ?></strong> Months Old</td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
            <tr>
                <td id="desktop-content" colspan="5"><h4>Total Savings To Date</h4></td>
                <td id="mobile-content" colspan="2"><h4>Total Savings To Date</h4></td>
                <td id="desktop-content" colspan="2"><strong>£<?php echo round($grandTotal , 2, PHP_ROUND_HALF_UP); ?></strong></td>
                <td id="mobile-content" colspan="1"><strong>£<?php echo round($grandTotal , 2, PHP_ROUND_HALF_UP); ?></strong></td>

            </tr>
            </tfoot>
        </table>
        </div>

<?php else : ?>
    <h3>You Have No Accounts</h3>
    <h4>Why No Add A Account?</h4>
<?php endif; ?>
</div>