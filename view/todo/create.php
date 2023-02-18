<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengaduan</title>
</head>
<body>
    <h1>Formulir Pengaduan</h1>
    <a href="index.php">Kembali</a>
    <form action="../../pengaduancontroller.php" method="POST">
        <li><label for="tgl">Tanggal</label></li>
        <li><input type="date" name="tgl" id="tgl" autofocus required></li>
        <li><label for="nik">NIK</label></li>
        <li><input type="text" name="nik" id="nik" required></li>
        <li><label for="laporan">Laporan</label></li>
        <li><input type="text" name="laporan" id="laporan" required></li>
        <li><label for="foto">Foto</label></li>
        <li><input type="text" name="foto" id="foto" required></li>
        <br>
        <li><input type="submit" name="store" value="Tambah Pengaduan Baru"></li>
    </form>
</body>
</html>