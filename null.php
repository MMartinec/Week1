<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Null</title>
</head>

<body>
	<?php 
	$var1 = null;
	$var2 = "";

	?><br />
	var1 null? <?php echo is_null($var1); ?><br />
	var2 null? <?php echo is_null($var2); ?><br />
	<br />
	var1 is set? <?php echo isset($var1); ?><br />
	var2 is set? <?php echo isset($var2); ?><br />
	<br />
	var1 empty? <?php echo empty($var1); ?><br />
	var2 empty? <?php echo empty($var2); ?><br />
	<br />

</body>

</body>
</html>
