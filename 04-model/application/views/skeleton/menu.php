          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/">CMS</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              
              <?php 
	              if(isset($navigation))
				  {
				  	$html = '';
				  	foreach($navigation as $node)
					{
						if($node->active)
						{
							$html .= '<li class="active">';
						} else {
							$html .= '<li>';	
						}
						$html .= Html::anchor($node->url, $node->name);
						$html .= '</li>';
					}
					print $html;
					unset($html);
					
				  } 
              ?>
              
              <li class="divider-vertical"></li>              
            </ul>
            
            
          </div>
          
