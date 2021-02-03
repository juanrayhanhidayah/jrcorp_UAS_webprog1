<?php
include 'session.php';
$id = $_SESSION['id'];
$email = $_SESSION['email'];
$nama = $_SESSION['nama'];
$password = $_SESSION['password'];
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>JRcorp</title>
</head>

<body style="padding-bottom: 70px;">
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="image/logo.png" width="30" height="30" alt="">
                    JRcorp
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                </button></span>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mr-auto">
                        <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="product.php">Products</a>
                        <a class="nav-item nav-link" href="profile.php">Profile</a>
                        <a class="nav-item nav-link" href="crud_layanan.php">Admin</a>
                    </div>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="container" style="margin-top: 70px !important; margin-bottom: 50px;">

        <form action="config/edit_profile.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nama</label>
                    <input type="text" class="form-control input-sm" name="nama" value="<?php echo $nama; ?>">
                </div>

            </div>
            <div class="form-group">
                <label for="inputAddress">Email</label>
                <input name="email" id="email" class="form-control" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Password</label>
                <input type="text" name="password" id="password" value="<?php echo $password; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <p style="color: red;">*Lakukan logout setelah melakukan update untuk melihat perubahan</p>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.profil', {
            duration: 3500,
            origin: 'left',
        })
        sr.reveal('.text', {
            duration: 3500,
            origin: 'right',
        })
    </script>
</body>

</html>