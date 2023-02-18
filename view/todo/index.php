<?php
include '../../pengaduancontroller.php';
$index = $pengaduan->index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan</title>
</head>
<body>
    <h1>List Pengaduan Masyarakat</h1>
    <a href="create.php">Tambah Data</a>
    <br><br>
    <?php if ($index != null) : ?>
        <?php $no = 1; foreach ($index as $data) : ?>
        <div>
            <li><?= $no++; ?>. Tanggal : <?= $data->tgl_pengaduan ?></li>            
            <li>NIK : <?= $data->nik ?></li>            
            <li>Laporan : <?= $data->isi_laporan ?></li>        
            <li>Foto : <?= $data->foto ?></li>            
            <li>Status : 
            <?php if ($data->status == 0) : ?>
                Belum diproses
            <?php elseif ($data->status == 'proses') : ?>
                Sedang diproses
            <?php elseif ($data->status == 'selesai') : ?>
                Selesai diproses
            <?php endif ; ?>  
            </li>
            <li>
            <a href="edit.php?id=<?php echo $data->id_pengaduan; ?>">Ubah</a>
            <form action="../../pengaduancontroller.php" method="POST">
                <input type="hidden" name="id" value="<?= $data->id_pengaduan; ?>">
                <input type="submit" name="destroy" value="Hapus">
            </form>
            </li>
            <br>          
        </div>
        <?php endforeach; ?>
    <?php else : ?>
        <h3>List Pengaduan Masih Kosong</h3>
    <?php endif; ?>
</body>
</html>