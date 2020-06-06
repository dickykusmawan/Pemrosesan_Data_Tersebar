<?php
    $koneksi = mysqli_connect("localhost","root","","spl");

    if($koneksi) {
        echo "Koneksi Berhasil";
        } else {
            echo "Koneksi Gagal";
        }
?>