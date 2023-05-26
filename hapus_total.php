<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_gaji_1921600012");

// Memeriksa koneksi database
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$id_gaji = $_GET['id_gaji'];
$sql = "DELETE FROM tabel_gaji WHERE id_gaji='$id_gaji'";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit;
} else {
    echo "Gagal menghapus data gaji: " . mysqli_error($conn);
}

// Menutup koneksi database
mysqli_close($conn);
?>
