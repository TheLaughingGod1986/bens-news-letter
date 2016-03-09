<h2>My Regular Savings Accounts</h2>
<hr>
<?php
if (isset($records)) : foreach ($records as $row) : ?>

    <?php
    $join_date = $row->start_date;
    $date1 = new DateTime('now');
    $date2 = new DateTime($join_date); ?>

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


    $p = $row->start_amount;
    $i = $row->interest;
    $c = 12; // compound frequency set to monthly
//    $n = 10/12; // Current time invested set to 6 months
    $n = ((int) $date1->diff($date2)->format("%m")) / 12;
    $r = $row->monthly_deposits;

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


    <table>
        <tbody>
        <tr>
            <td><h3>Account Name</h3></td>
            <td><h3>Interest Rate</h3></td>
            <td><h3>Opening Balance</h3></td>
            <td><h3>monthly deposit</h3></td>
            <td><h3>Age Of Account</h3></td>
            <td><h3>Current Balance</h3></td>
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
                <?php echo $row->start_amount; ?>

            </td>

            <td>
                <?php echo $row->monthly_deposits; ?>
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


