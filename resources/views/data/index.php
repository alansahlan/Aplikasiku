<?php
include "koneksiDB.php";

$q = "select * from mahasiswa";		//mengambil data dari tabel mahasiswa
$ex = mysql_query($q);
echo "<h3>Data Mahaiswa</h3>";
echo "<a href='tambah.php'>Tambah Data</a>";
echo "<table border='1px'>";
echo "<tr>
		<th>NPM</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No Telpon</th>
		<th>Action</th>
	</tr>";
	
while ($r = mysql_fetch_array($ex)){
	echo "<tr><td>".$r['npm']."</td>";
	echo "<td>".$r['nama']."</td>";
	echo "<td>".$r['alamat']."</td>";
	echo "<td>".$r['no_telp']."</td>";
	echo "<td>&nbsp<a href='rubah.php?n=".$r['npm']."'>Ubah</a>&nbsp&nbsp";
	echo "<a href='hapus.php?n=".$r['npm']."'>Hapus</a>&nbsp";
	echo "</td></tr>";
}
echo "</table>"
?>
