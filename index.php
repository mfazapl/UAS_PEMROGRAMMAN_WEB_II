<?php
    session_name("verify");
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: FormLogin.php");
    }
?>
<?php require('components/header.inc.php')?>
<?php require('components/home.inc.php')?>
<?php require('components/footer.inc.php')?>