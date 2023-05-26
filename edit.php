<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_gaji_1921600012");

// Mendapatkan ID gaji dari URL
$id_gaji = $_GET['id_gaji'];

// Mengambil data gaji dari database berdasarkan ID
$result = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tabel_gaji WHERE id_gaji='$id_gaji'"));

// Memeriksa apakah data berhasil diambil
if (!$result) {
    echo "Data tidak ditemukan.";
    exit;
}

// Menutup koneksi database
mysqli_close($conn);
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
<h1>EDIT Daftar Karyawan</h1>
<form method="post" action="simpan_edit.php?id_gaji=<?= $id_gaji; ?>">
<table width="400" style="background-color:#eee;" border='5'>
    <tr>
        <td>Nama Karyawan</td>
        <td><input type="text" name="nama_karyawan" value="<?= $result['nama_karyawan']; ?>"></td>
    </tr>
    <tr>
        <td>Pilih Jabatan:</td>
        <td>
            <select name="jabatan" id="jabatan">
                <option value="">-- Pilih Jabatan --</option>
                <option value="kepala_lembaga" <?= ($result['jabatan'] == 'kepala_lembaga') ? 'selected' : ''; ?>>Kepala Lembaga</option>
                <option value="kepala_bidang" <?= ($result['jabatan'] == 'kepala_bidang') ? 'selected' : ''; ?>>Kepala Bidang</option>
                <option value="staff_lembaga" <?= ($result['jabatan'] == 'staff_lembaga') ? 'selected' : ''; ?>>Staff Lembaga</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Gaji:</td>
        <td><input type="text" id="gaji" value="<?= $result['gaji']; ?>" readonly></td>
    </tr>
    <tr>
        <td>Tunjangan:</td>
        <td><input type="text" id="tunjangan" value="<?= $result['tunjangan']; ?>" readonly></td>
    </tr>
</table>
<input type="submit" class="active3" value="EDIT">
</form>

<script>
    var jabatanDropdown = document.getElementById("jabatan");
    var gajiInput = document.getElementById("gaji");
    var tunjanganInput = document.getElementById("tunjangan");

    jabatanDropdown.addEventListener("change", function () {
        var selectedOption = jabatanDropdown.options[jabatanDropdown.selectedIndex].value;
        var gaji = "";
        var tunjangan = "";

        switch (selectedOption) {
            case "kepala_lembaga":
                gaji = "Rp 2.500.000";
                tunjangan = "Rp 1.500.000";
                break;
            case "kepala_bidang":
                gaji = "Rp 2.000.000";
                tunjangan = "Rp 1.000.000";
                break;
            case "staff_lembaga":
                gaji = "Rp 1.500.000";
                tunjangan = "Rp 500.000";
                break;
            default:
                gaji = "";
                tunjangan = "";
        }

        gajiInput.value = gaji;
        tunjanganInput.value = tunjangan;
    });
</script>
</body>
</html>
