<h2>My Bank Accounts</h2>
<?php
if (isset($records)) : foreach($records as $row) : ?>

    <h2><?php echo $row->bank_name;?></h2>
    <h2><?php echo $row->interest;?></h2>
    <h2><?php echo $row->start_amount;?></h2>

<?php endforeach; ?>

<?php  else : ?>
<h3>No Records</h3>

<?php endif; ?>
