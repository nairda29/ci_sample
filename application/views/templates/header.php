<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>CodeIgniter Tutorial</title>
</head>
<body>

	<h1><?php echo $title; ?></h1>
	<?php 
                // echo anchor('news/create','Create News');
                // echo anchor('news','News');
	$list = array( anchor('news/create','Create news'),
		anchor('news','News'));
	echo ul($list);
	?>