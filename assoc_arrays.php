<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Associative Arrays</title>
</head>

<body>
	<?php 
	$assoc = array ("first_name" => "Margaret", "last_name" => "Martinec");
	?>
	<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

	<?php $assoc["first_name"] = "Grit"; ?>
	<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />
</body>
</body>
</html>
