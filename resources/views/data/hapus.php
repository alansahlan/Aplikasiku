<?php
include "koneksiDB.php";;
$npm = $_GET ['n'];
$q = "delete from mahasiswa where npm='$npm'";
mysql_query ($q);
echo "Data terhapus\n";
?>
</br><a href='mhs.php'>Kembali ...</a>