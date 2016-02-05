<h3>news letter page loaded</h3>
<style type="text/css">
    label {
        display: block
    }
</style>

<div id="newsletter_form">

    <?php echo form_open('email/send'); ?>

    <?php

    $name_data = array(
        'name' => 'name',
        'id' => 'name',
        'value' => set_value('name')
    );

     $email_data = array(
         'name' => 'email',
         'id' => 'email',
         'value' => set_value('email')
     );

    ?>

    <p><label for="name">Name: </label><?php echo form_input($name_data); ?></p>
    <p><label for="name">Email Address: </label><?php echo form_input($email_data); ?></p>
    <p><?php echo form_submit('submit', 'submit'); ?></p>

    <?php echo form_close(); ?>

</div>