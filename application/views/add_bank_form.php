<h1>Create Bank Account</h1>

<fieldset>
    <legend>Account Information</legend>
    <?php
    echo form_open('banks/create_bank');
    echo form_input('bank_name', set_value('bank_name', 'Account Name'));
    echo form_input('interest', set_value('interest', 'Interest Rate'));
//     echo form_input('start_amount', set_value('start_amount', 'First Months Deposit'));
    echo form_input('monthly_deposits', set_value('monthly_deposits', 'Monthly Deposits (Starting on second month)'));

//    $compound_options = array(
//        '1' => 'Yearly',
//        '12' => 'Monthly',
//        '365' => 'Daily'
//    );
//    echo "<h4>Compound Rate</h4>";
//    echo form_dropdown('compound_frequency', $compound_options);
//
//    $valid_options = array(
//        '365' => '1 yeah',
//        '730' => '2 yeah',
//        '1095' => '3 year',
//        '1460' => '4 year',
//        '1825' => '5 year'
//    );
//    echo "<h4>Account Fixed Term</h4>";
//    echo form_dropdown('length', $valid_options);
//
//    ?>

    <label>Start Date</label>
    <input type="date" name="start_date">
    <?php echo form_submit('submit', 'Add Bank ') ?>
</fieldset>

<?php echo validation_errors('<p class="error"/>'); ?>