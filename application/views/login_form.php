<div id="login_form">
    <div class="container-fluid">
        <h1>login to this page</h1>
        <?php
        echo form_open('login/validate_credentials');
        $email_addresse = array(
            'name' => 'email_address',
            'id' => 'email_address',
            'placeholder' => 'Please Enter Your Email Address',
        );
        $password = array(
            'name' => 'password',
            'id' => 'password',
            'placeholder' => 'Please Enter Your Password',
        );
        echo form_input($email_addresse);
        echo form_password($password);
        echo form_submit('submit', 'Login');
        echo anchor('login/signup', 'Create Account');
        ?>

        <?php echo validation_errors('<p class="error"/>'); ?>
    </div>
</div>