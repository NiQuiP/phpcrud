<?php
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">    
    <title>Table Data Tamu</title>
</head>
<body>
    <div class="container">
        <div class="col-10 m-auto">
            <p class="h1 text-center p-5">Table Data Tamu</p>
            <a href="create.php" class="btn btn-primary">Tambah Data</a>
            <table class="table table-hower table-bordered border-primary mt-3">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Jenis Kelamin</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <?php
                    $query = "SELECT * FROM datatamu";
                    $result = mysqli_query($conn,$query);

                    $no = 1;
                    while ($data = mysqli_fetch_assoc($result)) {
                    ?>

                <tbody>
                    <tr>
                        <td scope="row" class="text-center"><?= $no++ ?></td>
                        <td scope="row"><?= $data['nama']?></td>
                        <td scope="row"><?= $data['jenis_kelamin']?></td>
                        <td scope="row"><?= $data['email']?></td>
                        <td scope="row">
                            <a href="edit.php?id=<?= $data['id']?>" class="btn btn-warning ms-4">Edit</a>
                            <form class="d-inline" action="delete.php" method="post">
                                <input type="hidden" name="id" value="<?= $data['id']?>">
                                <button class="btn btn-danger ">Delete</button>
                            </form>
                        </td>

                    </tr>
                </tbody>
                <?php
                    }
                    ?>
            </table>
        </div>
    </div>
</body>
</html>