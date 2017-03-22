<?php
include_once("../koneksi.php");
//cek input post
//die(var_dump($_POST));
$email =  $_POST["email"];
$password = md5($_POST["password"]);

$sql = "SELECT * FROM tb_user where email='$email' and password='$password' and status=1";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
	$row = mysql_fetch_assoc($result);
    $_SESSION["id"] = $row['id'];
	$_SESSION["email"] = $row['email'];
	$_SESSION["nama"] = $row['nama'];
	$_SESSION["type"] = $row['type'];
	
	//Jiks tipe admin
	if($row['type']==1){
		header("Location: dashboard.php");
	}
	
	//Jika tipe member
	if($row['type']==2){
        header("Location: ../member/dashboardmember.php");
		
	}
	
}else{
	echo "gagal";
}

