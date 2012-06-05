<div id="myCarousel" class="carousel slide">
	<div class="carousel-inner">
		
		<?php
		if(isset($slides))
		{
			$html = '';
			$i = 0;
			foreach($slides as $slide)
			{
				if($i === 0)
				{
					$html .= '<div class="item active">';
				} else {
					$html .= '<div class="item">';
				}
				$html .= Html::image($slide->url);
				$html .= '</div>';
				$i++;
			}
			print $html;
		}
		
		
		?>

	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>