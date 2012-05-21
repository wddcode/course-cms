<table class="table table-condensed table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Slug</th>
      <th>Name</th>
      <th class="pull-right">Actions</th>
    </tr>
  </thead>
  
  <tbody>
	
	<?php
	
	$page_html = '';
	foreach($pages as $page)
	{
		$page_html .= '<tr>';
		
		$page_html .= '<td>' . $page->id . '</td>';
		$page_html .= '<td>' . Html::anchor($page->get_absolute_url(), $page->slug) . '</td>';
		$page_html .= '<td>' . $page->name . '</td>';
		
		$page_actions = View::factory('admin/page_list_actions', array('page' => $page));

		$page_html .= '<td>' . $page_actions . '</td>';
		
		
		$page_html .= '</tr>';
	}
	print $page_html;
	
	?>
	
  </tbody>
  
</table>