<p>My View</p>
<pre>
    <?php print_r($records); ?>

</pre>
<?php foreach($records as $row) : ?>
    <h1><?php echo $row->title; ?>></h1>

<?php endforeach; ?>