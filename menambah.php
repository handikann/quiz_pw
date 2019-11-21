<?php
include "PDO.php"

$nama = $_POST['nama'];
$nim = $_POST['nim'];

mysql_query($koneksi,"insert into mahasiswa values('$nim','$nama')");

header("location:login.php")
?>