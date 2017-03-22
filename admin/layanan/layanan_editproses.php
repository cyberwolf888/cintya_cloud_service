<?php
include_once("../../koneksi.php");
//die(var_dump($_POST));
	mysql_query("UPDATE tb_layanan set
			nama_paket= '$_POST[nama_paket]',
			harga_paket	= '$_POST[harga_paket]',
			durasi	= '$_POST[durasi]',
			keterangan	= '$_POST[keterangan]'
			WHERE id_layanan='$_POST[id_layanan]'") or die(mysql_error());
	header("Location: ../dt_layanan.php");
?>

