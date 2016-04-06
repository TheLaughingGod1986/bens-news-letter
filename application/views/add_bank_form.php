<div id="login_form">
<h1>Create Bank Account</h1>

    <legend>Account Information</legend>
    <?php
    echo form_open('banks/create_bank');
    $account_name = array(
        'name' => 'bank_name',
        'id' => 'bank_name',
        'placeholder' => 'Select Account Name',
    );
    $account_interest = array(
        'name' => 'interest',
        'id' => 'interest',
        'placeholder' => 'Select Interest Rate (%)',
    );
    $account_deposits = array(
        'name' => 'monthly_deposits',
        'id' => 'monthly_deposits',
        'placeholder' => 'Select Monthly Deposits (£)',
    );
    $account_date = array(
        'name' => 'start_date',
        'id' => 'datepicker',
        'placeholder' => 'Select Initial Deposit Date',
    );
    echo form_input($account_name);
    echo form_input($account_interest);
    echo form_input($account_deposits);
    echo form_input($account_date);
    echo form_submit('submit', 'Add Bank ')
    ?>

    <?php echo validation_errors('<p class="error"/>'); ?>

    </div>

