<!--<div id="desktop-content">-->
<div class="container-fluid">
    <div class="jumbotron">
        <h1>Servare</h1>

        <div id="desktop-content">
            <span>Tool to help you save</span>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui. </p>
        </div>
        <p>

            <?php
            if ($this->session->userdata('id')) { ?>
                <strong>Welcome Back, <?php echo $this->session->userdata('username'); ?></strong>
                <?php
            } else { ?>
                <a class="btn btn-lg btn-primary" <?php echo anchor('login/signup', 'Sign up &raquo;'); ?> </a>

                <?php
            }
            ?>

        </p>
    </div>

    <!-- Example row of columns -->
    <div class="row">
        <div class="col-lg-4">
            <h2>My Dashboard</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui. </p>
            <p>
                <?php
                if ($this->session->userdata('id')) { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('members', 'My Dashboard &raquo;'); ?> </a>
                    <?php
                } else { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('login/signup', 'Sign up &raquo;'); ?> </a>

                    <?php
                }
                ?>
            </p>
        </div>
        <div class="col-lg-4">
            <h2>Accounts Overview</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui. </p>
            <p>
                <?php
                if ($this->session->userdata('id')) { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('profile', 'My Account Overview &raquo;'); ?> </a>
                    <?php
                } else { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('login/signup', 'Sign up &raquo;'); ?> </a>

                    <?php
                }
                ?>
            </p>
        </div>
        <div class="col-lg-4">
            <h2>Add New Accounts</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                fermentum massa.</p>
            <p>
                <?php
                if ($this->session->userdata('id')) { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('banks', 'Add Regular Savings &raquo;'); ?> </a>
                    <?php
                } else { ?>
                    <a class="btn btn-lg btn-primary" <?php echo anchor('login/signup', 'Sign up &raquo;'); ?> </a>

                    <?php
                }
                ?>
            </p>
        </div>
    </div>
</div>
<!--</div>-->

<!--<div id="mobile-content">-->
<!--    mobile view text-->
<!--</div>-->