<!DOCTYPE html>
<html>
<head>
    <title>something</title>
</head>
<body>

<h2>create</h2>
<?php echo form_open('site/create');?>
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

</body>
</html>
