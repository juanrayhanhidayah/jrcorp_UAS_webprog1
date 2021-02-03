<?php
require_once "koneksi.php";
$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];


$q = $database_connection->prepare("INSERT INTO `tb_user` (`id`, `nama`, `email`, `password`) VALUES (NULL, ?, ?, SHA1(?));");
$q->execute([$nama, $email, $password]);
header("Location: ../login.php");
