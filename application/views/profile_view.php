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
<!--    <h2>Open Date</h2>-->
<!--    <p>--><?php //echo $row->account_add_date; ?><!--</p>-->
<!--    <h2>Start Date</h2>-->
<!--    <p>--><?php //echo $row->start_date; ?><!--</p>-->

    <h2>Total amount</h2>
    <?php
    $i = $row->interest;
    $o = $row->start_amount;
    $answer = $i * $o;
    print "<p>£$answer</p>";; ?>

    <h2>Age Of Account</h2>
    <?php
    $z = $row->account_add_date;
    $y = $row->start_date;

    $date1 = date('Y-m-d');
    $date2 = $row->start_date;
    $date1 = new DateTime($date1);
    $date2 = new DateTime($date2);

    echo $date1->diff($date2)->format("%d days, %h hours and %i minuets");
    ?>

<?php endforeach; ?>

<?php else : ?>
    <h3>No Accounts Added </h3>

<?php endif; ?>


