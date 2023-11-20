<?php

require('./../config/db.php');
session_start();

if (isset($_POST['update'])) {

    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $price = $_REQUEST['price'];
    $image = $_REQUEST['image'];

    // $submittedby = $_SESSION["username"];

    // Menampilkan nilai variabel sebelum

    try {
        $update = $db_connect->prepare("UPDATE products SET name=?, price=?, image=? WHERE id=?");
        $update->bind_param("sssi", $name, $price, $image, $id);
        $update->execute();

        $status = "Data Produk Berhasil di Update </br></br>
        <a href='./../show.php'>Lihat Daftar List Produk Terbaru</a>";
        echo $status . '</p>';
    } catch (Exception $e) {
        echo "test 1 Gagal Edit: " . $e->getMessage();
    }
} else {
    echo "test 2 Gagal Edit";
}