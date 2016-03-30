<!--<nav class="navbar navbar-inverse-light-grey navbar-fixed-top">-->
<!--    <div class="container-fluid">-->
<!--        <div class="navbar-header">-->
<!--            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"-->
<!--                    aria-expanded="false" aria-controls="navbar">-->
<!--                <ul class="nav navbar-nav navbar-right">-->
<!--                <li>--><?php //echo anchor('members', 'Your Dashboard'); ?><!--</li>-->
<!--                <li>--><?php //echo anchor('profile', 'Account Overview'); ?><!--</li>-->
<!--                <li>--><?php //echo anchor('banks', 'Add Regular Savings'); ?><!--</li>-->
<!--                <li><a href="#">Notification Accounts<br>(coming soon)</a></li>-->
<!--                <li><a href="#">Fixed rate Bonds<br>(coming soon)</a></li>-->
<!--                    </ul>-->
<!--            </button>-->
<!--            --><?php
//            $this->load->helper('html'); // Load HTML Helper for img()
//            $img = base_url('img/Servare.png'); // generates text: siteroot/img/servare.png
//            $path = 'home'; // link to home controller index
//            ?>
<!--            <div class="logo-img">-->
<!--                --><?php
//                echo anchor($path, img($img));
//                ?>
<!--            </div>-->
<!--        </div>-->
<!--        <div id="navbar" class="navbar-collapse collapse">-->
<!--            <ul class="nav navbar-nav navbar-right">-->
<!--                --><?php
//                if ($this->session->userdata('id')) { ?>
<!--                    <li>--><?php //echo anchor('login/logout', 'Logout'); ?><!--</li>-->
<!--                    --><?php
//                }
//
//                else { ?>
<!--                <li>--><?php //echo anchor('login', 'Login'); ?><!--</li>-->
<!--                <li>--><?php //echo anchor('login/signup', 'Sign up'); ?><!--</li>-->
<!--                --><?php
//                }
//                ?>
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->

    <nav class="navbar navbar-inverse-light-grey navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><?php echo anchor('members', 'Your Dashboard'); ?></li>
                    <li><?php echo anchor('profile', 'Account Overview'); ?></li>
                    <li><?php echo anchor('banks', 'Add Regular Savings'); ?></li>
                    <li><a href="#">Notification Accounts<br>(coming soon)</a></li>
                    <li><a href="#">Fixed rate Bonds<br>(coming soon)</a></li>
                </ul>
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
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li <a href="#">Home</a></li>
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
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
                <li><a href="../navbar-static-top/">Static top</a></li>
                <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>