<h2>My Regular Savings Accounts</h2>
<hr>
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

    $remain = 365 - $date1->diff($date2)->format("%m, %a days %h");

    $Int = $row->monthly_deposits * (int)$date1->diff($date2)->format("%m");
    $Total_Int = ($Total_balance + $row->start_amount) - $Int;
    ?>


    <table border="1">
        <tbody>
        <tr style="background: #00cccc;">
            <td>Interest Rate</td>
            <td>Monthly deposit</td>
            <td>Initial Deposit Date</td>
            <td>Current Balance</td>
            <td>Days Till Account Maturity</td>
            <td>Current Interest</td>

        </tr>
        <h3><?php echo $row->bank_name; ?></h3>
        <tr style="background-color: deeppink;">
            <br>

            <td>
                <?php echo $row->interest * 100; ?>% Interest
            </td>

            <td>
                £<?php echo $row->monthly_deposits; ?> (PCM)
            </td>

            <td>
<!--                --><?php //echo $date1->diff($date2)->format("%m months, %d days"); ?>
                <?php $row->start_date; ?>
            </td>

            <td>
                £<?php echo round($Total_balance, 2, PHP_ROUND_HALF_UP); ?>
            </td>

            <td>
                <?php echo $remain; ?> Days Left
            </td>

            <td>
                £<?php echo round($Total_Int, 2, PHP_ROUND_HALF_UP); ?> Interest
            </td>
        </tr>
        </tbody>
    </table>

<?php endforeach; ?>

<?php else : ?>
    <h3>You Have No Accounts</h3>
    <h4>Why No Add A Account?</h4>
<?php endif; ?>


