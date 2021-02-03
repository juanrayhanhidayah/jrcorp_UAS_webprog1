<?php
require_once "koneksi.php";
$id_layanan = $_POST["id_layanan"];
$title = $_POST["title"];
$deskripsi = $_POST["deskripsi"];
$namafile = $_FILES["file"]['name'];
$tmp_name = $_FILES['file']['tmp_name'];


echo $id_layanan;
if ($id_layanan == "") {
    echo "Tidak bisa melakukan upload karena user tidak tersedia di tabel biodata";
} else {
    move_uploaded_file($tmp_name, '../image/' . $namafile);
    $q = $database_connection->prepare("UPDATE `tb_layanan` SET `title` = ?, `deskripsi` = ?, `thumbnail` = ? WHERE `tb_layanan`.`id` = ?");
    $q->execute([$title, $deskripsi, 'image/' . $namafile, $id_layanan]);
    header("Location: ../crud_layanan.php");
}
