<div class="conInformationid">
    <h2>Log In Now!</h2>
    <hr>
    <div id="desktop-content">
        <div class="col-sm-7">
            <?php
            $this->load->helper('html');
            $img = base_url('img/cash-flow.jpg');
            $path = 'home';
            ?>
            <div>
                <?php
                echo anchor($path, img($img));
                ?>
            </div>

            <div class="col-sm-4">
                <div id="login_form">
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
                    echo "<legend>Login Details</legend>";
                    echo form_input($email_addresse);
                    echo form_password($password);
                    echo form_submit('submit', 'Login');
                    echo anchor('login/signup', 'Create Account');
                    ?>

                    <?php echo validation_errors('<p class="error"/>'); ?>
                </div>
            </div>
        </div>
    </div>
</div>