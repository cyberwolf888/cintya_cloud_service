<?php
include_once("../../koneksi.php");
//die(var_dump($_POST));
	
	mysql_query("INSERT INTO tb_tour set
            id_user     = $_SESSION[id],
			nama	    = '$_POST[nama]',
			harga_tour	= '$_POST[harga_tour]',
			deskripsi	= '$_POST[deskripsi]',
			gambar  	= '$_POST[gambar]',
			status	= '$_POST[status]'
		") or die(mysql_error());
	header("Location: ../dt_tour.php");
?>