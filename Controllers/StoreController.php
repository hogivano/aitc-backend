<?php
    include '../Models/Artikel.php';

    $title = $_POST['title'];
    $deskripsi = $_POST['deskripsi'];

    $arr = ['title' => $title, 'deskripsi' => $deskripsi];
    if ($artikel->create($arr)){
        header("Location:../views/index.php");
    }

    echo 'Gagal tambah artikel';
?>
