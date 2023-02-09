<?php
$conn = mysqli_connect("localhost", "root", "", "phpcrud");

if(!$conn) {
    echo ('database tidak ditemukan');
}