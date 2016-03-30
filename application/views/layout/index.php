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
    echo '<div class="col-sm-3 col-md-2 sidebar">';
    if ($left) echo $left;
    echo '</div>';
}
?>

<?php
if ($this->session->userdata('id')) {
    echo ' <div class="col-sm-10 push-top push-left main_content">';
    if ($middle) echo $middle;
    echo '</div>';
}
else {
    echo ' <div class="col-sm-12 push-top push-left main_content">';
    if ($middle) echo $middle;
    echo '</div>';
}
?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>