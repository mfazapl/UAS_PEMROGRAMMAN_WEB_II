<!DOCTYPE html>
<?php
include ('Koneksi.php');
if (isset($_SESSION['user'])) {
    session_start();
    header("Location: Index.php");
}
?>

<html>
    <head>
        <title>
            Login
        </title>
        <link rel="stylesheet" type="text/css" href="style.css"
    </head>
    <body>
        <center>
        <div class="container">
            <img src="assets/logo.png" class="Logo">
            <h1> 
                Login
            </h1>
            <form action="Cek.php" method="POST">
                <p>
                    <b>Username</b>
                </p>
                <input id="user" type="text" name="user">
                <p>
                    <b>Password</b>
                </p>
                <input id="pass" type="password" name="pass">
                <br>
                <p>
                <button id="submit" type="submit" name="Login"><b>Login</b></button>
                </p>
                <p>
                    <u>
                    <p><a href='Daftar_Akun.php?form=tambah'>Daftar ! </a></p>
                    </u>
                </p>
            </center>
            </form>
        </div>
    
</body>
</html>
