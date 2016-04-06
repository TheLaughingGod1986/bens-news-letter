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
    $account_interest = array(
        'name' => 'interest',
        'id' => 'interest',
        'placeholder' => 'Interest Rate (%)'
    );
    $account_deposits = array(
        'name' => 'monthly_deposits',
        'id' => 'monthly_deposits',
        'placeholder' => 'Monthly Deposits (£)'
    );
    $account_date = array(
        'name' => 'start_date',
        'id' => 'datepicker',
        'placeholder' => 'date'
    );
    echo form_input($account_name);
    echo form_input($account_interest);
    echo form_input($account_deposits);
    echo form_textarea($account_date);
    ?>

<!--    <p>(Regular Savers Only go back 365 Days)<input style="float: left" type="text" name="start_date" id="datepicker" placeholder='Date Of First Deposit' readonly></p>-->

    <?php echo form_submit('submit', 'Add Bank ') ?>
</fieldset>

<?php echo validation_errors('<p class="error"/>'); ?>
    </div>

<?php
