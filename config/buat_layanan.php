<?php
require_once "koneksi.php";
$title = $_POST["title"];
$deskripsi = $_POST["deskripsi"];
$namafile = $_FILES["file"]['name'];
$tmp_name = $_FILES['file']['tmp_name'];

move_uploaded_file($tmp_name, '../image/' . $namafile);
$q = $database_connection->prepare("INSERT INTO `tb_layanan` (`id`, `title`, `deskripsi`, `thumbnail`) VALUES (NULL, ?, ?, ?)");
$q->execute([$title, $deskripsi, 'image/' . $namafile]);
header("Location: ../crud_layanan.php");
