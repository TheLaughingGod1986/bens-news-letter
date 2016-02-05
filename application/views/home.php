<p>My View</p>

<?php foreach ($row as $r) {
    echo '<h1>' . $r->title . '</h1>';
}
?>

<?php foreach($row as $r) : ?>

<h1><?php echo $r->title; ?></h1>
<div><?php echo $r->contents; ?></div>

<?php endforeach; ?>
