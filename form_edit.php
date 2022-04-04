<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Teman Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .mx-auto {width:1100px;}
        .card {margin-top:10px;}
    </style>
</head>
<body>
    <?php
        include 'koneksi.php';
        $id=$_GET['id'];
    $sql = "SELECT * FROM tbl_205 where id_mhs=$id";
    $hasil = mysqli_query($koneksi, $sql);
    if (!$hasil){
        echo "query salah";
    }
    ?>
    <div class="mx-auto">
        <div class="card">
            <div class="card-body">
                <h1>Update Data Teman Mahasiswa</h1>
                <?php
                while ($row = mysqli_fetch_array($hasil))
                {
                ?>
                    <form action="update.php" method="POST">
                        <div class="mb-3 row">
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" id="id_mhs" name="id_mhs" value="<?php echo $row['id_mhs']?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nim_mhs" class="col-sm-2 col-form-label">NIM Mahasiswa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nim_mhs" name="nim_mhs" value="<?php echo $row['nim_mhs']?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama_mhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" value="<?php echo $row['nama_mhs']?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="alamat_mhs" class="col-sm-2 col-form-label">Alamat Mahasiswa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat_mhs" name="alamat_mhs" value="<?php echo $row['alamat_mhs']?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="submit" name="update" value="Update" class="btn btn-primary /">
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>