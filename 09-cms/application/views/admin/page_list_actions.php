<div class="btn-group pull-right">
	
		<?php
		
		$url = $page->get_absolute_url('edit');
		$text = '<i class="icon-pencil icon-white"></i> Edit';
		$attr = array('class' => 'btn btn-primary btn-mini');
		print HTML::anchor($url, $text, $attr);
		
		$url = $page->get_absolute_url('delete');
		$text = '<i class="icon-trash icon-white"></i> Delete';
		$attr = array('class' => 'btn btn-danger btn-mini');
		print HTML::anchor($url, $text, $attr);
			
		?>

</div>