<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>
<br>
<br>
<H1>TAMBAH DATA</H>
    <form action="pdo.php" method="post">
        <table border=0>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td>
                    <input type="text" name="nim">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submitMhs" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
    
<body>
<html>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "quiz_pw";
echo "<h1>DAFTAR MAHASISWA</h1>";
	try{
	$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$hasil = $conn->query('SELECT * FROM mahasiswa');
	while ($row = $hasil->fetch(PDO::FETCH_ASSOC)){
		echo "$row[nim] $row[nama]";
		echo "<br>";
	}$koneksi=null;
	}
	catch(PDOException $e)
	{
	echo "connection gagal: ".$e->getMessage();
	die();
	}
	?>
