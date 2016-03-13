<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar">Dashboard</span>
                <span class="icon-bar">Profile</span>
                <span class="icon-bar">Help</span>
            </button>
<!--            --><?php //echo anchor('home/index'); ?><!--<img class="navbar-brand" border="0" alt="Servare" src="--><?php //echo base_url();?><!--/home/index">-->
           <?php $path = 'home/imdex' .$list['id'];
            $img = '<img src="../home/index" alt="">';
            echo anchor($path, $img); ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </div>
    </div>
</nav>