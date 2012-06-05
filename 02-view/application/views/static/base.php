<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php print (isset($title) ? $title : '; ') ?></title>
		<meta name="description" content="home">
		<meta name="author" content="me">
		<meta name="viewport" content="width=device-width">
	</head>
	<body>
		<header>
			<h1><?php print (isset($title) ? $title : ''); ?></h1>
			<?= (isset($navigation)) ? $navigation : 'no navigation' ?>
		</header>
		<div role="main">
			<?= (isset($content)) ? $content : 'no content' ?>
		</div>
		<footer>
			<?= (isset($footer)) ? $footer : 'no footer' ?>
		</footer>
	</body>
</html>