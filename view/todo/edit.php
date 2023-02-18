<?php
include '../../pengaduancontroller.php';
$id = $_GET['id'];
$data = $pengaduan->edit($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Pengaduan</title>
</head>
<body>
    <h1>Ubah Data Pengaduan</h1>
    <a href="index.php">Kembali</a>
    <form action="../../pengaduancontroller.php" method="POST">
        <input type="hidden" name="id" id="id" value="<?= $data->id_pengaduan; ?>">
        <li><label for="tgl">Tanggal</label></li>
        <li><input type="date" name="tgl" id="tgl" value="<?= $data->tgl_pengaduan; ?>" autofocus required></li>
        <li><label for="nik">NIK</label></li>
        <li><input type="text" name="nik" id="nik" value="<?= $data->nik; ?>" required></li>
        <li><label for="laporan">Laporan</label></li>
        <li><input type="text" name="laporan" id="laporan" value="<?= $data->isi_laporan; ?>" required></li>
        <li><label for="foto">Foto</label></li>
        <li><input type="text" name="foto" id="foto" value="<?= $data->foto; ?>" required></li>
        <li><label for="status">Status</label></li>
        <li>
        <select name="status" id="status">
            <option value="0">Belum diproses</option>
            <option value="proses">Sedang diproses</option>
            <option value="selesai">Selesai diproses</option>
        </select>
        </li>
        <br>
        <li><input type="submit" name="update" value="Ubah Pengaduan"></li>
    </form>
</body>
</html>