<?php
session_start();
	$host		= "localhost";
	$user		= "root";
	$pass		= "";
	$db			= "db_saas";
	
	$conn = mysql_connect($host,$user,$pass) or die("Gagal menyambung kedatabase");

   if ($conn) {
      # code...
      echo " ";
   }else{
      echo "Koneksi Sql gagal ?";
   }
   mysql_select_db($db, $conn) or die("Gagal Menyambung ke Database".mysql_error());
?>