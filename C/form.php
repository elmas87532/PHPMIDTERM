<?php
include 'connect.php';

function getTinyUrl($url) { return file_get_contents("http://tinyurl.com/api-create.php?url=".$url); }

if (isset($_POST['input'])) {
	$url=$_POST['url'];
	$name=$_POST['name'];
	$surl=getTinyUrl($url);
	$click=0;
	date_default_timezone_set("Asia/Taipei");
	$tempDate = date("Y-m-d H:i:s");

	$query="INSERT INTO url(url,name,surl,click,time) VALUES('$url','$name','$surl',$click,'$tempDate')";
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
<form action="form.php" method="post">
名稱：<input type="text" name="name" />
網址：<input type="text" name="url" />
<input type="hidden" name="input" value="yes"/>
<input type="submit" value="送出" />
</form></body></html>

_END;

$query="SELECT * FROM url";
$result=mysqli_query($conn,$query);
echo "<table><tr><th>名稱</th><th>短網址</th></tr>";
while ($row=mysqli_fetch_row($result)) {
	echo "<tr><td>$row[1]</td><td><a href='$row[2]'>$row[2]</a></td></tr>";
}
echo "</table>";

?>