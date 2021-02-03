<?php
session_start();
require_once 'koneksi.php';

if (!isset($_SESSION['email']) == 0) {
    header('Location: ../login.php');
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $sql = "SELECT * FROM `tb_user` WHERE email = ? AND password = SHA1(?)";
        $q = $database_connection->prepare($sql);
        $q->execute([$email, $password]);
        $count = $q->rowCount();
        if ($count == 1) {
            $user = $q->fetch(PDO::FETCH_ASSOC);
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['password'] = $password;
            header("Location: ../index.php");
            return;
        } else {
            echo "<script> alert('Email atau Password anda salah !'); </script>";
            header("Location: ../login.php");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
