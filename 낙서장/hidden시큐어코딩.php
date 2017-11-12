<?php
    session_start();
$tokn = md5(uniqid(rand(),true));
$_SSESSION['tokn']=$tokn;
?>
<form action = action.php method="post">
    <input type=hidden name=tokn value="<? echo $tokn?>">
</form>