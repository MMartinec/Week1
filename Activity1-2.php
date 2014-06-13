<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>activity1-2</title>
</head>

<body>
	<?php 
	$grade = 102.10;
	$a  = 90.00;
	$b = 80.00;
	$c  = 70.00;
	$d  = 60.00;
	$f  = 59.00;

	if ($grade >= $a ) {
		echo "You got an A";

	}elseif ($grade >= $b) {
		echo "You got a B";

	}elseif ($grade >= $c){
		echo "You got a C";

	}elseif ($grade >= $d){
		echo "You got a D";

	}else 
		echo "You got an F";
	


	
	?>
	
</body>
</html>
