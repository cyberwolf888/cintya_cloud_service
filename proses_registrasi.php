<?php
include_once("koneksi.php");
//die(var_dump($_POST));

mysql_query("INSERT INTO tb_user set
			nama	= '$_POST[nama]',
			alamat	= '$_POST[alamat]',
			tlpn	= '$_POST[tlpn]',
			email	= '$_POST[email]',
			password	= '".md5($_POST['password'])."',
			status	= '1',
			type = 3
			 
		") or die(mysql_error());
header("Location: form_login.php");
?>