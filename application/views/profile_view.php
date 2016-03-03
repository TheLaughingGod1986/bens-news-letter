<h2>My Bank Accounts Details</h2>
<?php
if (isset($records)) : foreach ($records as $row) : ?>
    <h2>Account Name</h2>
    <p><?php echo $row->bank_name; ?></p>
    <h2>Interest Rate</h2>
    <p><?php echo $row->interest; ?></p>
    <h2>Monthly Deposits</h2>
    <p><?php echo $row->start_amount; ?></p>
    <h2>Open Date</h2>
    <p><?php echo $row->account_add_date; ?></p>
    <h2>Start Date</h2>
    <p><?php echo $row->start_date; ?></p>


<!--    <h2>Age Of Account</h2>-->
<!--    --><?php
//    $y = new DateTime($row->account_add_date);
//    $x = new DateTime($row->start_date);
//    $interval = $y->diff($x);
//    $age_answer = 12 * $y - $x;
//    echo $interval->getTimestamp();
//    ;?>


    <h2>total amount</h2>
    <?php
    $i = $row->interest;
    $o = $row->start_amount;
    $answer = $i * $o;
    print "<h2>$answer</h2>";
    ;?>

    <h2>kjjoo</h2>
    <?php

    $z = $row->account_add_date;
    $y = $row->start_date;

    $date1 = ($z);
    $date2 = ($y);

    $diff = abs(strtotime($date2) - strtotime($date1));

    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

    printf("%d years, %d months, %d days\n", $years, $months, $days);
    ?>

    <h2>Date diff attempt</h2>
    <?php
    $z = $row->account_add_date;
    $y = $row->start_date;

    $date1 = $row->account_add_date;
    $date2 =$row->start_amount;
    $date1 = new DateTime($date1);
    $date2 = new DateTime($date2);

    echo $date1->diff($date2)->format("%d days, %h hours and %i minuts");
    ?>

<!--    <p>Bank data</p>-->
<!--    <p>--><?//=isset($records['differenceInMonth'])?$records['differenceInMonth']:"No record found"?><!--</p>-->

<?php endforeach; ?>

<?php else : ?>
    <h3>No Accounts Added </h3>

<?php endif; ?>


