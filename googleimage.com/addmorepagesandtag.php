<?php
mysql_connect("localhost","root","");
mysql_select_db("search") or die("couldn't connect to db.");

if(isset($_POST['title']))
{
$fname=$_POST['title'];

$image=$_POST['image'];

$lname=$_POST['dis'];

$email=$_POST['link'];

$sql="INSERT INTO articles VALUES (NULL,'$fname','$image','$lname','$email')";

mysql_query($sql);
}

?>
<doctype>
<html>
<head>

<script>
function ali()
{
title=document.forms["valid"]["title"].value
if(title=="")
{
alert("Please Fill Title is Requird")
return false;
}

image=document.forms["valid"]["image"].value
if(image=="")
{
alert("Please Fill image is Requird")
return false;
}

disc=document.forms["valid"]["dis"].value
if(disc=="")
{
alert("Please Fill Title is Requird")
return false;
}
linka=document.forms["valid"]["link"].value
if(linka=="")
{
alert("Please Fill Link is Requird")
return false;
}
}
</script>
</head>
<body>

<br />
<br />
<br />
<br />
<br />

<div style="margin-left:auto; margin-right:auto; border:10px solid black; width:500px; border-radius:px; background-color:skyblue;">

<table width="480" height="400">
<form action="" method="post" name="valid">
<tr>
<td colspan="2"><h2 align="center">Add link page & Title to Submit in dataDase</h2></td>
</tr>

<tr>
<td>Enter Your Page Title</td>
<td><input type="text" name="title" placeholder="Enter Text For Search My Google" style="width:300px; height:40px; font-size:20px;"></td>
</tr>

<tr>
<td>Enter Your Page image Path</td>
<td><input type="text" name="image" placeholder="Enter Text For Search My Google" style="width:300px; height:40px; font-size:20px;"></td>
</tr>

<tr>
<td>Enter Page Discription</td>
<td><textarea name="dis" cols="40" rows="7"></textarea></td>
</tr>

<tr>
<td>Add Page Link with Type</td>
<td><input type="text" name="link" placeholder="Enter Post Name With File Type" style="width:300px; height:40px; font-size:20px;"></td>
</tr>

<tr>
<td colspan="2" align="right"><input type="submit" value="Add Data Base" name="submit" onClick="return(abc())" style="width:150px; height:40px;"></td>
</tr>
</form>
</table>





</div>
<p align="center"><a href="index.php">Back To Search</a></p>
</body>
</html>