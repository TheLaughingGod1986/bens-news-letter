<h2>My Bank Accounts</h2>
<?php
if (isset($records)) : foreach ($records as $row) : ?>
    <h2>Account Name</h2>
    <p><?php echo $row->bank_name; ?></p>
    <h2>Interest Rate</h2>
    <p><?php echo $row->interest; ?></p>
    <h2>Monthly Deposits</h2>
    <p><?php echo $row->start_amount; ?></p>

    <h2>total amount</h2>
    <?php $answer = $interest * $start_amount;
    print "<h2>$answer</h2>";
    ;?>

<?php endforeach; ?>

<?php else : ?>
    <h3>No Accounts Added </h3>

<?php endif; ?>
<!--<h1>test--><?php //print_r($var_bank_name)?><!-- </h1>-->


