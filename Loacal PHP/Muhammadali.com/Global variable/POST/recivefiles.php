<!DOCTYPE>
<head>
<title>Untitled Document</title>
<script>
/*

Globbal Variable

GET
POST
FILES
SESSION
*/
</script>
<?php
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

echo "Confirm Password: ";
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
$name=$_FILES["up"]["name"];
echo $name;
echo "<br>";

echo "Upload File Type: ";
$type=$_FILES["up"]["type"];
echo $type;
echo "<br>";

echo "Upload File size: ";
$size=$_FILES["up"]["size"] /1024;
echo $size;
echo "<br>";

echo "Upload File Path: ";
$path=$_FILES["up"]["tmp_name"];
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
?>
</head>
<body>
</body>
</html>