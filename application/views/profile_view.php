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

    <h2>Age Of Account</h2>
<?php
    $date1 = 'account_add_date';
    $date2 = 'start_date';

    $ts1 = strtotime($date1);
    $ts2 = strtotime($date2);

    $year1 = date('Y', $ts1);
    $year2 = date('Y', $ts2);

    $month1 = date('m', $ts1);
    $month2 = date('m', $ts2);

    $diff = (($year2 - $year1) * 12) + ($month2 - $month1);
    print "<h2>$diff</h2>";
?>

<!--    <h2>Age</h2>-->
<!--    --><?php
//    $start = new DateTime( 'account_add_date' );
//    $end   = new DateTime( 'start_date' );
//    $diff  = $start->diff( $end );
//    echo $diff->format( '%d days' );
//    ?>

    <h2>new attempt</h2>
    <?php
    $date1=date_create("2013-03-15");
    $date2=date_create("2013-12-12");
    $diff=date_diff($date1,$date2);
    echo $diff->format('%d days');
    ?>

    <p>Bank data</p>
    <p><?=isset($records['differenceInMonth'])?$records['differenceInMonth']:"No record found"?></p>

<?php endforeach; ?>

<?php else : ?>
    <h3>No Accounts Added </h3>

<?php endif; ?>


