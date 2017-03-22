<?php
include_once("../../koneksi.php");
//die(var_dump($_POST));
	mysql_query("UPDATE tb_user set
			nama		= '$_POST[nama]',
			alamat		= '$_POST[alamat]',
			tlpn		= '$_POST[tlpn]',
			email		= '$_POST[email]',
			password	= '".md5($_POST['password'])."',
			status		= '$_POST[status]'
			WHERE id='$_POST[id]'") or die(mysql_error());
	header("Location: ../dt_admin.php");
?>

