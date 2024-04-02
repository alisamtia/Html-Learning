<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function abc()
{
course=document.forms["c"]["course"].value
if(course=="it Basic")
{
document.getElementById("abc").action="it.php";
}
if(course=="Graphic Designing")
{
document.getElementById("abc").action="graphic.php";
}

if(course=="Web Designing")
{
document.getElementById("abc").action="web.php";
}


}
</script>
</head>
<body>
<form action="" name="c" id="abc" method="post">
<select name="course">
<option name="it">it Basic</option>
<option name="graphic">Graphic Designing</option>
<option name="web">Web Designing</option>
</select>
<input type="submit" value="Complete Paper" onclick="abc()">
</form>
</body>
</html>
