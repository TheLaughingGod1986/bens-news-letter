<h1>Create Bank Account</h1>

<fieldset>
    <legend>Account Information</legend>

    <?php
    echo form_open('bank/create_bank');
    echo form_input('bank_name', set_value('bank_name', 'Account Name'));
    echo form_input('interest', set_value('interest', 'Interest'));
    echo form_input('start_amount', set_value('start_amount', 'Starting Balance'));
    ?>

</fieldset>
