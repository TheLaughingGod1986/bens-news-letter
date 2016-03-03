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
        'small'  => 'Yearly',
        'med'    => 'Daily',
        'large'   => 'Monthly'
    );
    $shirts_on_sale = array('small', 'large');
    echo form_dropdown('shirts', $options, 'large');
        ?>
    <label>Start Date</label>
    <input type="date" name="start_date">
      <?php form_submit('compound_frequency', set_value('compound_frequency', 'Compound Frequency'));?>
</fieldset>

<?php echo validation_errors('<p class="error"/>'); ?>