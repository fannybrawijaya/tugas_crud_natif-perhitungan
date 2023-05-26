<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_gaji_1921600012");

$result = mysqli_query($conn, "SELECT * from tabel_gaji");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penggajian</title>
</head>
<body>
<h1>Daftar Karyawan</h1>
    
    <table border="1" cellpadding="10" cellspasing="0">
            <tr>
                <th>x</th>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>gaji</th>
                <th>tunjangan</th>
                <th>Total</th>
                <th>Aksi</th>
                </tr>
        <?php $i = 1; ?>
        <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td><?= $i ?></td>
            
            <td><?= $row ["nama_karyawan"]; ?> </td>
            <td><?= $row ["jabatan"]; ?> </td>
            <td><?= $row ["gaji"]; ?> </td>
            <td><?= $row ["tunjangan"]; ?> </td>
            <td><?= $row ["total_gaji"]; ?> </td>
            <td>
                <a href="">total</a> |
                <a href="">batal</a>
            </td>
        </tr>
        <?php $i++;?>
        <?php endwhile; ?>
    </table>
</body>
</html>