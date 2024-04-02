<?php
$server="localhost";
$user="root";
$pass="";
$database="ali";

$con=mysql_connect($server,$user,$pass);

/*
check is server conected coding
if(!$con)
{
echo "<h1>Server Not Conect</h1>";
}
else
{
echo "<h1>Server Conected</h1>";
}
*/

$db=mysql_select_db($database,$con);

/*
check data Base Conected
if(!$db)
{
echo "<h1>Data base Not Conect</h1>";
}
else
{
echo "<h1>Data base Conected</h1>";
}
*/
?>