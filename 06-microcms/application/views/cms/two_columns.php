<section id="page">
	<div class="row">
		<div class="span8">
			<?php print (isset($content_main)) ? $content_main : ''; ?>
		</div>
		<div class="span4">
			<?php print (isset($content_sidebar)) ? $content_sidebar : ''; ?>
		</div>
	</div>
</section>
