<?php
// Tangkap data POST
$nama     = $_POST['nama'];
$email    = $_POST['email'];
$telefon  = $_POST['telefon'];
$kategori = $_POST['kategori'];
$slot     = $_POST['slot'];

$hargaUnit = 250;
$jumlah = $hargaUnit * $slot;
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Pengesahan Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f7;
        }
        .box {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
        }
        h2 {
            color: #198754;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Pengesahan Pendaftaran</h2>

    <p><strong>Nama:</strong> <?= $nama ?></p>
    <p><strong>E-mel:</strong> <?= $email ?></p>
    <p><strong>Telefon:</strong> <?= $telefon ?></p>
    <p><strong>Kategori:</strong> <?= $kategori ?></p>
    <p><strong>Bilangan Slot:</strong> <?= $slot ?></p>
    <p><strong>Jumlah Yuran:</strong> RM <?= number_format($jumlah, 2) ?></p>

    <p>Pendaftaran anda telah berjaya</p>
</div>

</body>
</html>