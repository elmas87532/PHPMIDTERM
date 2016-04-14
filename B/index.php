<?php

$aresult=0;
$anum1=0;
$anum2=0;
if (isset($_POST['add'])) {
	$anum1=(int)$_POST['num1'];
	$anum2=(int)$_POST['num2'];
	$aresult=$anum1+$anum2;
}

$dresult=0;
$dnum1=0;
$dnum2=0;
if (isset($_POST['dim'])) {
	$dnum1=(int)$_POST['num1'];
	$dnum2=(int)$_POST['num2'];
	$dresult=$dnum1-$dnum2;
}

$c1result=0;
$c1num1=0;
$c1num2=0;
if (isset($_POST['cheng'])) {
	$c1num1=(int)$_POST['num1'];
	$c1num2=(int)$_POST['num2'];
	$c1result=$c1num1*$c1num2;
}

$c2result=0;
$c2num1=0;
$c2num2=0;
if (isset($_POST['chu'])) {
	$c2num1=(int)$_POST['num1'];
	$c2num2=(int)$_POST['num2'];
	$c2result=$c2num1/$c2num2;
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
加法：<input type="text" name="num1" size="8" maxlength="8" onkeyup="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">+
<input type="text" name="num2" size="8" maxlength="8" onkeyup="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
<input type="hidden" name="add" value="add" />
<input type="submit" value="=" />$anum1+$anum2=$aresult
</form>

<form action="index.php" method="post">
減法：<input type="text" name="num1" size="8" maxlength="8" onkeyup="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">-
<input type="text" name="num2" size="8" maxlength="8" onkeyup="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
<input type="hidden" name="dim" value="dim" />
<input type="submit" value="=" />$dnum1-$dnum2=$dresult
</form>

<form action="index.php" method="post">
乘法：<input type="text" name="num1" size="8" maxlength="8" onkeyup="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">*
<input type="text" name="num2" size="8" maxlength="8" onkeyup="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
<input type="hidden" name="cheng" value="cheng" />
<input type="submit" value="=" />$c1num1*$c1num2=$c1result
</form>

<form action="index.php" method="post">
除法：<input type="text" name="num1" size="8" maxlength="8" onkeyup="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">/
<input type="text" name="num2" size="8" maxlength="8" onkeyup="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
<input type="hidden" name="chu" value="chu" />
<input type="submit" value="=" />$c2num1/$c2num2=$c2result
</form>

</body></html>
_END;

?>