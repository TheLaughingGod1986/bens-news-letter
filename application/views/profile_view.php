<h2>My Bank Accounts</h2>
<?php
//if (isset($records)) : foreach ($records as $row) : ?>
<!--    <h2>Account Name</h2>-->
<!--    <p>--><?php //echo $row->bank_name; ?><!--</p>-->
<!--    <h2>Interest Rate</h2>-->
<!--    <p>--><?php //echo $row->interest; ?><!--</p>-->
<!--    <h2>Monthly Deposits</h2>-->
<!--    <p>--><?php //echo $row->start_amount; ?><!--</p>-->
<!---->
<!--    <h2>total amount</h2>-->
<!---->
<!--    --><?php
//    $i = $row->interest;
//    $o = $row->start_amount;
//    $total = $i * $o;
//
//    print "<h2>$total</h2>";
//    ; ?>
<!---->
<!--    <h2>Age</h2>-->
<!--    <p>-->
<!--        --><?//= isset($records['differenceInMonth']) ? $records['differenceInMonth'] : "No record found" ?>
<!--    </p>-->
<?php

foreach(differenceInMonth AS $age){

    echo "<p>" . $age . "</p>";

}

<?php //endforeach; ?>
<!---->
<?php //else : ?>
<!--    <h3>No Accounts Added </h3>-->
<?php //endif; ?>



