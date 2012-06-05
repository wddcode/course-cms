          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="nav-collapse collapse">
            <ul class="nav">
              
              <?php 
	              if(isset($nodes))
				  {
				  	$html = '';
				  	foreach($nodes as $node)
					{
						if(isset($node['active']) AND $node['active'])
						{
							$html .= '<li class="active">';
						} else {
							$html .= '<li>';	
						}
						$html .= Html::anchor($node['url'], $node['title']);
						$html .= '</li>';
					}
					print $html;
					unset($html);
				  } 
              ?>
              
              <li class="divider-vertical"></li>              
            </ul>
            
            
            <ul class="nav pull-right">
            	<li class="dropdown">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
			    <ul class="dropdown-menu">
			      <?php
						print '<li>';
			      		print Html::anchor('auth/login', 'Login');
						print '</li>';
						
						print '<li>';
			      		print Html::anchor('auth/logout', 'Logout');
						print '</li>';
			      ?>

			    </ul>
			  </li>
            </ul>
            
            
          </div>
          
