<?php
echo '<p align="right"><a href="addmorepagesandtag.php">Add More Page</a></p>';


echo '
<br>
<br>
<br>
<br>
<center>
<span style="color:blue;font-size:80px;font-weight:bold;">G</span>
<span style="color:red;font-size:80px;font-weight:bold;">o</span>
<span style="color:orange;font-size:80px;font-weight:bold;">o</span>
<span style="color:blue;font-size:80px;font-weight:bold;">g</span>
<span style="color:green;font-size:80px;font-weight:bold;">l</span>
<span style="color:red;font-size:80px;font-weight:bold;">e</span>
<br>
</center>
';


echo '<form method="post" action="">';


echo '<center><input type="text" name="searchbox" placeholder="This Google is Created By Muhammad Ali" style="width:500px;height:40px;font-size:20px;"></input></center>';

echo '
<br>
<center>
<input type="submit" value="Google" name="submit" style="width:150px;height:40px;"></input>

<input type="submit" value="I,m Feeling Lucky" name="submit" style="width:150px;height:40px;"></input>
</center>
';
echo '</form>';




if(isset($_POST['submit']))
{
$text=$_POST["searchbox"];;
	if($text=="")
	{

	}
else
{
mysql_connect("localhost","root","");
mysql_select_db("search") or die("couldn't connect to db.");



$rollnoit=$_POST["searchbox"];


$sql = "SELECT Title,Detail,link FROM articles WHERE Title='$rollnoit' ORDER BY id DESC LIMIT 1 " ;
$data = mysql_query($sql);
echo '<table align="" width="100%">';
while($row = mysql_fetch_array($data, MYSQL_NUM))
{  
$title=$row[0];
$detail=$row[1];
$link=$row[2];
echo '<tr>';
echo '<td><a href="'.$row[2].'"><font size="6" color="blue">'.$title.' Detail</a></font></td></tr><tr>';

echo '<td><font color="green">'.$row[1].'</td></tr><tr>';
}

echo '<td><a href="'.$link.'" style="color:blue;">Click here there is about'.$row[1].' Detail</a></td>';

echo '</tr>';

echo '<tr><td><hr></td></tr>';
};
echo '</table>';
}
?>