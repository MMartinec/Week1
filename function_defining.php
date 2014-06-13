<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>function defining</title>
</head>

<body>
	<?php 
	function say_hello() {
		echo "Hello World!<br />";
	}
	say_hello();

	function say_hello_to($word) {
		echo "Hello {$word}!<br />";

	}
	say_hello_to("World");
	say_hello_to("Everyone");

	say_hello_loudly();

	function say_hello_loudly() {
		echo "Hello WORLD!<br />";

	}

	?>
	
	
</body>
</html>
