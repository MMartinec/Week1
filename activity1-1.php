<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>activity1-1</title>
</head>

<body>
	
	<?php
	$name = "Margaret Martinec";
	$age = 55;
	$person = array("Margaret Martinec", 55);
	
	$person = array ("name" => "Margaret Martinec", "age" => 55);
	?>
	<?php echo $person["name"] . " " . $person["age"]; ?><br />

	<?php $person["name"] = "Margaret Martinec"; ?>
	<?php echo "My name is" . " " . $person["name"] . " " . "my age is" . " " .$person["age"]; ?><br />
	<?php echo "$name" . " " . "$age";?><br />
	<?php echo $name . ' ' . $age;?><br />
	<?php $person [0] = "name"; ?>
	<?php $person [1] = "age"; ?>
	<?php sort($person); print_r($person); ?><br />
	<?php $age = null;?><br />
	<?php echo $age; ?><br />
	age null? <?php echo is_null($age); ?><br />
	<?php unset($person["name"]); ?><br />
	<?php echo "name"; ?>

	


	
	

	 
	

</body>

</body>
</html>
