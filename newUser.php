<?php
// this is uploading the avator image into an image folder I created to hold them

function uploadImg(){

  $time = time();
  if (($_FILES["userfile"]["type"] == "image/png")||($_FILES["userfile"]["type"] == "image/jpg")||($_FILES["userfile"]["type"] == "image/jpeg")){ //now try it, save how to get out of this screen?
    move_uploaded_file($_FILES["userfile"]["tmp_name"], "images/" . $time . "_" . $_FILES["userfile"]["name"]);
  }
  $ret = "images/". $time . "_" . $_FILES["userfile"]["name"];
  return $ret;
}

// this is code to take the form data from the $_POST superglobal and stores them
// into an associative array and returns them when called
function retAr(){
   
// this is code for salting 
  $options = [
    'cost' => 11,
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
  ];


  $ret['Firstname'] = $_POST['firstname'];
  $ret['Lastname'] = $_POST['lastname'];
  $ret['Username'] = $_POST['username'];
  $ret['Password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);//hash password
  $ret['Avatar'] = uploadImg();

  return $ret;
}

$val = retAr();

//------------------------------------------------------------------------
// for loop to echo each value the associative array which is $val. 
echo "<table border = '0'>";
foreach($val as $key => $value) {
    if($key == "Avatar")
        echo "<tr><td>".$key."</td><td><img src = '".$value."'  width = '100' alt = ' image file '></td></tr>";
    else 
      echo "<tr><td>".$key." : </td><td>".$value."</td</tr>";
}
echo "</table>";

//------------------------------------------------------------------------

die();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Form Processing</title>
	</head>
	<body>

		
		<?php
$uploaddir = './uploads/'; //physical path on Apache
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  echo "File is valid, and was successfully uploaded.\n";
} else {
  echo "Possible file upload attack!\n";
}
print_r($_FILES);
?>
<br />
<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    if (file_exists("upload/" . $_FILES["file"]["name"])) {
      echo $_FILES["file"]["name"] . " already exists. ";
    } else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
    }
  }
} else {
  echo "Invalid file";
}
?> 
		

		
		
	</body>
</html>
