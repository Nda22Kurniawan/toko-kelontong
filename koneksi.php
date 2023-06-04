<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "kelontong";

$koneksi = mysqli_connect($host,$user,$password,$db);

if(!$koneksi) {
    die("Gagal Terhubung dengan Database");
}
?>