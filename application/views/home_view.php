<!--<div id="desktop-content">-->
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Servare</h1>

            <div id="desktop-content">
                <span>Tool to help you save</span>
                <p>here i will write about the product. will hide this if already a member and show alternative. this
                    can only be viewd on desktop</p>
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
    </div>

<!-- Example row of columns -->
<div class="row">
    <div class="col-lg-4">
        <h2>Safari bug warning!</h2>
        <p class="text-danger">As of v8.0, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.</p>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-lg-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-lg-4">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
        <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
    </div>
</div>
<!--</div>-->

<!--<div id="mobile-content">-->
<!--    mobile view text-->
<!--</div>-->