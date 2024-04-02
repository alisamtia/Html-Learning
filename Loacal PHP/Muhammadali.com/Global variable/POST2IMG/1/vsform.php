<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function ali()
{
fna=document.forms["c"]["fn"].value
if(fna=="")
{
document.getElementById("a").innerHTML="*Required"
}
lna=document.forms["c"]["ln"].value
if(lna=="")
{
document.getElementById("b").innerHTML="*Required"
}
em=document.forms["c"]["e"].value
if(em=="")
{
document.getElementById("c").innerHTML="*Required"
}
pa=document.forms["c"]["p"].value
if(pa=="")
{
document.getElementById("d").innerHTML="*Required"
}
cpa=document.forms["c"]["cp"].value
if(cpa=="")
{
document.getElementById("e").innerHTML="*Required"
}
if(pa!==cpa)
{
document.getElementById("e").innerHTML="* Password Not Match"
}
upload=document.forms["c"]["up"].value
if(upload=="")
{
document.getElementById("f").innerHTML="*Required"
}
comment=document.forms["c"]["comen"].value
if(comment=="")
{
document.getElementById("g").innerHTML="*Required"
}
gen=document.forms["c"]["ge"].value
if(gen=="")
{
document.getElementById("gend").innerHTML="*Required"
}
}
</script>
</head>
<body bgcolor="#FFFF00">
<form name="c" action="recivefiles.php" method="post" enctype="multipart/form-data">
<table border="1" bgcolor="skyblue" align="center">
<tr>
<td>First Name</td>
<td><input name="fn" type="text" placeholder="Enter Your First Name" size="35" maxlength="4"><span id="a" style="color:#FF0000"></span></td>
</tr>

<tr>
<td>Last Name</td>
<td><input name="ln" type="text" placeholder="Enter Your Last Name" size="35" maxlength="5"><span id="b" style="color:#FF0000"></span></td>
</tr>

<tr>
<td>Enter Email</td>
<td><input name="e" type="email" placeholder="Enter Your Email Adress" size="35"><span id="c" style="color:#FF0000"></span></td>
</tr>

<tr>
<td>Password</td>
<td><input name="p" type="password" placeholder="Enter Your Password" size="35" minlength="8"><span id="d" style="color:#FF0000"></span></td>
</tr>

<tr>
<td>Confirm Password</td>
<td><input name="cp" type="password" placeholder="Enter Your Confirm Password" size="35"><span id="e" style="color:#FF0000"></span></td>
</tr>


<tr>
<td>Gender</td>
<td><input type="radio" name="ge" value="Male">Male
<input type="radio" name="ge" value="Female">Female<span id="gend" style="color:#FF0000"></span></td>
</tr>

<tr>
<td>Hoby</td>
<td><input name="ch" type="checkbox" value="Circket" size="35">Circket
<input name="ch1" type="checkbox" value="Hockey" size="35">Hockey</td>
</tr>

<tr>
<td>Select Country</td>
<td>
<select name="cou">
<option value="Select">select</option>
<option value="pakistan">pakistan</option>
<option value="india">india</option>
<option value="japan">japan</option>
<option value="China">China</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Madagascar">Madagascar</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Nepal">Nepal</option>
<option value="Cabo Verde">Cabo Verde</option>
<option value="Oman">Oman</option>
<option value="Palau">Palau</option>
<option value="Canada">Canada</option>
<option value="Qatar">Qatar</option>
<option value="Denmark">Denmark</option>
<option value="Russia">Russia</option>
<option value="Ecuador">Ecuador</option>
<option value="San Marino">San Marino</option>
<option value="Finland">Finland</option>
<option value="Gabon">Gabon</option>
<option value="Turkey">Turkey</option>
<option value="Amrica">Amrica</option>
<option value="Iceland">Iceland</option>
<option value="Uganda">Uganda</option>
<option value="Japan">Japan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Korea">Korea</option>
<option value="Württemberg">Württemberg</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Latvia">Latvia</option>
</select>
</td>
</tr>

<tr>
<td>Upload</td>
<td><input type="file" value="Upload" name="upload"><span id="f" style="color:#FF0000"></span></td>
</tr>

<tr>
<td>Comment</td>
<td><textarea cols="33" rows="5" name="comen"></textarea><span id="g" style="color:#FF0000"></span></td>
</tr>

<tr>
<td>Complete</td>
<td><input name="su" type="submit" value="Submit" onclick="ali()"></td>
</tr>
</form>
</body>
</html>