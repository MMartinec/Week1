<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>File Basics</title>
</head>

<body>
	<?php 
$file = 'dictionary.txt';
if($handle = fopen($file, 'r')){ //read
$content = fread($handle, 3); // each character is 1 byte
fclose($handle);

}


//incremental reading
$file = 'dictionary.txt';
$content = " ";
if($handle = fopen($file, 'r')) {//read
	while(!feof($handle)) {
$content .= fgets($handle);
}	
fclose($handle);
}
echo $content;
echo "<hr/>";
	?>
</body>
</html>
