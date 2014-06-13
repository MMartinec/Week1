<?php
// Remember: Setting cookies must be before *any* HTML output
// unless output buffering is turned on. 
	$name = "test";
	$value = "hello";
	$expire = time() + (60*60*24*7); // add seconds
	//setcookie($name, $value, $expire);
	//setcookie($name);
	// for unsetting cookies
	//setcookie($name, null, time() - 3600);
	?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Strings</title>
</head>

<body>
	
<?php	
	$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";
	echo $test;
	
	
	
?>

	
</body>
</html>
