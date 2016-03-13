<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar">Dashboard</span>
                <span class="icon-bar">Profile</span>
                <span class="icon-bar">Help</span>
            </button>

            <?php $path = 'home/imdex';
            $img = '<img src="img/servare.png" alt="">';
            echo anchor($path, $img);
            ?>

        </div>

    </div>
</nav>