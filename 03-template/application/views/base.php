<!DOCTYPE html>
<html lang="en">
	
	<head>
		<?php print (isset($head)) ? $head : ''; ?>
	</head>
	
	<body>
		
		<!-- Navigation -->
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- skeleton/menu -->
					<?php print (isset($menu)) ? $menu : ''; ?>
				</div>
			</div>
		</div>
		
		<div class="container">

			<!-- Top Header -->
			<header>
				<?php print (isset($header)) ? $header : ''; ?>
			</header>
			
			<!-- Inner Content -->
			<section>
				<?php print (isset($inner)) ? $inner : ''; ?>
			</section>
			
			<!-- Footer -->
			<footer class="footer">
				<?php print (isset($footer)) ? $footer : ''; ?>
			</footer>
		</div>
	</body>
	
</html>