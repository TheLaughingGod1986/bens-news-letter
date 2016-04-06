<?php $grandTotal = 0; ?>
<?php
if (isset($records)) :
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
    ?>

    <div id="desktop-content">
        <div class="container-fluid">
            <table border="1">
                <tread>
                    <tr style="background: rgba(134, 240, 133, 0.31); text-align: center;">
                        <td>Initial Deposit Date</td>
                        <td>Interest Rate</td>
                        <td>Monthly Deposit</td>
                        <td>Days Till Account Maturity</td>
                        <td>Interest After <strong><?php echo $date1->diff($date2)->format("%m"); ?></strong> Months
                        </td>
                        <td>Balance After <strong><?php echo $date1->diff($date2)->format("%m"); ?></strong> Months</td>
                    </tr>
                </tread>
                <tbody>

                <?php
                // Add field values to get row total
                $rowTotal = $Total_balance;

                // Add row total to grand total
                $grandTotal += $rowTotal;
                ?>

                <h3><?php echo $row->bank_name; ?></h3>
                <tr style="background-color: rgba(94, 101, 255, 0.29); text-align: center;">

                    <td>
                        <strong><?php echo $newDate; ?></strong>

                    </td>

                    <td>
                        <strong><?php echo $row->interest * 100; ?>%</strong> Interest
                    </td>

                    <td>
                        <strong>£<?php echo $row->monthly_deposits; ?></strong> (PCM)
                    </td>

                    <td>
                        <strong><?php echo $remain; ?></strong> Days Left
                    </td>

                    <td>
                        <strong>£<?php echo round($Total_Int, 2, PHP_ROUND_HALF_UP); ?></strong> Interest
                    </td>

                    <td>
                        <strong>£<?php echo round($Total_balance, 2, PHP_ROUND_HALF_UP); ?></strong>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div id="mobile-content">
        <table border="1">
            <tread>
                <tr style="background: #858bf0; text-align: center;">
                    <td><h3>Maturity</h3></td>
                    <td><h3>Interest<br>(Total)</h3></td>
                    <td><h3>Balance<br>(Total)</h3></td>
                </tr>
            </tread>
            <tbody>

            <?php
            // Add field values to get row total
            $rowTotal = $Total_balance;

            // Add row total to grand total
            $grandTotal += $rowTotal;
            ?>

            <h3><?php echo $row->bank_name; ?></h3>
            <tr style="background-color: #5eff81; text-align: center;">

                <td>
                    <strong><?php echo $remain; ?></strong> Days Left
                </td>

                <td>
                    <strong>£<?php echo round($Total_Int, 2, PHP_ROUND_HALF_UP); ?></strong>
                </td>

                <td>
                    <strong>£<?php echo round($Total_balance, 2, PHP_ROUND_HALF_UP); ?></strong>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

<?php endforeach; ?>
<div id="mobile-content">

    <h3>Total Savings To Date £<?php echo round($grandTotal / 2, 2, PHP_ROUND_HALF_UP); ?></h3>
    <strong>For full breakdown of your accounts please view on a Tablet or Desktop</strong>
</div>
</div>

<div id="desktop-content">
    <div class="container-fluid">
        <table>
            <tbody>
            <tr>
                <td>
                    <h3>Total Savings To Date £<?php echo round($grandTotal / 2, 2, PHP_ROUND_HALF_UP); ?></h3>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <?php else : ?>
        <h3>You Have No Accounts</h3>
        <h4>Why No Add A Account?</h4>
    <?php endif; ?>


