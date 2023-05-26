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
<h1>Tambah Daftar Karyawan</h1>
    
<form method="post" action="simpan.php">
<font face="verdana" >
<table width="400" style="background-color:#eee;" border='5'>
    <tr>
        <td>Nama Karyawan</td>
        <td><input type="text" name="nama_karyawan"></td>
    </tr>
    <tr>
        <td>Pilih Jabatan:</td>
        <td>
            <select name="jabatan" id="jabatan">
                <option value="">-- Pilih Jabatan --</option>
                <option value="kepala_lembaga">Kepala Lembaga</option>
                <option value="kepala_bidang">Kepala Bidang</option>
                <option value="staff_lembaga">Staff Lembaga</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Gaji:</td>
        <td><input type="text" id="gaji" readonly></td>
    </tr>
    <tr>
        <td>Tunjangan:</td>
        <td><input type="text" id="tunjangan" readonly></td>
    </tr>
</table>
<input type="submit" class="active3" value="SIMPAN">
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
