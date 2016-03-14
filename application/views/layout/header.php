
<?php
function __construct()
{
parent::__construct();
$this->is_logged_in();
}

function is_logged_in()
{
    $is_logged_in = $this->session->userdata('is_logged_in');

    if (!isset($is_logged_in) || $is_logged_in != true) {
        echo 'lol, try again. this area is secure. MEMBERS ONLY !. please ';
        echo anchor('login/index', 'Login');
        die();
    }
}
?>

<nav class="navbar navbar-inverse-light-grey navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar">1</span>
                <span class="icon-bar">2</span>
                <span class="icon-bar">3</span>
            </button>
<?php
$this->load->helper('url'); // Load URL Helper for base_url()
$this->load->helper('html'); // Load HTML Helper for img()

$img= base_url('img/Servare.png'); // generates text: siteroot/img/servare.png
$path = 'home'; // link to home controller index?>
            <div class="logo-img">
            <?php
echo anchor($path, img($img));
?>
            </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><?php echo anchor('members/members_area', 'Dashboard'); ?></li>
                <li><?php echo anchor('login/logout', 'Logout'); ?></li>
                <li>    <?php

                    if(is_logged_in())

                    {
                        echo "yes";
                    }

                    else
                    {
                        echo "no";
                    }
                    ?></li>
            </ul>
        </div>
    </div>
</nav>