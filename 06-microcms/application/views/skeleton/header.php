<h1><?php print (isset($title)) ? $title : ''; ?></h1>
<?php if(isset($subtitle)) { ?>
<p class="lead">
	<?php print $subtitle; ?>
</p>
<?php } ?>
