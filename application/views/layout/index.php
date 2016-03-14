<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>temping</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/new.css" type="text/css" media="screen" charset="uft-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/table.css" type="text/css" media="screen" charset="uft-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen" charset="uft-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" type="text/css" media="screen" charset="uft-8">
</head>
<body>

<!--<div class="col-sm-12 no-padding-left">-->
    <?php if ($header) echo $header; ?>
<!--</div>-->

<?php
if ($this->session->userdata('id')) { ?>
        <div class="col-sm-3 col-md-2 sidebar">
    <?php if ($left) echo $left; ?>
</div>
<?php }?>

<div class="col-sm-9 push-top push-left">
    <?php if ($middle) echo $middle; ?>
</div>

<!--<div class="col-sm-12">-->
<!--    --><?php //if ($footer) echo $footer; ?>
<!--</div>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>