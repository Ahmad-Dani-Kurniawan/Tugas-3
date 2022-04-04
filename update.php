<?php
include "koneksi.php";

$id = $_POST['id_mhs'];
$nim = $_POST['nim_mhs'];
$nama = $_POST['nama_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "UPDATE tbl_205 set nim_mhs = '$nim', nama_mhs = '$nama', alamat_mhs = '$alamat' where id_mhs=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi update data mahasiswa gagal";
}else{
    echo "Eksekusi update data mahasiswa berhasil<br>";
    echo "<a href='data_mhs.php'>Show data</a>";
}

?>