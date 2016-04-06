<div id="login_form">
<h1>Create Bank Account</h1>

<fieldset>
    <legend>Account Information</legend>
    <?php
    echo form_open('banks/create_bank');
    $account_name = array(
        'name' => 'bank_name',
        'id' => 'bank_name',
        'placeholder' => 'Account Name'
    );
    echo form_input($account_name);
//    echo form_input('bank_name', set_value('bank_name', 'Account Name'));
//    echo form_input('bank_name','','placeholder=Account_Name');
    echo form_input('interest', set_value('interest', 'Interest Rate'));
    echo form_input('monthly_deposits', set_value('monthly_deposits', 'Monthly Deposits'));
    ?>

    <p>(Regular Savers Only go back 365 Days)<input style="float: left" type="text" name="start_date" id="datepicker" placeholder='Date Of First Deposit' readonly></p>

    <?php echo form_submit('submit', 'Add Bank ') ?>
</fieldset>

<?php echo validation_errors('<p class="error"/>'); ?>
    </div>

<?php
