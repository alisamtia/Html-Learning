<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Check Out Page</title>
</head>
<body>
<h1 align="center">Show Basket is..</h1>
<table align="center" width="80%" border="1" bordercolor="red">
<tr>
<th> Serial No </th>
<th> Product id </th>
<th> Product Title </th>
<th> Product Qty </th>
<th> Product Price </th>
<th> Total Bill </th>
<th> Drop </th>
</tr>
</body>
</html>

<?php
$x=100;
$total=0;
for($i=1; $i<=12; $i++)
{
if(isset($_COOKIE["newc$i"]))
{
echo "<tr>";
echo "<td align='center'>" . $x++ . "</td>";

echo "<td align='center'>". $_COOKIE["newc$i"] ."</td>";

echo "<td align='center'>". $_COOKIE["newctitle$i"] ."</td>";
echo "<td align='center'>". $_COOKIE["newcqty$i"] ."</td>";
echo "<td align='center'>". $_COOKIE["newcprice$i"] ."</td>";
$product_price=$_COOKIE["newcqty$i"] * $_COOKIE["newcprice$i"];
$total=$product_price + $total;
echo "<td align='center'> $". $product_price ."</td>";
$delqty=$_COOKIE["newc$i"];
echo "<td align='center'><a href='drop.php?newpid=$delqty'>Drop qty 1</a></td>";
echo "</tr>";
}
}
?>
<tr>
<td>Final Bill</td>
<td colspan="6" align="center"><b><font size="4">$ <?php echo $total;?></font></b></td>
</tr>
</table>
<a href="index.php">More Shopping</a>