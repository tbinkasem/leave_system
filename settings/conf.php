<?php
	 $server = "localhost";
	$user = "root";
	$pass = "itdep333011";
	$db = "dbleave";

	$conn = mysqli_connect($hn,$un,$pw,$db);
	mysqli_set_charset($conn, "utf8");

	if(!$conn){
		echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้";
	}
?>