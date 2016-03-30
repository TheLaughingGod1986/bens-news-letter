<div id="my-content">
<div id="login_form">
    <h1>login to this page</h1>
    <?php
    echo form_open('login/validate_credentials');
    echo form_input('email_address', 'Email Address');
    echo form_password('password', 'Password');
    echo form_submit('submit', 'Login');
    echo anchor('login/signup', 'Create Account');
    ?>
</div>
    </div>