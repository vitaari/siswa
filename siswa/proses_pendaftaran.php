<?php
include("config.php");
// cek apakah tombol simpan sudah diklik atau belum
if($_SERVER['REQUEST_METHOD'] == "POST") {
    // ambil data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama_lengkap'];
    $jk = $_POST['jenis_kelamin'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $berat_badan = $_POST['berat_badan'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $aksi = $_POST['aksi'];
    // buat query
    $sql ="INSERT INTO siswa(id, nama_lengkap, jenis_kelamin, no_telp, berat_badan, tinggi_badan, aksi)
    VALUE('$id', '$nama', '$jk', '$no_telp', '$alamat', '$berat_badan', '$tinggi_badan')";
    $query = mysqli_query($db, $sql) or die(mysqli_error($db));
    // apakah query update berhasil
    if($query){
        //kalau berhasil, alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    }else {
        //kalau gagal, alihkan ke halaman index.php dengan status = gagal
        header('Location : index.php?status=gagal');
    }
}else{
    die("AKses dilarang.....");
}
?>