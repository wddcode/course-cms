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
			<ul>
				<li><?= HTML::anchor('/static/index', 'Home'); ?></li>
				<li><?= HTML::anchor('/static/contact/', 'Contact'); ?></li>
			</ul>
		</header>
		<div role="main">
			<p>
				<?= (isset($content)) ? $content : 'no content' ?>
			</p>
		</div>
		<footer>
			<ul>
				<li>Meine Seite</li>
			</ul>
		</footer>
	</body>
</html>