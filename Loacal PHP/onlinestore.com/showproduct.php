<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Show Product Page</title>
</head>

<body>
<h1>Product Page is Opened</h1>
<?php
$id=$_REQUEST['id'];
$ptitle=$_REQUEST['ptitle'];
$pprice=$_REQUEST['pprice'];
$q=$_REQUEST['q'];
$image=$_REQUEST['image'];

if(isset($_COOKIE['newc'.$id]))
{
		$q=$_COOKIE['newcqty'.$id];
		$q++;
		setcookie("newcqty$id",$q,time()+3600);
}
else
{
setcookie("newc$id",$id,time()+3600);
setcookie("newctitle$id",$ptitle,time()+3600);
setcookie("newcprice$id",$pprice,time()+3600);
setcookie("newcqty$id",$q,time()+3600);
}

echo "<center>";
echo "<img height='200' src='$image'><br>";
echo "Product id:".$id."<br>";
echo "Product Title<b>:".$ptitle."<br></b>";
echo "Product Price:".$pprice."<br>";
echo "Product Qty:".$q."<br>";
echo "<br><center><a href='index.php'>Back To Home<a>
&nbsp;&nbsp;&nbsp;<a href='showbasket.php'>Check Out</a>
</center>";
?>
</body>
</html>
