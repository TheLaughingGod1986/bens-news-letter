<div id="container">
    <h1>Super pagination</h1>
    <?php echo $this->table->generate($records)?>
    <?php echo $this->pagination->create_links(); ?>
</div>