<?php
session_start();
if (isset($_SESSION['email']) === false) { // cek session apakah kosong(belum login) maka alihkan ke login.php
    header('Location: login.php');
}
