<?php
if(isset($_COOKIE['Muhammad-count']))
{
$name="Muhammad-count";
$content=$_COOKIE['Muhammad-count']+1;
$expiry=time()+(60*60);
setcookie($name,$content,$expiry);
echo $_COOKIE['Muhammad-count'];
}
else
{
$name="Muhammad-count";
$content=1;
$expiry=time()+(60*60);
setcookie($name,$content,$expiry);
}
?>