<?php
include 'connect.php';
session_start();

if (isset($_SESSION['u_id'])) {

	$u_id=$_SESSION['u_id'];

	if(isset($_POST['update'])){
		$tu_id=$_POST['u_id'];
		$u_pw=$_POST['u_pw'];
		$u_name=$_POST['u_name'];
		$u_mail=$_POST['u_mail'];
		$u_phone=$_POST['u_phone'];
		$query="UPDATE user SET u_id='$tu_id',u_pw='$u_pw',u_name='$u_name',u_mail='$u_mail',u_phone='$u_phone' WHERE u_id='$u_id'";
		//echo $query;
		mysqli_query($conn,$query);
	}

	
	$query="SELECT * FROM user WHERE u_id='$u_id'";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_row($result);
	$u_id=$row[0];
	$u_pw=$row[1];
	$u_name=$row[2];
	$u_mail=$row[3];
	$u_phone=$row[4];


	echo <<<_END
	<form action="profile.php" method="post">
	帳號：<input type="text" name="u_id" value="$u_id" size="24" maxlength="16" onkeyup="value=value.replace(/[\W]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"><br/>
	密碼：<input type="text" name="u_pw" value="$u_pw" size="24" maxlength="16" onkeyup="value=value.replace(/[\W]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"><br/>
	姓名：<input type="text" name="u_name" value="$u_name" size="24" />
	e-mail：<input type="text" name="u_mail" value="$u_mail" size="24" /><br/>
	電話：<input type="text" name="u_phone" value="$u_phone" size="24" maxlength="10" onkeyup="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"><br/>
	<input type="hidden" name="update" value="yes" />
	<input type="submit" value="送出" />
	<a href='checkdel.php'>刪除帳號</a>
	<a href='index.php'>回上一頁</a>



_END;
}

?>