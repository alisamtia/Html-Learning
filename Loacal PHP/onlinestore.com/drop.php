<?php
$pid=$_REQUEST['newpid'];
if($_COOKIE["newcqty$pid"]>1)
{
$q=$_COOKIE["newcqty$pid"]-1;
setcookie("newcqty$pid",$q,time()+3600);
}
else
{
setcookie("newc$pid","",time()-3600);
setcookie("newctitle$pid","",time()-3600);
setcookie("newcprice$pid","",time()-3600);
setcookie("newcqty$pid","",time()-3600);
}
header("Location:showbasket.php")
?>