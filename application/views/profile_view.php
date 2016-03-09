<h2>My Regular Savings Accounts</h2>
<hr>
<?php
if (isset($records)) : foreach ($records as $row) : ?>

    <?php
    $join_date = $row->start_date;
    $date1 = new DateTime('now');
    $date2 = new DateTime($join_date);

    $p = $row->start_amount;
    $i = $row->interest;
    $c = 12; // compound frequency set to monthly
    $n = ((int) $date1->diff($date2)->format("%m")) / 12;
    $r = $row->monthly_deposits;

    $x = $i / $c;
    $y = pow((1 + $x), ($n * $c));

    if($p!=0)
    {
        $Total_balance = $p * $y + ($r * ($y - 1) / $x);
    }
    else
    {
        $Total_balance = 1 + $y + ($r * ($y - 1) / $x);
    }

    $remain = $row->length - (int)$date1->diff($date2)->format("%y years, %m months, %d days");
    ?>


    <table border="1">
        <tbody>
        <tr style="background: #00cccc;">
            <td>Interest Rate</td>
            <td>Opening Balance</td>
            <td>monthly deposit</td>
            <td>Age Of Account</td>
            <td>Current Balance</td>


            <!--            <td>Current Interest Earned</td>-->
        </tr>
        <h3><?php echo $row->bank_name; ?></h3>
        <tr style="background-color: deeppink;">
            <br>

            <td>
                <?php echo $row->interest * 100; ?>
            </td>

            <td>
                <?php echo $row->start_amount; ?>

            </td>

            <td>
                <?php echo $row->monthly_deposits; ?>
            </td>

            <td>
                <?php echo $date1->diff($date2)->format("%y years, %m months, %d days"); ?>
            </td>

            <td>
                <?php echo round($Total_balance, 2, PHP_ROUND_HALF_UP); ?>

            </td>

            <td>
                                <?php echo $remain; ?>
            </td>

            <td>
<!--                               --><?php //echo round($w, 2, PHP_ROUND_HALF_UP); ?>
            </td>
        </tr>
        </tbody>
    </table>


<?php endforeach; ?>

<?php else : ?>
    <h3>You Have No Accounts</h3>
    <h4>Why No Add A Account?</h4>
<?php endif; ?>


