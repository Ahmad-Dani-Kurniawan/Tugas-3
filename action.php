<?php
include "koneksi.php";

$nim = $_POST['nim_mhs'];
$nama = $_POST['nama_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_205 VALUES(null,'$nim','$nama','$alamat')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi tambah data mahasiswa gagal";
}else{
    echo "Eksekusi tambah data mahasiswa berhasil<br>";
    echo "<a href='data_mhs.php'>Show data</a>";
}

?>