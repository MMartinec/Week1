<?php
// Sessions use cookies which use headers.
// Must start before any HTML output
// unles output buffering is turned on.
 session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>set Session</title>
</head>

<body>
<?php
// Sessions use cookies which use headers.
// Must start before any HTML output
// unles output buffering is turned on.
 session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>set Session</title>
</head>

<body>
<?php
//http://localhost:8888/setsession.php?first_name=john&last_name=joe&state=ny
$_SESSION ["first_name"] = $_GET["first_name"];
$_SESSION ["last_name"] = $_GET["last_name"];
$_SESSION ["state"] = $_GET["state"];
$fname = $_SESSION["first_name"];
$lname = $_SESSION["last_name"];
$st = $_SESSION["state"];

echo $fname;
echo $lname;
echo $st;
?>


	
</body>
</html>
