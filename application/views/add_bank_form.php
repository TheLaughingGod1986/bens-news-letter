<div class="container-fluid">
    <h2>Add A Regular Savings Account</h2>
    <hr>
    <div id="desktop-content" class="col-sm-5">
            <h2 class="no-margin-top">Regular savings accounts</h2>

            <p>A regular savings account is an account whereby interest in compounded monthly and released on account
                maturity. Regular savers take one year to mature from the initial deposit date.
                A regular savings account pays anything from 1% to 6% (AER), you need to meet the monthly minimum
                deposit to
                validate the account, this minimum is varied from bank to bank, they also have a maximum.
                Due to this fact most people set up a standing order for 12 months.</p>

            <p>Because on the maximum deposit most people will, if they can afford it, set up many regular savings
                accounts
                with different banks, that's where our system comes in handy, you can track your grand total balance,
                keep an
                eye on how long till the account matures and how much interest would have accumulated at the current
                time.</p>

            <p>When you add an account with us all you need to do is add an account name, interest rate, monthly deposit
                and
                the first deposit date, we do all the maths for you, how good is that !</p>
        </div>

        <div class="col-sm-4">
            <div id="login_form">
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
        </div>
    
    <div id="mobile-content">
        <div id="login_form">
            <legend>Account Details</legend>
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
    </div>
</div>

