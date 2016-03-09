<h2>My Regular Savings Accounts</h2>
<hr>
<?php
if (isset($records)) : foreach ($records as $row) : ?>

    <?php
    $start_time = $row->start_date;
    $date1 = new DateTime('now');
    $date2 = new DateTime($start_time); ?>

    <?php
//    $p = $row->start_amount;
//    $i = $row->interest;
////    $c = $row->compound_frequency;
//$c = 12;
////    $n = (int)$date1->diff($date2)->format("%m");
//$n =2;
//    $r = $row->monthly_deposits;
//
//    $x = $i / $c;
//    $z = $n / 12;
//    $y = pow((1 + $x), ($z * $c));
//
//    if ($p != 0) {
//        $Total_Balance = $p * $y + ($r * ($y - 1) / $x);
//    } else {
//        $Total_Balance = 1 + $y + ($r * ($y - 1) / $x);
//    }


    $p = 300; // Starting amount
    $i = 0.06; // Interest rate
    $c = 12; // compound frequency set to monthly
    $n = 5/12; // Current time invested set to 6 months
    $r = 200; // Monthly investment is 200

    $x = $i / $c;
    $y = pow((1 + $x), ($n * $c));

    if($p!=0)
    {
        $vf = $p * $y + ($r * ($y - 1) / $x);
    }
    else
    {
        $vf = 1 + $y + ($r * ($y - 1) / $x);
    }
    ?>


    <?php
    $remain = $row->length - (int)$date1->diff($date2)->format("%m, %d");
    ?>


    <table border="1">
        <tbody>
        <tr>
            <td>Account Name</td>
            <td>Interest Rate</td>
            <td>Opening Balance</td>
            <td>monthly deposit</td>
            <td>Age Of Account</td>
            <td>Current Balance</td>
            <!--            <td>Current Interest Earned</td>-->
        </tr>
        <tr>
            <td>
                <?php echo $row->bank_name; ?>
            </td>

            <td>
<!--                --><?php //echo $row->interest * 100; ?>
                <?php echo $row->interest; ?>

            </td>

            <td>
                <?php echo $row->monthly_deposits; ?>
            </td>

            <td>
                <?php echo $row->start_amount; ?>
            </td>

            <td>
                <?php echo $date1->diff($date2)->format("%y years, %m months"); ?>
            </td>

            <td>
<!--                --><?php //echo round($Total_Balance, 2, PHP_ROUND_HALF_UP); ?>
                <?php echo $vf; ?>
            </td>

            <td>
                <!--                --><?php //echo $remain; ?>
            </td>

            <td>
                <!--               --><?php //echo round($w, 2, PHP_ROUND_HALF_UP); ?><!--</td>-->
        </tr>
        <?php
        ?>
        </tbody>
    </table>


<?php endforeach; ?>

<?php else : ?>
    <h3>You Have No Accounts</h3>
    <h4>Why No Add A Account?</h4>
<?php endif; ?>


