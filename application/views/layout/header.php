<nav class="navbar navbar-inverse-light-grey navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
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


            <ul class="nav navbar-nav navbar-right">
                <?php
                if ($this->session->userdata('id')) { ?>
                    <li><?php echo anchor('login/logout', 'Logout'); ?></li>
                    <?php
                }

                else { ?>
                <li><?php echo anchor('login', 'Login'); ?></li>
                <li><?php echo anchor('login/signup', 'Sign up'); ?></li>
                <?php
                }
                ?>
        </div>
 
</nav>