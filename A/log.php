<?php

include 'connect.php';

if(isset($_POST['reg'])){
	$u_id=$_POST['u_id'];
	$u_pw=$_POST['u_pw'];
	$u_name=$_POST['u_name'];
	$u_mail=$_POST['u_mail'];
	$u_phone=$_POST['u_phone'];

	$query="INSERT INTO user(u_id,u_pw,u_name,u_mail,u_phone,u_cntlogin,u_lastlogin) VALUES('$u_id','$u_pw','$u_name','$u_mail','$u_phone',0,'')";
	//echo $query;
	mysqli_query($conn,$query);
}




echo <<<_END
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Web HW 2</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<body>
<form action="index.php" method="post">
	帳號：<input type="text" name="u_id" size="24" maxlength="16" onkeyup="value=value.replace(/[\W]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"><br/>
	密碼：<input type="password" name="u_pw" size="24" maxlength="16" onkeyup="value=value.replace(/[\W]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"><br/>
	<input type="hidden" name="login" value="login" />
	<input type="submit" value="送出" />
</form>
</body>
</html>

_END;

?>