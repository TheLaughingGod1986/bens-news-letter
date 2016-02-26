<h2>My Bank Accounts</h2>
<?php
if (isset($records)) : foreach($records as $row) : ?>
<h1>Account Name</h1>
    <p><?php echo $row->bank_name;?></p>
    <h1>Interest Rate</h1>
    <p><?php echo $row->interest;?></p>
    <p>Monthly Deposits</p>
    <p><?php echo $row->start_amount;?></p>

<?php endforeach; ?>

<?php  else : ?>
<h3>No Records</h3>

<?php endif; ?>
