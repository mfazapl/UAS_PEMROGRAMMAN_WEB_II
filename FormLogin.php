<!DOCTYPE html>
<?php
require_once("Koneksi.php");
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
            <img src="logo.png" class="Logo">
            <h1> 
                Login
            </h1>
            <form method="POST">
                <p>
                    <b>Username</b>
                </p>
                <input id="username" type="text" name="username">
                <p>
                    <b>Password</b>
                </p>
                <input id="password" type="password" name="password">
                <br>
                <p>
                <button id="submit" type="submit" name="Login"><b>Login</b></button>
                </p>
                <p>
                    <u>
                    Lupa Password?
                    </u>
                </p>
                <p>
                    <u>
                    <a href="Daftar_Akun.php"><u>Belum mempunyai akun?</u></a>
                    </u>
                </p>
            </center>
            </form>
        </div>

        <?php
session_name("verify");
session_start();
if(isset($_POST['submit']))
{
   $admin = $pdo->prepare('SELECT * FROM user WHERE email_member= :email_member and password_member= :password_member');
   $admin->execute(array(
       ':email_member' => $_POST['username'],
       ':password_member' => $_POST['password']
   ));
   $row = $admin->fetch(PDO::FETCH_ASSOC);
   if(empty($row['username']))
   {
       echo"<script>alert('Username atau Password tidak valid')</script>";
   }
   else {
    $_SESSION['login_user'] = $_POST['userlog'];
    $_SESSION['level_user'] = $row['level'];
    header("location: index.php");
   }
}
?>
    
</body>
</html>
