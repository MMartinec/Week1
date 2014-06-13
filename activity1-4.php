<?php
if(isset($_FILES["userfile"]["tmp_name"])){
//	var_dump($_FILES);
	if (($_FILES["userfile"]["type"] == "image/jpg")||($_FILES["userfile"]["type"] == "image/jpeg")){ //now try it, save how to get out of this screen?
		move_uploaded_file($_FILES["userfile"]["tmp_name"], "images/" . $_FILES["userfile"]["name"]);
	}
	else echo "Invalid File Type!!";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Form Processing</title>
	</head>
	<body>

		
		
		<form enctype="multipart/form-data" action="" method="POST">
<!-- Name of input element determines name in $_FILES array -->
Send this file: <input name="userfile" type="file" />
<input type="submit" value="Send File" />
</form>	
	<HR />
	<strong> Files Uploaded till now <br /></strong>
<?php

  foreach (glob("images/*.jpg") as $filename) {
    echo "<img src = '".$filename."' alt = 'image file'>\n";
	}

	foreach (glob("images/*.jpeg") as $filename1) {
    echo "<img src = '".$filename1."' alt = ' image file '>";
	}
   //<img src="url" alt="some_text">
?>
		
		
	</body>
</html>
