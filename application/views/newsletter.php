<h3>news letter page loaded</h3>

<div id="newsletter_form">

    <?php echo form_open('email/send'); ?>

    <?php echo form_close(); ?>

    <?php
$name_data = array(
        'name' => 'name',
        'id' => 'name',
        'value' => set_value('name')

    )

</div>