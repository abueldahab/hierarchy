<!DOCTYPE html> 
<html>
<head>
	<title>CI Hierarchy</title>
	<style type="text/css">
		body {
			font: 13px Verdana, sans-serif;
			color: #333;
		}
	</style>
</head>
<body>

<h1>My Menu</h1>
<?php echo hierarchical_ul($menu); ?>

<pre>
<?php print_r($menu); ?>
</pre>

</body>
</html>