<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $Page_Title; ?></title>
	<meta name="description" content="<?php echo $Page_Meta; ?>">
</head>
<body>

<nav>
	<ul><?php
		// anchor function is from url helper
		// argument 1 is the controller to load
		// argument 2 is the cick text
		?>
		<li><?php echo anchor('home', 'Home'); ?></li>
		<li><?php echo anchor('about', 'About'); ?></li>
		<li><?php echo anchor('registration', 'Registration'); ?></li>
	</ul>
</nav>