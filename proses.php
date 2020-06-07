<?php
    include "config.php";
    
    if (isset($_POST['nik'])) {
        $nik            =$_POST['nik'];
        $nama           =$_POST['nama_karyawan'];
        $jeniskelamin   =$_POST['jenis_kelamin'];
        $departement    =$_POST['departement'];
        $bagian         =$_POST['bagian'];
        $jabatan        =$_POST['jabatan'];
        $datetime       =$_POST['datetime'];
        $deskripsi      =$_POST['deskripsi'];

        //$query = "insert into a (kulum) VALUES ('a')";
        $query = "INSERT INTO form (nik,nama_karyawan,jenis_kelamin,departement,bagian,jabatan,datetime,deskripsi)VALUES('$nik','$nama','$jeniskelamin','$departement','$bagian','$jabatan','$datetime','$deskripsi')";
        mysqli_query($koneksi, $query);
        header("location:formlembur.php");
    }
?>