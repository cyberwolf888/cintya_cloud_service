<?php
//echo $_GET['id'];

include_once("../../koneksi.php");
//die(var_dump($_POST));
	
	mysql_query("delete from tb_layanan where id_layanan='$_GET[id]'") or die(mysql_error());
	header("Location: ../dt_layanan.php");