<?php
session_start();

if(!isset($_SESSION['done']))
{
header("Location: include1.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<table border="1" border="red" align="center" height="150" width="990">
<tr>
<td align="center">Welcome</td>
</tr>
</table>
</body>
</html>
