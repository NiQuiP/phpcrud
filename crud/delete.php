<?php
    include 'koneksi.php';

    $id     = $_POST['id'];

    $query  = "DELETE FROM datatamu WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header ('Location: index.php');
    } else {
        echo "Data gagal dihapus";
    }
?>