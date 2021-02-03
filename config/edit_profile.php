<?php
require_once "koneksi.php";
$nama = $_POST["nama"];
$password = $_POST["password"];
$email = $_POST["email"];
$id = $_POST["id"];

$q = $database_connection->prepare("UPDATE `tb_user` SET `nama` = ?, 
`email` = ?, `password`= SHA1(?) WHERE `tb_user`.`id` = ?");
$q->execute([$nama, $email, $password, $id]);

header("Location: ../profile.php");
