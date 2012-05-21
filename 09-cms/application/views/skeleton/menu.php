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
            
            
            <ul class="nav pull-right">
            	<li class="dropdown">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
			    <ul class="dropdown-menu">

			      
			      <?php
			      	if(!Auth::instance()->logged_in())
					{
						
						print '<li>';
			      		print Html::anchor(Route::get('auth')->uri(
			      			array('action' => 'login',)
						) . '?next=' . Request::current()->uri(), 'Login');
						
						print '</li>';
						
					} else {
						
						print '<li>';
			      		print Html::anchor(Route::get('auth')->uri(
			      			array('action' => 'logout',)
						) . '?next=' . Request::current()->uri(), 'Logout');
						print '</li>';
						
						print '<li class="divider"></li>';
						print '<li class="nav-header">Administration</li>';

						
						print '<li>';
			      		print Html::anchor(Route::get('admin')->uri(
			      			array('action' => 'index',)
						), 'CMS Admin'); 
						print '</li>';

						
						print '<li>';
			      		print Html::anchor(Route::get('admin')->uri(
			      			array('action' => 'edit', 'content_type' => 'page',)
						), 'Edit'); 
						print '</li>';
						
						
					}
					
			      ?>

			    </ul>
			  </li>
            </ul>
            
          </div>
          
