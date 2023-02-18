<?php

include 'koneksi.php';

class PengaduanController extends Koneksi {
    public function index()
    {
        /**
         * Menampilkan semua pengaduan yang di ajukan
         */
        
        $query = "SELECT * FROM pengaduan";
        $index = $this->pdo->prepare($query);
        $index->execute();
        $result = $index->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function create()
    {
        // Menampilkan form tambah data        
    }
    
    public function store($request)
    {
        /**
         * Mengajukan pengaduan baru / logic tambah data (program)
         */

        $tgl        = $request['tgl'];
        $nik        = $request['nik'];
        $laporan    = $request['laporan'];
        $foto       = $request['foto'];
        $status     = 0;

        $query = "INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status) VALUES ('$tgl', '$nik', '$laporan', '$foto', '$status')";
        $store = $this->pdo->prepare($query);
        $store->execute();

        echo "<script>
            alert('Berhasil mengajukan pengaduan!')
            window.location.href='view/pengaduan/index.php'
            </script>";
    }

    public function show($id)
    {
        // Menampilkan data tertentu
    }

    public function edit($id)
    {
        $query = "SELECT * FROM pengaduan WHERE id_pengaduan = $id";
        $edit = $this->pdo->prepare($query);
        $edit->execute();
        $result = $edit->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    public function update($request)
    {
        $id      = $request['id'];
        $tgl     = $request['tgl'];
        $nik     = $request['nik'];
        $laporan = $request['laporan'];
        $foto    = $request['foto'];
        $status  = $request['status'];

        $query = "UPDATE pengaduan SET tgl_pengaduan = '$tgl', nik = '$nik', isi_laporan = '$laporan', foto = '$foto', status = '$status' WHERE id_pengaduan = $id";
        $store = $this->pdo->prepare($query);
        $store->execute();

        echo "<script>
            alert('Berhasil mengubah pengaduan!')
            window.location.href='view/pengaduan/index.php'
            </script>";
    }

    public function destroy($id)
    {
        $query = "DELETE FROM pengaduan WHERE id_pengaduan = $id";
        $destroy = $this->pdo->prepare($query);
        $destroy->execute();

        echo "<script>
            alert('Berhasil menghapus pengaduan!')
            window.location.href='view/pengaduan/index.php'
            </script>";
    }
}

$pengaduan = new PengaduanController();

if (isset($_POST['store'])) {
    $pengaduan->store($_POST);
}

if (isset($_POST['update'])) {       
    $pengaduan->update($_POST);
}

if (isset($_POST['destroy'])) {           
    $pengaduan->destroy($_POST['id']);
}