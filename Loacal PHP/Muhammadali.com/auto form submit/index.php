<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
x=10;
function ali()
{
x--
document.getElementById("a").innerHTML=x;
setTimeout("ali()",1000)
if(x==0)
{
++x
document.getElementById("abc").submit();
}
}
</script>
</head>
<body onload="ali()">
<h1 id="a" style="font-size:150px;" align="center">10</h1><br />
<div align="center">
<form action="a.php" id="abc">
<input type="submit" value="Complete Paper" align="center" style="visibility:hidden;">
</form>
</div>
</body>
</html>
