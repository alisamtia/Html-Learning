<?php
$name="Muhammad-count";
$content="abc";
$expiry=time()+(60*60);
setcookie($name,$content,$expiry);
print_r($_COOKIE);

echo "<br>Cooie value ".$_COOKIE['Muhammad-count']." Here";
?>