<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Arrays</title>
</head>

<body>
<?php 
	$i = 0;
	$colors = array(0,1,2,3,4,5,6,7,8,9);
	$colors[0] = "Red";
	$colors[1] = "Pink";
	$colors[2] = "Blue";
	$colors[3] = "Baby Blue";
	$colors[4] = "Green";
	$colors[5] = "Lime";
	$colors[6] = "Red";
	$colors[7] = "Pink";
	$colors[8] = "Red";
	$colors[9] = "Pink";

for ($i = 0; $i <= count($colors); $i++) {
    echo "Color ". " " . $i .  " " . " is " . $colors[$i];
}
	?>
	<br />
	<?php rsort($colors); print_r($colors); ?><br />
	
</body>
</body>
</html>
