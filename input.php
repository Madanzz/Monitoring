<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input data</title>
</head>
<body>
<?php
    include('koneksi.php');

    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date("d F Y");
    $waktu = date("H:i:s");
    $suhu = $_GET ['suhu'];
    $kelembaban = $_GET ['kelembaban'];
    $tekanan_udara = $_GET ['tekanan_udara'];
    $kualitas_udara = $_GET ['kualitas_udara'];

    $kirim = mysqli_query($koneksi,"INSERT INTO tbmonitor (tanggal,waktu,suhu,kelembaban,tekanan_udara,kualitas_udara) VALUES('$tanggal','$waktu','$suhu','$kelembaban','$tekanan_udara','$kualitas_udara')");

    if($kirim){
        echo "Data berhasil diinputkan";
    } else {
        echo "gagal diinputkan";
    }

?>
</body>
</html>    