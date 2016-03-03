<h1>Create Bank Account</h1>

<fieldset>
    <legend>Account Information</legend>
    <?php
    echo form_open('banks/create_bank');
    echo form_input('bank_name', set_value('bank_name', 'Account Name'));
    echo form_input('interest', set_value('interest', 'Interest Rate'));
    echo form_input('start_amount', set_value('start_amount', 'Starting Balance'));
    echo form_input('length', set_value('length', 'Valid For'));
    echo form_input('monthly_deposits', set_value('monthly_deposits', 'Monthly Deposits'));
    $options = array(
        '1' => 'Yearly',
        '12' => 'Monthly',
        '365' => 'Daily'
    );
    echo form_dropdown('compound_frequency', $options, set_value('compound_frequency', 'Compound Rate'));
    ?>

    <label>Start Date</label>
    <input type="date" name="start_date">
    <?php echo form_submit('submit', 'Add Bank ') ?>
</fieldset>

<?php echo validation_errors('<p class="error"/>'); ?>