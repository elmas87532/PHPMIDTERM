<?php
include 'connect.php';



$query="SELECT * FROM url";
$result=mysqli_query($conn,$query);
echo "<table><tr><th>名稱</th><th>短網址</th><th>原網址</th><th>點擊率</th><th>上傳時間</th></tr>";
while ($row=mysqli_fetch_row($result)) {
	echo "<tr><td>$row[1]</td><td><a href='$row[2]'>$row[2]</a></td><td><a href='$row[0]'>$row[0]</a></td><td>$row[3]</td><td>$row[4]</td></tr>";
}
echo "</table>";

?>