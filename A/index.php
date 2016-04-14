<?php
include 'connect.php';
session_start();

if (isset($_POST['login'])) {
	$u_id=$_POST['u_id'];
	$u_pw=$_POST['u_pw'];

	$query="SELECT * FROM user WHERE u_id='$u_id'";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_row($result);
	if($row[0]!=null && $row[1]!=null){
		$_SESSION['u_id']=$row[0];
		$cntlogin=$row[5]+1;
		$u_id=$row[0];


		date_default_timezone_set("Asia/Taipei");
		$tempDate = date("Y-m-d H:i:s");
		$date=date("d");
		$query="UPDATE user SET tmp_date='$date' WHERE u_id='$u_id'";
		mysqli_query($conn,$query);

		if($row[7]!=$date){
			$query="UPDATE user SET u_cntlogin=$cntlogin WHERE u_id='$u_id'";
			mysqli_query($conn,$query);
		}

		$query="UPDATE user SET u_lastlogin='$tempDate' WHERE u_id='$u_id'";
		mysqli_query($conn,$query);
	}
}

if(isset($_SESSION['u_id'])){
	$u_id=$_SESSION['u_id'];
	$query="SELECT * FROM user WHERE u_id='$u_id'";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_row($result);
	$u_name=$row[2];
	$u_lastlogin=$row[6];
	$u_cntlogin=$row[5];
	echo $u_name."，歡迎回來！";
	echo "您的上一次登入時間為：$u_lastlogin"."，您的登入次數為：$u_cntlogin";
	echo "<a href='profile.php'>修改個人資料</a>";
	echo "<a href='log.php'>登出</a>";
}



?>