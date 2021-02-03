<?php
include 'session.php';
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://unpkg.com/scrollreveal"></script>
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
  <!-- 960 x 500 -->
  <div class="container caroussel">
    <div class="row">
      <div class="col-xl-12">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/carousel1.jpg" class="d-block w-100" alt="..." style="max-height: 500px;">
              <div class="carousel-caption d-none d-md-block">
                <h5 style="color: #fff;">Ignore Notes</h5>
                <p style="color: #fff;">Let's make it simple with us</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="image/carousel2.jpg" class="d-block w-100" alt="..." style="max-height: 500px;">
              <div class="carousel-caption d-none d-md-block mr-auto">
                <h5 class="text-left" style="color: #777;">Complex Data</h5>
                <p class="text-left" style="color: #777;">Make decision with data</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="image/carousel3.jpg" class="d-block w-100" alt="..." style="max-height: 500px;">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
          </a>
        </div>
      </div>
    </div>
  </div>


  <div class="container" style="margin-top: 60px;">
    <div class="col-md-auto">
      <h3 class="text-center" style="margin-top: 20px;">Our Services</h3>
    </div>

    <div class="row" style=" margin-bottom: 15px; padding-right: 30px; padding-left: 30px; color: black;">
      <div class="col-sm-4 box text-center mx-auto shadow-lg" onclick="highlight(this)" style="margin-bottom: 2rem;">
        <img src="image/briefcase.png" class="card-img-center rounded-circle" alt="..." style="width: 150px; height: 150px;">

        <h5 class="text-center" style="margin-top: 1rem;">Invesment</h5>

        <p class="text-center" style="margin-top: 0.5rem;">layanan data investasi untuk membantu investor asing dalam berinvestasi di Indonesia dan mengembangkan lingkungan investasi.</p>
      </div>
      <div class="col-sm-4 box text-center mx-auto shadow-lg" onclick="borderBot(this)" style="margin-bottom: 2rem;">
        <img src="image/debt.png" class="card-img-center rounded-circle" alt="..." style="width: 150px; height: 150px;">

        <h5 class="text-center" style="margin-top: 1rem;">Debit</h5>

        <p class="text-center" style="margin-top: 0.5rem;">meningkatkan akun aset atau beban dan mengurangi akun liabilitas, pendapatan, atau ekuitas.</p>
      </div>
      <div class="col-sm-4 box text-center mx-auto shadow-lg" onclick="borderBt(this)" style="margin-bottom: 2rem;">
        <img src="image/credit-card.png" class="card-img-center rounded-circle" alt="..." style="width: 150px; height: 150px;">

        <h5 class="text-center" style="margin-top: 1rem;">Credit</h5>

        <p class="text-center" style="margin-top: 0.5rem;">Pengalaman kredit dan keahlian yang beragam di semua aktivitas perbankan tradisional dan yang sedang berkembang, bervariasi dari Ritel.</p>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top: 3rem; margin-bottom: 2rem; ">
    <div class="row">
      <div class="col-md-6 logo text-center">
        <img src="image/logo.png" alt="" width="200px;">
      </div>
      <div class="col-md-6 txt" style="margin-bottom: 2rem;">
        <h1>JRcorp</h1>
        <p style="text-align: justify;">JRcorp adalah korporasi masa depan, kami menyimpan uang Anda untuk royal investasi. Kami menyimpan data Anda dengan protokol keamanan, Anda dapat mempelajari tentang data uang Anda dan membuat keputusan dengan saran kami. Kami menyediakan Kredit, Debit dan Investasi semuanya dalam satu product. Mari buat masa depan kita lebih cerah, secerah sinar matahari pagi</p>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-light" style="background-color: rgb(241, 241, 241); bottom: auto;">
    <h6 class="text-center mx-auto">@Copyright by 18111075_JuanRayhanHidayah_TIFRP18CIDB_UASWEB1</h2>
  </nav>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script>
    window.sr = ScrollReveal();
    sr.reveal('.box', {
      duration: 2000,
      origin: 'bottom',
      distance: '300px'
    })
    sr.reveal('.logo', {
      duration: 3000,
      origin: 'right',

    })
    sr.reveal('.txt', {
      duration: 4000,
      origin: 'left',

    })
    sr.reveal('.caroussel', {
      duration: 3000,
      origin: 'top',
      distance: '100px'
    })

    function highlight(target) {
      target.style.borderLeft = "4px solid rgb(240, 124, 16)";
    }

    function borderBot(target) {
      target.style.borderLeft = "4px solid  rgb(24, 10, 224)";
    }

    function borderBt(target) {
      target.style.borderLeft = "4px solid  rgb(172, 11, 236)";
    }
  </script>
</body>

</html>