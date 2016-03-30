
<nav class="navbar navbar-inverse-light-grey navbar-fixed-top">
    <nav class="navbar navbar-inverse-light-grey navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
            $this->load->helper('html'); // Load HTML Helper for img()
            $img = base_url('img/Servare.png'); // generates text: siteroot/img/servare.png
            $path = 'home'; // link to home controller index
            ?>
            <div class="logo-img">
                <?php
                echo anchor($path, img($img));
                ?>
            </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <div id="desktop-content">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if ($this->session->userdata('id')) { ?>
<!--                    <li>--><?php //echo anchor('login/logout', 'Logout'); ?><!--</li>-->
                    <li>Desktop view</li>
                    <?php
                }

                else { ?>
<!--                    <li>--><?php //echo anchor('login', 'Login'); ?><!--</li>-->
<!--                    <li>--><?php //echo anchor('login/signup', 'Sign up'); ?><!--</li>-->

                    <?php
                }
                ?>
            </ul>
                </div>

            <div id="mobile-content">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if ($this->session->userdata('id')) { ?>
                        <li>Mobile</li>
                        <?php
                    }

                    else { ?>

                        <?php
                    }
                    ?>
                </ul>
            </div>

        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>

    <div id="desktop-content">
        desktop
    </div>

    <div id="mobile-content">
        mobile
    </div>