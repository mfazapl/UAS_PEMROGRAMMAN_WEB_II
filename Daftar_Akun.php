<html>
<?php
require_once("Model.php");

$form = $_GET ['form'];
?>
<?php
if($form == 'tambah'){
?>
<form method="POST">
    <label for="email"> Email </label>
    <input type="text" name="email" id="email"><br>
    <label for="nama">Nama </label>
    <input type="text" name="user" id="user"><br>
    <label for="pass"> Buat Password </label>
    <input type="password" name="pass" id="pass"><br>
    <input type="submit" name="submit" value="submit">
</form>
<?php
    if(isset($_POST['submit'])) {
    AddMember($_POST['email'], $_POST['user'], $_POST['pass']);
    }
}
?>


</html>