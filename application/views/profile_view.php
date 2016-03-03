<h2>My Regular Savings Accounts</h2>
<hr>
<?php
if (isset($records)) : foreach ($records as $row) : ?>

    <h2>Account Name</h2>
    <p><?php echo $row->bank_name; ?></p>

    <h2>Interest Rate</h2>
    <p><?php echo $row->interest; ?>%</p>

    <h2>Monthly Deposits</h2>
    <p>£<?php echo $row->start_amount; ?></p>

    <h2>Age Of Account</h2>
    <?php
    $start_time = $row->start_date;
    $date1 = new DateTime('now');
    $date2 = new DateTime($start_time);
    echo $date1->diff($date2)->format
    ("%y years, %m months, %d days, %h hours, %i minuets and %s seconds");
    ?>

    <h2>Total Balance To Date</h2>
    // p : principal
    // i : annual rate interest
    // c: compound
    // n : valid for
    // R : monthly deposit

    // calculate the terms that appear twice
    $x = $i / $c;
    $y = pow ( (1 + $x), ($n * $c) );

    $vf = $p * $y + ( ($R * $y - 1 ) / $x );

<?php endforeach; ?>

<?php else : ?>
    <h3>No Accounts Added </h3>

<?php endif; ?>


