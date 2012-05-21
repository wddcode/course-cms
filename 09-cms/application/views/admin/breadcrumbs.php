<div class="subnav">
	<ul class="nav nav-pills">
		<?php foreach($pages as $c => $page) { ?>
		<li>
			<?php echo HTML::anchor($page['url'], $page['title']); ?>

		</li>
		<?php } ?>
	</ul>
</div>