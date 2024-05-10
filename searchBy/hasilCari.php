<?php
include "koneksi.php"; // Sertakan file koneksi.php

$kategori = isset($_GET['kategori']) ? $_GET['kategori'] : ''; 
$cari = isset($_GET['cari']) ? $_GET['cari'] : '';

if (!empty($kategori) && !empty($cari)) {
    $sqlsiswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE " . $kategori . " LIKE '%" . $cari . "%'");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pencarian Data Siswa</title>
</head>
<body>
    <h2>Hasil Pencarian Data Siswa</h2>
    <?php if (!empty($kategori) && !empty($cari) && mysqli_num_rows($sqlsiswa) > 0) { ?>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
            </tr>
            <?php
            $a = 0;
            while ($datasiswa = mysqli_fetch_array($sqlsiswa)) {
                $a++;
            ?>
                <tr>
                    <td><?= $a; ?></td>
                    <td><?= $datasiswa['nis']; ?></td>
                    <td><?= $datasiswa['nama']; ?></td>
                    <td><?= $datasiswa['alamat']; ?></td>
                    <td><?= $datasiswa['kelamin']; ?></td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <a href="index.php">Kembali ke Pencarian</a> <!-- Tautan untuk kembali ke halaman pencarian -->
    <?php } elseif (!empty($kategori) && !empty($cari) && mysqli_num_rows($sqlsiswa) == 0) { ?>
        <p>Tidak ada hasil pencarian.</p>
        <br>
        <a href="index.php">Kembali ke Pencarian</a> <!-- Tautan untuk kembali ke halaman pencarian -->
    <?php } else { ?>
        <p>Silakan lakukan pencarian terlebih dahulu.</p>
    <?php } ?>
</body>
</html>
