<?php
    include "config.php";
    
    if (isset($_POST['simpan'])) {
        $nik            =$_POST['nama'];
        $nama           =$_POST['nama_karyawan'];
        $jeniskelamin   =$_POST['jenis_kelamin'];
        $departement    =$_POST['departement'];
        $bagian         =$_POST['bagian'];
        $jabatan        =$_POST['jabatan'];
        $datetime       =$_POST['datetime'];
        $deskripsi      =$_POST['deskripsi'];

        $query = mysql_query("INSERT INTO form (nik,nama_lengkap,jenis_kelamin,departement,bagian,jabatan,datetime,deskripsi)VALUES('$nik','$nama','$jeniskelamin','$departement','$bagian','$jabatan','$datetime','$deskripsi')");
        if ($query){
            echo "Input Data Berhasil";
        }else{
            echo "Input Data Gagal";
        }
    }
?>