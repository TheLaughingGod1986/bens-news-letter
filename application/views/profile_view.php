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

    <?php isset($records['differenceInMonth'])?$records['differenceInMonth']:"No record found"?>

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



<?php endforeach; ?>

<?php else : ?>
    <h3>No Accounts Added </h3>

<?php endif; ?>

<h2>Age Of Account</h2>
<p><?php isset($records['differenceInMonth'])?$records['differenceInMonth']:"No record found"?></p>


