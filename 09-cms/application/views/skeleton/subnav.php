<div class="subnav">
	<ul class="nav nav-pills">
      <?php 
          if(isset($sub_navigation))
		  {
		  	$html = '';
		  	foreach($sub_navigation as $node)
			{
				$html .= '<li>';	
				$html .= Html::anchor('#' . $node->slug, $node->name);
				$html .= '</li>';
			}
			print $html;
			unset($html);
			
		  } 
      ?>
	</ul>
</div>