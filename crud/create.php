<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">  
    <title>Tambah Data</title>
</head>
<body>
    <div class="container">
        <?php
            include "koneksi.php";
        ?>
        <div class="col-10 m-auto" style="padding: 100px 0 0 0;">
        <h2 class="text-center fw-bold">Tambah Data Tamu</h2>
        <div class="text-center mb-3" style="padding-right: 620px;">
            <a href="index.php" class="btn btn-primary">Table Data</a>
        </div>
            <div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded">
                <form action="createproses.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" required>
                    </div>

                    <div class="mb-3">
                        <p>Jenis Kelamin</p>
                        <input name="jenis_kelamin" type="radio" id="jenis_kelamin1Input" value="Pria">
                        <label for="jenis_kelamin1Input" class="form-label">Pria</label>
                        <input name="jenis_kelamin" type="radio" id="jenis_kelamin2Input" value="Wanita">
                        <label for="jenis_kelamin2Input" class="form-label">Wanita</label>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required>
                    </div>

                    <div class="col-3 m-auto">
                        <button class="btn btn-md btn-primary px-5 mt-2">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>
</html>