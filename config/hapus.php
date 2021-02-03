<?php
require_once "koneksi.php";
$id_layanan = $_POST["id_layanan"];
echo $id_layanan;

$q = $database_connection->prepare("DELETE FROM `tb_layanan` WHERE `tb_layanan`.`id` = ?");
$q->execute([$id_layanan]);
header("Location: ../crud_layanan.php");
