<h1>Create Bank Account</h1>

<fieldset>
    <legend>Account Information</legend>

    <?php
    echo form_open('banks/create_bank');
    echo form_input('bank_name', set_value('bank_name', 'Account Name'));
    echo form_input('interest', set_value('interest', 'Interest'));
    echo form_input('start_amount', set_value('start_amount', 'Starting Balance'));
    echo form_input('length', set_value('length', 'Length'));
    echo form_date ('start_date', set_value('start_date', 'Start Date'));
//    echo form_input('id', set_value('mem_id', $this->session->userdata('id')));

    echo form_submit('submit', 'Add Bank ')
        ?>
    <input type="datetime" name="start_date" value="<?php echo set_value('start_date'); ?>
</fieldset>

<?php echo validation_errors('<p class="error"/>'); ?>