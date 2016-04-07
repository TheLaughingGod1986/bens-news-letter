<div class="coInformationuid">
    <h2>Sign Up Now!</h2>
    <hr>
    <div id="desktop-content">
        <div class="col-sm-7">
   here img
            </div>

            <div class="col-sm-4">
                <div id="login_form">

                    <?php
                    echo form_open('login/create_member');
                    $your_f_name = array(
                        'name' => 'first_name',
                        'id' => 'first_name',
                        'placeholder' => 'Your First Name',
                    );
                    $your_s_name = array(
                        'name' => 'last_name',
                        'id' => 'last_name',
                        'placeholder' => 'Your Surname',
                    );
                    $your_username = array(
                        'name' => 'username',
                        'id' => 'username',
                        'placeholder' => 'Your Username',
                    );
                    echo "<legend>Personal Details</legend>";
                    echo form_input($your_f_name);
                    echo form_input($your_s_name);
                    echo form_input($your_username);


                    echo "<legend>Login Info</legend>";

                    $your_email = array(
                        'name' => 'email_address',
                        'id' => 'email_address',
                        'placeholder' => 'Your Email Address',
                    );
                    $your_password = array(
                        'name' => 'password',
                        'id' => 'password',
                        'placeholder' => 'Your Password',
                    );
                    $your_password2 = array(
                        'name' => 'password2',
                        'id' => 'password2',
                        'placeholder' => 'Password Confirm',
                    );
                    echo form_input($your_email);
                    echo form_password($your_password);
                    echo form_password($your_password2);
                    echo form_submit('submit', 'Create Account');

                    echo validation_errors('<p class="error"/>');
                    ?>
                </div>
                </div>
    </div>
</div>