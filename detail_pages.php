<?php
include 'session.php';
$id_layanan = $_POST["id_layanan"];
$title = $_POST["title"];
$thumbnail = $_POST["thumbnail"];
$deskripsi = $_POST["deskripsi"];

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

<body>
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
  <div class="container">
    <div class="jumbotron text-white jumbotron-image" style="background-image: url(<?php echo $thumbnail; ?>); background-repeat: no-repeat; background-size: cover; min-height: 450px;">
    </div>
    <h2 class="mb-4">
      <?php echo $title;  ?>

    </h2>
    <p class="text-justify"><?php echo $deskripsi;  ?>

    </p>
    <hr class="mt-2 mb-3" />
  </div>
  <footer>
    <nav class="navbar navbar-light fixed-bottom" style="background-color: rgb(241, 241, 241);">
      <h6 class="text-center mx-auto">@Copyright by 18111075_JuanRayhanHidayah_TIFRP18CIDB_UASWEB1</h2>
    </nav>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>>
</body>

</html>