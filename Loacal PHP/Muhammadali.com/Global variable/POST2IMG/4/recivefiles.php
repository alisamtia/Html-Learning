<?php
/*

Globbal Variable

GET
POST
FILES
SESSION
*/

echo "First Name: ";
$firstname=$_POST["fn"];
echo $firstname;
echo "<br>";

echo "Last Name: ";
$lastname=$_POST["ln"];
echo $lastname;
echo "<br>";


echo "Email: ";
$email=$_POST["e"];
echo $email;
echo "<br>";


echo "Password: ";
$password=$_POST["p"];
echo $password;
echo "<br>";


echo "Gender: ";
$gender=$_POST["ge"];
echo $gender;
echo "<br>";


echo "Hobie 1: ";
$hobie1=$_POST["ch"];
echo $hobie1;
echo "<br>";

echo "Hobie 2: ";
$hobie2=$_POST["ch1"];
echo $hobie2;
echo "<br>";

echo "Upload File Name: ";
$name=$_FILES["upload"]["name"];
echo $name;
echo "<br>";

echo "Upload File Type: ";
$type=$_FILES["upload"]["type"];
echo $type;
echo "<br>";

echo "Upload File size: ";
$size=$_FILES["upload"]["size"] /1024;
echo $size;
echo "<br>";

echo "Upload File Path: ";
$path=$_FILES["upload"]["tmp_name"];
echo $path;
echo "<br>";

echo "Country: ";
$coun=$_POST["cou"];
echo $coun;
echo "<br>";

echo "Comment: ";
$comen=$_POST["comen"];
echo $comen;
echo "<br>";

if ($_FILES["upload"]["error"] > 0)
  {
  echo "ERROR: " . $_FILES["upload"]["error"] . "<br>"; 
  }
else
  {
  $name=$_FILES["upload"]["name"];
  $type=$_FILES["upload"]["type"];
  $size=$_FILES["upload"]["size"] /1024;
  $path=$_FILES["upload"]["tmp_name"];
  /*
  space ki gaga koi our simbol
  $name=preg_replace("/\s+/",".",$name);
*/
  $picname=pathinfo($name, PATHINFO_FILENAME);
  $picext=pathinfo($name, PATHINFO_EXTENSION);
  $mix=$picname . date(YmjHis) . "."  .$picext;
  if($size<10500)
  {	
move_uploaded_file($path, "file/" . $mix);
}
}
?>