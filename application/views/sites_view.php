<head>
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen" charset="utf-8">
</head>
<body>

<div id="container">
    <h1>Super pagination</h1>
    <?php echo $this->table->generate($records)?>
    <?php echo $this->pagination->create_links(); ?>
</div>
</body>