<?php
$msg0='';
$msg1='';
$msg2='';
$msg3='';
$msg4='';
$msg5='';
$msg6='';

$firstname='';
$lastname='';
$email='';
$password='';
$cpassword='';
$suggestion='';

if(isset($_POST['submit']))
{
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['pass'];
$cpassword=$_POST['cpass'];
$suggestion=$_POST['suggestion'];
}

if(empty($firstname))
{
$msg1="<div class='error'>Please Enter Your First Name</div>";
}
elseif(empty($lastname))
{
$msg2="<div class='error'>Please Enter Your Last Name</div>";
}
elseif(empty($email))
{
$msg3="<div class='error'>Please Enter Your Email</div>";
}
elseif(empty($password))
{
$msg4="<div class='error'>Please Enter Your Password</div>";
}
elseif(empty($cpassword))
{
$msg5="<div class='error'>Please Enter Confirm Password</div>";
}
elseif(empty($suggestion))
{
$msg6="<div class='error'>Please Enter Your Suggestion</div>";
}
elseif($password!=$cpassword)
{
$msg5="<div class='error'>Password Not Match</div>";
}


else
{
$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con, "alimalik_signup");
if($db)
{
$sql="INSERT INTO formdata(firstname,lastname,email,password,suggestion)VALUES('$firstname','$lastname','$email','$password','$suggestion')";

$result = $con->query($sql);
if($result)
{
$msg0="<div class='sucess'>Sucessfuly Registerd</div>";
}
else
{
$msg0="<div class='error'>".$con->error."</div>";
}

}

}
?>



<html>
<head>
<title>ali</title>
<style>
.error
{
color:red;
}
.sucess
{
color:green;
font-weight:bold;
font-size:20px;
}
</style>
</head>
<body>
<center><h1>Sign up Form<?php echo $msg0."<br>";?></h1></center>

<form method="post" name="signup">
<table align="center">
<tr>
<td>First Name:</td>
<td><input type="text" name="fname" placeholder="First Name" value="<?php echo $firstname;?>" size="40"><?php echo $msg1; ?></td>
</tr>

<tr>
<td>Last Name:</td>
<td><input type="text" name="lname" placeholder="Last Name" value="<?php echo $lastname;?>" size="40"><?php echo $msg2; ?></td>
</tr>

<tr>
<td>Email Id:</td>
<td><input type="email" name="email" placeholder="example@gmail.com" value="<?php echo $email;?>" size="40"><?php echo $msg3; ?></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" name="pass" placeholder="Password" value="<?php echo $password;?>" size="40"><?php echo $msg4; ?></td>
</tr>

<tr>
<td>Confirm Password:</td>
<td><input type="password" name="cpass" placeholder="Re-Enter Password" value="<?php echo $cpassword;?>" size="40" size="40"><?php echo $msg5; ?></td>
</tr>


<tr>
<td>Suggestion:</td>
<td><textarea value="<?php echo $suggestion;?>" name="suggestion" rows="10" cols="42"></textarea><?php echo $msg6; ?></td>
</tr>

<tr>
<td colspan="2" align="right"><input type="submit" name="submit"></td>
</tr>

</table>
</form>
</body>
</html>
