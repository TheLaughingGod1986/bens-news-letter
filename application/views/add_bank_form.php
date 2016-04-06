<div id="login_form">
<h1>Create Bank Account</h1>

<fieldset>
    <legend>Account Information</legend>
    <?php
    echo form_open('banks/create_bank');
    echo form_input('bank_name', set_value('bank_name', 'Account Name'));
    echo form_input('interest', set_value('interest', 'Interest Rate'));
    echo form_input('monthly_deposits', set_value('monthly_deposits', 'Monthly Deposits'));
    ?>

    <label>Select Date Of First Deposit</label>
    <input type="date" data-date-format="DD MMMM YYYY" name="start_date">

    <div class="input-group input-daterange">
        <input type="text" class="form-control" value="2012-04-05">
        <span class="input-group-addon">to</span>
        <input type="text" class="form-control" value="2012-04-19">
    </div>
    <?php echo form_submit('submit', 'Add Bank ') ?>
</fieldset>

<?php echo validation_errors('<p class="error"/>'); ?>
    </div>
