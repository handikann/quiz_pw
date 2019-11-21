<?php
    // periksa apakah file mahasiswa.json tidak ada
    if(!file_exists('mahasiswa.json')){
        // Jika YA, maka eksekusi file export-json.php
        include_once('export-json.php');
    }
       
    // baca isi file json
    $mahasiswa = file_get_contents('mahasiswa.json');
    // decode variable json
    $mhs = json_decode($mahasiswa, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>

    <form action="pdo.php" method="post">
        <table border=0>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td>
                    <input type="text" name="password">
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

    <?php
        if (isset($_POST['submitMhs'])) {
            // menghitung banyaknya elemen pada $mhs
            $e = sizeof($mhs);
            // mengisi nilai isian text ke dalam array
            /* method intval() digunakan untuk casting tipe data dari string ke int */
            $mhs[$e]['username'] = intval($_POST['username']);
            $mhs[$e]['password'] = $_POST['password'];
            
            // encode ke JSON
            $json = json_encode($mhs, JSON_PRETTY_PRINT);
            // simpan ke file JSON
            file_put_contents('mahasiswa.json',$json);
        }
    ?>
    
</body>
</html>