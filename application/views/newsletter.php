<h3>news letter page loaded</h3>

<div id="newsletter_form">

    <?php echo form_open('email/send'); ?>

    <?php echo form_close(); ?>

    <?php
$name_data = array(
        'name' => 'name',
        'id' => 'name',
        'value' => set_value('name')
    );
?>
    <p><label for="none">Name: </label><?php echo form_input($name_data); ?></p>

    <p><label for="none">Email Address: </label>
        <input type="text" name="email" id="email" value="<?php echo set_value('email');?>">
    </p>

</div>