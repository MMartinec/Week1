<?php
// Sessions use cookies which use headers.
// Must start before any HTML output
// unles output buffering is turned on.
 session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sessions</title>
</head>

<body>
<?php
$_SESSION ["first_name"] = "Margaret";
$name = $_SESSION["first_name"];
echo $name;
?>	


	
</body>
</html>
