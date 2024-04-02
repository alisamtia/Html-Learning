<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function abc()
{
x=document.forms["e"]["emai"].value
if(x=="")
{
alert("Plese Enter Your Email");
}


p=document.forms["e"]["pass"].value
if(p=="")
{
alert("Plese Enter Your Password");
}

}
</script>
</head>
<body bgcolor="skyblue">
<form name="e">
<table bgcolor="#FFFFFF" border="1" align="center">
<tr>
<td>Email</td>
<td><input name="emai" type="text"></td>
</tr>

<tr>
<td>Password</td>
<td><input name="pass" type="password" name="pass"></td>
</tr>

<tr>
<td>Complete</td>
<td><input type="submit" value="Submit" onclick="abc()"></td>
</tr>
</table>
</form>
</body>
</html>
