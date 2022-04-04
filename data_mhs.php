<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .card {margin:10px;}
        .btn {margin:10px;}
    </style>
</head>
<body>
    <div class="card" style="width: 30rem;">
        <div class="card-body">
            <h2 class="card-title">Data Teman Mahasiswa</h2>
        </div>
    </div>
    <a class="btn btn-outline-primary" href="form_mhs.php" role="button">Tambah Data</a>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <td>NIM Mahasiswa</td>
                <td>Nama Mahasiswa</td>
                <td>Alamat Mahasiswa</td>
                <td>Action</td>
            </tr>
            <?php
            include 'koneksi.php';
            $sql="SELECT * From tbl_205";
            $hasil = mysqli_query($koneksi, $sql);
            while($row = mysqli_fetch_array($hasil))
            {
            ?>
        </thead>
        <tbody>
            <tr>
                <td><?=$row['nim_mhs'];?></td>
                <td><?=$row['nama_mhs'];?></td>
                <td><?=$row['alamat_mhs'];?></td>
                <td><a class="btn btn-warning" href="form_edit.php?id=<?=$row['id_mhs']?>" role="button">Edit </a>
                <a class="btn btn-danger" href="delete.php?id=<?=$row['id_mhs']?>" role="button">Delete</a></td>
            </tr>
            <?php } 
            ?>
        </tbody>
    </table>
</body>
</html>