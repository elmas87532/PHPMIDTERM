<?php


echo <<<_END
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Web HW 2</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<body>
<form action="log.php" method="post">
	帳號：<input type="text" name="u_id" size="24" maxlength="16" onkeyup="value=value.replace(/[\W]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"><br/>
	密碼：<input type="password" name="u_pw" size="24" maxlength="16" onkeyup="value=value.replace(/[\W]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"><br/>
	姓名：<input type="text" name="u_name" size="24" />
	e-mail：<input type="text" name="u_mail" size="24" /><br/>
	電話：<input type="text" name="u_phone" size="24" maxlength="10" onkeyup="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"><br/>
	<input type="hidden" name="reg" value="yes" />
	<input type="submit" value="送出" />
</form>
</body>
</html>

_END;

?>