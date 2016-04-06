<!--<div id="desktop-content">-->
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Servare</h1>

            <div id="desktop-content">
                <span>Tool to help you save</span>
                <p>here i will write about the product. will hide this if already a member and show alternative. this
                    can only be viewd on desktop</p>
            </div>
            <p>

                <?php
                if ($this->session->userdata('id')) { ?>
            <h3>Welcome Back, <strong><?php echo $this->session->userdata('username'); ?></strong>!</h3>
            <?php
            } else { ?>
                <a class="btn btn-lg btn-primary" <?php echo anchor('login/signup', 'Sign up'); ?> role="signup">&raquo;</a>

                <?php
            }
            ?>

            </p>
        </div>
    </div>
<!--</div>-->

<!--<div id="mobile-content">-->
<!--    mobile view text-->
<!--</div>-->