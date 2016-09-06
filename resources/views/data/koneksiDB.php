<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$database = "web2"; 	//Nama database

$koneksi = mysql_connect($host, $user, $pass);
mysql_select_db ($database, $koneksi) or die (mysql_error());
?>