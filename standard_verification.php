<?php
if($_POST){session_start();
if($_SESSION['captcha']==$_POST['captcha']) echo 'Captcha verification successful';
else echo 'Captcha verification failed';
session_destroy();
exit(0);}?>
<HTML>
<HEAD>
<meta charset="utf-8" />
<TITLE>Captcha Verification v1.0</TITLE>
</HEAD>
<BODY>
<form action="" method="post">
<table border="0">
<tr><td>Name:</td><td><input type="text" name="name" required></td>
</tr>
<tr><td>Surname:</td><td><input type="text" name="surname" required></td>
</tr>
<tr><td>Captcha:</td><td><img src="./dist/standard.php"><input style="margin-top:0px;width:75px;position:absolute;" type="text" name="captcha" required></td>
</tr>
<tr><td></td><td><input style="float:right;" type="submit" value="Send"></td></tr>
</table>
</form>
</BODY>
</HTML>