<?php
$msg1="";
$msg2="";
if(isset($_POST['submit']))
{
  $x=$_POST["ali"];
  $l=$_POST["link"];
  if(empty($x))
{
$msg1="<div style='color:red; font-weight:bold;'>Please Enter Text</div>";
}
  elseif(empty($l))
{
$msg2="<div style='color:red; font-weight:bold;'>Please Enter Link</div>";
}
}
?>
<html>
<head>
  <title>input</title>
</head>
<body>
  <table align="center">
  <form method="post">
    <tr>
      <td>
    <input type="text" name="ali" placeholder="Type Text in Headings" style="height:50px;width:400px;font-size:20px; margin-bottom:10px;"><?php echo $msg1;?><br>
    <input type="text" name="link" placeholder="Type Text in Link" style="height:50px;width:400px;font-size:20px; margin-bottom:5px;"><?php echo $msg2;?><br>
    <input type="submit" name="submit" style="height:48px;width:70px;">
  </td>
  </form>
</tr>
</table>
<?php
$h1="";
$h2="";
$h3="";
$h4="";
$h5="";
$h6="";
if(isset($_POST['submit']))
{
  $x=$_POST["ali"];
  $l=$_POST["link"];
  if(empty($x))
{
$msg1="<div style='color:red; font-weight:bold;'>Please Enter Text</div>";
}
  elseif(empty($l))
{
$msg2="<div style='color:red; font-weight:bold;'>Please Enter Link</div>";
}
  $a=$_POST["ali"];
  $h1="<h1 style='font-size:80px;'><a href='$l'>" .$a. "</a></h1>";
  $h2="<h2 style='font-size:70px;'><a href='$l'>" .$a. "</a></h2>";
  $h3="<h3 style='font-size:60px;'><a href='$l'>" .$a. "</a></h3>";
  $h4="<h4 style='font-size:50px;'><a href='$l'>" .$a. "</a></h4>";
  $h5="<h5 style='font-size:40px;'><a href='$l'>" .$a. "</a></h5>";
  $h6="<h6 style='font-size:30px;'><a href='$l'>" .$a. "</a></h6>";
  $h7="<h6 style='font-size:20px;'><a href='$l'>" .$a. "</a></h6>";
  $h8="<h6 style='font-size:10px;'><a href='$l'>" .$a. "</a></h6>";

  echo "<br><br>";
  echo "<table border='1' height='1000' width=600' align='center'>";

  echo "<tr><td align='center'>" .$h1. "</td></tr>";
  echo "<tr><td align='center'>" .$h2. "</td></tr>";
  echo "<tr><td align='center'>" .$h3. "</td></tr>";
  echo "<tr><td align='center'>" .$h4. "</td></tr>";
  echo "<tr><td align='center'>" .$h5. "</td></tr>";
  echo "<tr><td align='center'>" .$h6. "</td></tr>";
  echo "<tr><td align='center'>" .$h7. "</td></tr>";
  echo "<tr><td align='center'>" .$h8. "</td></tr>";

setcookie("oc",$a,time()+366600);
setcookie("ob",$l,time()+366600);
  echo "</table>";
}
elseif(isset($_COOKIE["oc"]))
{
$c=$_COOKIE["oc"];
$b=$_COOKIE["ob"];
  $h1="<h1 style='font-size:80px;'><a href='$b'>" .$c. "</a></h1>";
  $h2="<h2 style='font-size:70px;'><a href='$b'>" .$c. "</a></h2>";
  $h3="<h3 style='font-size:60px;'><a href='$b'>" .$c. "</a></h3>";
  $h4="<h4 style='font-size:50px;'><a href='$b'>" .$c. "</a></h4>";
  $h5="<h5 style='font-size:40px;'><a href='$b'>" .$c. "</a></h5>";
  $h6="<h6 style='font-size:30px;'><a href='$b'>" .$c. "</a></h6>";
  $h7="<h6 style='font-size:20px;'><a href='$b'>" .$c. "</a></h6>";
  $h8="<h6 style='font-size:10px;'><a href='$b'>" .$c. "</a></h6>";

  echo "<br><br>";
  echo "<table border='1' height='1000' width=600' align='center'>";
  echo "<tr><td align='center'>You Open it Last Time.</td></tr>";
  echo "<tr><td align='center'>" .$h1. "</td></tr>";
  echo "<tr><td align='center'>" .$h2. "</td></tr>";
  echo "<tr><td align='center'>" .$h3. "</td></tr>";
  echo "<tr><td align='center'>" .$h4. "</td></tr>";
  echo "<tr><td align='center'>" .$h5. "</td></tr>";
  echo "<tr><td align='center'>" .$h6. "</td></tr>";
  echo "<tr><td align='center'>" .$h7. "</td></tr>";
  echo "<tr><td align='center'>" .$h8. "</td></tr>";


  echo "</table>";
}
else
{
echo "<br><br>";
echo "<table border='1' height='1000' width=600' align='center'>";
echo "<tr>";
echo "<td>";
echo "<h1 align='center'>Output Area</h1>";
echo "<h2 align='center'>instructions</h2>";
echo "<p align='center'>Type Text You Type on The Output Area</p><br>";
echo "<p align='center'>Click on The submit Button And Get Preview</p>";
echo "</td>";
echo "</tr>";
echo "</table>";
}
 ?>
<?php
if(isset($_COOKIE['Muhammad-count']))
{
$name="Muhammad-count";
$content=$_COOKIE['Muhammad-count']+1;
$expiry=time()+(1000000*10);
setcookie($name,$content,$expiry);
$x=$_COOKIE[$name];
}
else
{
$name="Muhammad-count";
$content=1;
$expiry=time()+(1000000*10);
setcookie($name,$content,$expiry);
$x=$_COOKIE[$name];
}
?>
<table border="1">
<tr>
<td><h3>You view This website:</h3></td>
<td><h3><?php echo $x;?></h3></td>
</tr>
</table>
  </html>
</body>
