<!-- section snippet -->
<section>
	<?php if(isset($title) OR isset($subtitle)) { ?>
	<div class="page-header">
		<h1><?php print (isset($title)) ? $title : ''; ?><?php print (isset($subtitle)) ? '<small> ' . $subtitle . '</small>' : ''; ?></h1>
	</div>
	<?php } ?>
	
	<div class="row">
		<div class="span12">
			<?php print (isset($content_main)) ? $content_main : ''; ?>
		</div>
	</div>
</section>