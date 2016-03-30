<nav class="navbar navbar-inverse-light-grey navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
            $this->load->helper('html');
            $img = base_url('img/Servare.png');
            $path = 'home';
            ?>
            <div class="logo-img">
                <?php
                echo anchor($path, img($img));
                ?>
            </div>
        </div>

        <div id="desktop-content">
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if ($this->session->userdata('id')) { ?>
                        <li><?php echo anchor('login/logout', 'Logout'); ?></li>
                        <?php
                    } else { ?>
                        <li><?php echo anchor('login', 'Login'); ?></li>
                        <li><?php echo anchor('login/signup', 'Sign up'); ?></li>

                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div id="mobile-content">
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if ($this->session->userdata('id')) { ?>
                        <li><?php echo anchor('members', 'Your Dashboard'); ?></li>
                        <li><?php echo anchor('profile', 'Account Overview'); ?></li>
                        <li><?php echo anchor('banks', 'Add Regular Savings'); ?></li>
                        <li><a href="#">Notification Accounts<br>(coming soon)</a></li>
                        <li><a href="#">Fixed rate Bonds<br>(coming soon)</a></li>
                        <?php
                    } else { ?>
                        <li><?php echo anchor('login', 'Login'); ?></li>
                        <li><?php echo anchor('login/signup', 'Sign up'); ?></li>

                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</nav>