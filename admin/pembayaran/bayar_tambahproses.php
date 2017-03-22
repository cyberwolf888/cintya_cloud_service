<?php
include_once("../../koneksi.php");
die(var_dump($_POST));
	
	mysql_query("INSERT INTO tb_bayarmember set
			nama= '$_POST[nama]',
			tgl_bayar	= '$_POST[tgl_bayar]',
			jml_bayar	= '$_POST[jml_bayar]'

		") or die(mysql_error());
	header("Location: ../dt_bayarmember.php");
?>