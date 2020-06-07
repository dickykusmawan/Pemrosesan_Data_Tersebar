<?php
    require_once "config.php";

    $passlama   = $_POST['passlama'];
    $passbaru   = $_POST['passbaru'];
    $repassbaru = $_POST['repassbaru'];
    $username   = $_POST['username'];

    $cekuser = "SELECT * FROM user WHERE username='$username' and password='$passlama'";

    $querycekuser = mysqli_query($cekuser);
    $count =? mysqli_num_rows($querycekuser);

    if ($count >= 1){
        $updatepass = "UPDATE user SET password='$passbaru' WHERE username='$username'";

        $updatequery = mysqli_query($updatepass);

        if ($updatequery) {
            "Password Telah Diganti Menjadi $passbaru";
        }
    }
?>