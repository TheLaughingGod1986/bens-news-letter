<h2>My Regular Savings Accounts</h2>
<hr>
<?php
if (isset($records)) : foreach ($records as $row) : ?>

    <h2>Account Name</h2>
    <p><?php echo $row->bank_name; ?></p>

    <h2>Interest Rate</h2>
    <p><?php echo $row->interest; ?>%</p>

    <h2>Monthly Deposits</h2>
    <p>£<?php echo $row->monthly_deposits; ?></p>

    <h2>Age Of Account</h2>
    <?php
    $start_time = $row->start_date;
    $date1 = new DateTime('now');
    $date2 = new DateTime($start_time);
    echo $date1->diff($date2)->format
    ("%y years, %m months, %d days, %h hours, %i minuets and %s seconds");
    ?>
    <h2>Account Maturity</h2>
    <?php
    $remain = $row->length - (int)$date1->diff($date2)->format("%d");
    ?>
    <p>Days Till Account Maturity = <?php echo $remain; ?> Days</p>


    <h2>Total Balance To Date</h2>
    <?php
    $p = 0;
    $i = $row->interest;
    $c = $row->compound_frequency;
    $n = (int)$date1->diff($date2)->format("%m");
    $r = $row->monthly_deposits;

    $x = $i / $c;
    $z = $n / 12;
    $y = pow((1 + $x), ($z * $c));

    if($p!=0)
    {
        $vf = $p * $y + ($r * ($y - 1) / $x);
    }
    else
    {
        $vf = 1 + $y + ($r * ($y - 1) / $x);
    }

//    $vf = ceil(1.1);
    ?>

    <p>£<?php echo round($vf, 2, PHP_ROUND_HALF_UP); ?></p>

    <h2>Interest Earned To Date</h2>
    <?php
     $total_int = $row->monthly_deposits * (int)$date1->diff($date2)->format("%m");
    $w =  $vf - $total_int;

    echo round($w, 2, PHP_ROUND_HALF_UP); ?>


    <table border="1">
        <tbody>
        <tr>
            <td>Acc Name</td>
            <td>INT rate</td>
            <td>monthly deposit</td>
            <td>age</td>
            <td>maturity</td>
            <td>total</td>
            <td>total iontrest</td>
        </tr>
       results<tr>
            <td><?php echo $row->bank_name; ?></td>
            <td><?php echo $row->interest; ?></td>
            <td><?php echo $row->monthly_deposits; ?></td>
            <td><?php
                $start_time = $row->start_date;
                $date1 = new DateTime('now');
                $date2 = new DateTime($start_time);
                echo $date1->diff($date2)->format
                ("%y years, %m months, %d days, %h hours, %i minuets and %s seconds");
                ?></td>
            <td><?php echo $remain; ?></td>
            <td><?php echo round($vf, 2, PHP_ROUND_HALF_UP); ?></td>
            <td><?php
                $total_int = $row->monthly_deposits * (int)$date1->diff($date2)->format("%m");
                $w =  $vf - $total_int;

                echo round($w, 2, PHP_ROUND_HALF_UP); ?></td>
            </tr>
        <?php }
        ?>
        </tbody>
    </table>


<?php endforeach; ?>

<?php else : ?>
    <h3>You Have No Accounts</h3>
    <h4>Why No Add A Account?</h4>
<?php endif; ?>


