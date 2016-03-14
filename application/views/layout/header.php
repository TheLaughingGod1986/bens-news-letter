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
                <li><?php echo anchor('member_pages/logged_in_area', 'Profile'); ?></li>
                <li><?php echo anchor('login/logout', 'Logout'); ?></li>
            </ul>
        </div>
    </div>
</nav>