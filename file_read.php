<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>File Basics</title>
</head>

<body>
	<?php 
$file = 'filetest.txt';
if($handle = fopen($file, 'r')){ //read
$content = fread($handle, 3); // each character is 1 byte
fclose($handle);

}
echo $content;
echo nl2br($content);
echo "<hr />";
// use filesize() to read the whole file
$file = 'filetest.txt';
if($handle = fopen($file, 'r')) {//read
	$content = fread($handle, filesize($file));
	fclose($handle);

}

echo nl2br($content);
echo "<<hr />";

//file_get_contents(): shortcut for fopen/fread/fclose
//companion to shortcut file_put_contents()
$content = file_get_contents($file);
echo $content;
echo "<hr/>";

//incremental reading
$file = 'filetest.txt';
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
