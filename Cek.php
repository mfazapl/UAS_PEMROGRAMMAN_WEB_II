<?php
require_once("koneksi.php");
session_name("verify");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = koneksi()->prepare("SELECT * FROM member WHERE user = :user and pass = :pass");
    $sql->execute(array(
        ':user' => $user,
        ':pass' => $pass
        ));
    $result = $sql->fetch();
    if (empty($result['user'])) {
        echo"<script>alert('Login tidak berhasil, username dan password tidak valid')</script>";
        echo"<br/><a href='FormLogin.php'>Login Ulang</a>";
    } else {
            $_SESSION["user"] = $result['user'];
            header("Location: index.php");
    }

}