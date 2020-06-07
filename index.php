<!DOCTYPE html>
<html>
    <head>
        <title>Surat Perintah Lembut</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1> Welcome, </h1>
        <h2> SURAT PERINTAH LEMBUR </h2>

        <?php
            if(isset($_GET['pesan'])){
                if($_GET['pesan']=="gagal"){
                    echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
                }
            }
        ?>

        <div class="form-login">
		<form action="cek_login.php" method="post">
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">
            <input type="password" name="password" class="form_login" placeholder="Password" required="required">
            <a href="#"><legend id="forgot-pass">Forgot Password?</legend></a>
            <br>
			<center><input type="submit" class="login" value="Sign In"></center>
		</form>
		
	    </div>
    </body>
</html>