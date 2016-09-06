<?php 
include "koneksiDB.php"; ?>
<form action="#" method="post">
NPM : <input type="text" name="npm"/><br/>
Nama : <input type="text" name="nama"/><br/>
Alamat : <textarea name="alamat" ></textarea><br/>
No Telp : <input type="text" name="no_telp"/></br>
<input type="submit" name="bok" value="simpan"/>
</form>
<a href="index.php">Kembali ...</a>
<?php
if (isset ($_POST ['bok'])) {
	$npm = $_POST ['npm'];
	$nama = $_POST ['nama'];
	$alamat = $_POST ['alamat'];
	$no_telp = $_POST ['no_telp'];
	$q = "insert into mahasiswa (npm, nama, alamat, no_telp) values ('$npm','$nama','$alamat','$no_telp')";
	mysql_query ($q);
	echo "data tersimpan";
}
?>