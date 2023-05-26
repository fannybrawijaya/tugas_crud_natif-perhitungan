<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_gaji_1921600012");

// Memeriksa koneksi database
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$nama_karyawan = $_POST['nama_karyawan'];
$jabatan = $_POST['jabatan'];
$gaji = 0;
$tunjangan = 0;

switch ($jabatan) {
    case "kepala_lembaga":
        $gaji = 2500000;
        $tunjangan = 1500000;
        break;
    case "kepala_bidang":
        $gaji = 2000000;
        $tunjangan = 1000000;
        break;
    case "staff_lembaga":
        $gaji = 1500000;
        $tunjangan = 500000;
        break;
}

$total_gaji = $gaji + $tunjangan;

$result = mysqli_query($conn, "UPDATE tabel_gaji SET nama_karyawan='$nama_karyawan', jabatan='$jabatan', gaji='$gaji', tunjangan='$tunjangan', total_gaji='$total_gaji' WHERE id_gaji='$_GET[id_gaji]'");

// Memeriksa apakah query berhasil dijalankan
if ($result) {
    echo "Data gaji berhasil di edit.";
} else {
    echo "Gagal edit data gaji: " . mysqli_error($conn);
}

// Menutup koneksi database
mysqli_close($conn);
?>
