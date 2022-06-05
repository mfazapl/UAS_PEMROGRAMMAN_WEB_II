<?php
function Koneksi()
{
    try {
        $pdo_conn = new PDO(
            'mysql:host=localhost;dbname=mybakery',//atur sesuai nama database
            'root',//atur sesuai username database
            'admin',//atur sesuai password database
            array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true)
        );
    } catch (PDOException $e) {
        print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
        die();
    }
    return $pdo_conn;
}
?>