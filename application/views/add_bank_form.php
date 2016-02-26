<h1>Create Bank Account</h1>

<fieldset>
    <legend>Account Information</legend>
    <?php
    echo form_open('banks/create_bank');
    echo form_input('bank_name', set_value('bank_name', 'Account Name'));
    echo form_input('interest', set_value('interest', 'Interest Rate'));
    echo form_input('start_amount', set_value('start_amount', 'Starting Balance'));
    echo form_input('length', set_value('length', 'Valid For'));
    echo form_input('monthly_deposits', set_value('length', 'Monthly Deposits'));
    $options = array(
        'small'  => 'Yearly',
        'med'    => 'Daily',
        'large'   => 'Monthly'
    );
    $shirts_on_sale = array('small', 'large');
    echo form_dropdown('shirts', $options, 'large');
        ?>
    <input type="date" name="start_date">
      <?php echo form_submit('submit', 'Add Bank ')?>
</fieldset>

<?php echo validation_errors('<p class="error"/>'); ?>