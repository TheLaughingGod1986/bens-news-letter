<nav class="navbar navbar-inverse-light-grey navbar-fixed-top" id="desktop-content">
    <nav class="navbar navbar-default navbar-fixed-top" id="mobile-content">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-mobile" aria-expanded="false" aria-controls="navbar">
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
                <div id="navbar-mobile" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if ($this->session->userdata('id')) { ?>
                            <li><?php echo anchor('members', 'Your Dashboard'); ?></li>
                            <li><?php echo anchor('profile', 'Account Overview'); ?></li>
                            <li><?php echo anchor('banks', 'Add Regular Savings'); ?></li>
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
        </div>
    </nav>