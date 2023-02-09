<?php

    include 'koneksi.php';

    $id             = $_POST['id'];
    $nama           = $_POST['nama'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $email          = $_POST['email'];

    $query = "UPDATE datatamu SET
    
        nama            = '$nama',
        jenis_kelamin   = '$jenis_kelamin',
        email           = '$email'
        WHERE id = $id";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header ('Location: index.php');
    } else {
        echo "data gagal diubah";
    }

?>