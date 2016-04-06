<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Servare - Helping Grow Your Nest</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/new.css" type="text/css" media="screen" charset="uft-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/table.css" type="text/css" media="screen" charset="uft-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen" charset="uft-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" type="text/css" media="screen" charset="uft-8">
</head>
<body>

<?php if ($header) echo $header; ?>

<?php
if ($this->session->userdata('id')) {
    echo '<div class="col-sm-2 col-md-2 sidebar">';
    if ($left) echo $left;
    echo '</div>';
}
?>

<?php
if ($this->session->userdata('id')) {
    echo ' <div class="col-sm-10 push-top main_content">';
    if ($middle) echo $middle;
    echo '</div>';
}
else {
    echo ' <div class="col-sm-12 push-top main_content">';
    if ($middle) echo $middle;
    echo '</div>';
}
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://www.google.com/jsapi"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/main.js"></script>
</body>
</html>