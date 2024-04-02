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
<form name="c" action="recivefiles.php" action="GET">
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
<option value="pak">select</option>
<option value="pak">pakistan</option>
<option value="pak">india</option>
<option value="pak">japan</option>
<option value="pak">China</option>
<option value="pak">Afghanistan</option>
<option value="pak">Madagascar</option>
<option value="pak">Bangladesh</option>
<option value="pak">Nepal</option>
<option value="pak">Cabo Verde</option>
<option value="pak">Oman</option>
<option value="pak">Palau</option>
<option value="pak">Canada</option>
<option value="pak">Qatar</option>
<option value="pak">Denmark</option>
<option value="pak">Russia</option>
<option value="pak">Ecuador</option>
<option value="pak">San Marino</option>
<option value="pak">Finland</option>
<option value="pak">Gabon</option>
<option value="pak">Turkey</option>
<option value="pak">Amrica</option>
<option value="pak">Iceland</option>
<option value="pak">Uganda</option>
<option value="pak">Japan</option>
<option value="pak">Vanuatu</option>
<option value="pak">Korea</option>
<option value="pak">Württemberg</option>
<option value="pak">Yemen</option>
<option value="pak">Zambia</option>
<option value="pak">Latvia</option>
</select>
</td>
</tr>

<tr>
<td>Upload</td>
<td><input type="file" value="Upload" name="up"><span id="f" style="color:#FF0000"></span></td>
</tr>

<tr>
<td>Comment</td>
<td><textarea cols="33" rows="5" name="comen"></textarea><span id="g" style="color:#FF0000"></span></td>
</tr>

<tr>
<td>Complete</td>
<td><input name="su" type="submit" value="Submit" onclick="ali()"></td>
</tr>
</body>
</html>