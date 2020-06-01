<?php
    if($_POST['Submit']=="Submit") {
        $nik            = $_POST['nik'];
        $nama_karyawan  = $_POST['nama_karyawan'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $departement    = $_POST['departement'];
        $bagian         = $_POST['bagian'];
        $jabatan        = $_POST['jabatan'];
        $datetime       = $_POST['datetime'];
        $deskripsi      = $_POST['deskripsi'];

        if(empty($_POST['nik'])||empty($_POST['nama_karyawan'])||empty($_POST['jenis_kelamin'])||empty($_POST['departement'])||empty($_POST['bagian'])||empty($_POST['datetime'])||empty($_POST['deskripsi'])) {
            ?>
                <script language="JavaScript">
                    alert('Data Harap Dilengkapi!');
                    document.location='download-script-form-input-data.php';
                </script>
            <?php
        }
        else {
            $cek=mysql_num_rows (mysql_query("SELECT nik FROM spl WHERE nik='$_POST[nik]'"));
            if($cek>0) {
                ?>
                    <script language="JavaScript">
                        alert('NIK sudah dipakai!, silahkan ganti NIK yang lain');
                        document.location='download-script-form-input-data.php';
                    </script>
                <?php
            }
            $input ="INSERT INTO spl (nik,nama_karyawan,jenis_kelamin,departement,bagian,jabatan,datetime,deskripsi) VALUES ('$nik','$nama_karyawan','$jenis_kelamin','$departement','$bagian','$datetime','$deskripsi')";
            $query_input = mysql_query($input);
            if($query_input) {
                ?>
                    <script language="JavaScript">
                        alert('Input Data Berhasil');
                        document.location='download-script-form-input-data.php';
                    </script>
                <?php
            }
            else {
                echo "Input Data Gagal, Silahkan Diulangi"
            }
            mysql_close($Open);
        }
    }
?>