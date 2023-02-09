<?php

    include "koneksi.php";

    $nama = $_POST ['nama'];
    $jenis_kelamin = $_POST ['jenis_kelamin'];
    $email = $_POST ['email'];

    $query = "INSERT INTO datatamu (nama,jenis_kelamin,email) VALUES ('$nama', '$jenis_kelamin', '$email')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header ('Location:  index.php');
    } else {
        echo "data gagal ditambahkan";
    }
