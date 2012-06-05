<h1><?= (isset($dummy->title)) ? $dummy->title : '' ?></h1>
<h2><?= (isset($dummy->sub_title)) ? $dummy->sub_title : '' ?></h2>

<p><?= (isset($dummy->content)) ? $dummy->content : '' ?></p>

<p>
	<ul>
	<?php
		foreach($links as $link)
		{
			print '<li>';
			print Html::anchor($link->get_absolute_url(), $link->title); 
			print '</li>';
		}
	?>
	</ul>
</p>