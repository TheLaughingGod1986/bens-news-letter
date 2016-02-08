<!DOCTYPE html>
<html>
<head>
    <title>something</title>
</head>
<body>

<h2>create</h2>
<?php echo form_open('sites/create');?>
<p>
    <label for="title"> Title</label>
    <input type="text " name="title" id="title"/>
</p>
<p>
    <label for="content"> Content</label>
    <input type="text " name="content" id="content"/>
</p>
<p>
    <input type="submit" value="submit" />
</p>
<?php echo form_close();?>


<h2>read</h2>

<?php if(isset($records)) : foreach($records as $row) : ?>

<h2><?php echo $row->$title; ?></h2>
<div><?php echo $row->$content; ?></div>

<?php endforeach; ?>

<?php else : ?>
<h2>no records</h2>
<?php endif; ?>

</body>
</html>
