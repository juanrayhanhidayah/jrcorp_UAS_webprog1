<?php
include 'config/data_layanan.php';
include 'session.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

  <title>JRcorp</title>
</head>

<body>
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

  <div class="jumbotron banner" style="padding-top: 10%;
  padding-bottom: 10%; -webkit-background-size: 100% 100%; -moz-background-size: 100% 100%; -o-background-size: 100% 100%; background-size: 100% 100%; background-image: url(https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE4r4UE?ver=4c65&q=60&m=6&h=472&w=1259&b=%23FFFFFFFF&l=f&o=t&x=1440&y=250&aim=true)">
    <div class="container push-spaces" style="margin-top: 8rem;">
      <h1 class="display-7">Mencari aplikasi finance ? Anda berada <br> di tempat yang tepat</h1>
      <p class="lead">Kemudahan ada di tangan Anda</p>
    </div>
  </div>
  <div class="container" style="margin-top: 60px;">
    <div class="row">
      <div class="col">
        <h2 class="text-center txt">Cloud produktivitas untuk bekerja dan kehidupan sehari-hari</h2>
        <p class="text-center txt1">
          <a href="image/jumbo.jpg">Pelajari apa manfaatnya bagi anda</a>
        </p>
      </div>
    </div>
    </br>

    <div class="row justify-content-md-center">
      <div class="col-md-auto ic1" style="margin-bottom: 2rem;">
        <img src="image/accounting.png" class="rounded mx-auto d-block" alt="" width="80px" width="80px">
        <p class="text-center">Accounting</p>
      </div>
      <div class="col-md-auto ic2" style="margin-bottom: 2rem;">
        <img src="image/analytics.png" alt="" class="rounded mx-auto d-block" width="80px">
        <p class="text-center">Analytics</p>
      </div>
      <div class="col-md-auto ic3" style="margin-bottom: 2rem;">
        <img src="image/bar.png" alt="" class="rounded mx-auto d-block" width="80px">
        <p class="text-center">Statistics</p>
      </div>
      <div class="col-md-auto ic4" style="margin-bottom: 2rem;">
        <img src="image/server.png" alt="" class="rounded mx-auto d-block" width="80px">
        <p class="text-center">Server </br> Integration</p>
      </div>
      <div class="col-md-auto ic5" style="margin-bottom: 2rem;">
        <img src="image/industrial-design.png" alt="" class="rounded mx-auto d-block" width="80px">
        <p class="text-center">Designed </br> for Industry</p>
      </div>
      <div class="col-md-auto ic6" style="margin-bottom: 2rem;">
        <p class="text-center" style="margin-top: 20px;">dan aplikasi </br> lainnya!</p>
      </div>
    </div>
    <div class="row justify-content-center align-center" style="margin-top: 15px;">
      <?php
      while ($row = $q->fetch()) {
        $id_layanan = $row["id"];
        $title = $row["title"];
        $thumbnail = $row["thumbnail"];
        $deskripsi = $row["deskripsi"];
      ?>


        <div class="col-sm-4" style="margin-bottom: 2rem;">
          <div class="card shadow-lg box text-left" onclick="borderBot(this)">
            <img src="<?php echo $thumbnail; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $title;  ?>
              </h5>
              <p class="card-text text-justify" style="overflow: hidden; display:-webkit-box; -webkit-line-clamp: 4; -webkit-box-orient:vertical"><?php echo $deskripsi;  ?>
              </p>
              <form action="detail_pages.php" method="POST">
                <input type="hidden" name="id_layanan" value="<?php echo $id_layanan; ?>">
                <input type="hidden" name="title" value="<?php echo $title; ?>">
                <input type="hidden" name="thumbnail" value="<?php echo $thumbnail; ?>">
                <input type="hidden" name="deskripsi" value="<?php echo $deskripsi; ?>">
                <button type="submit" class="btn btn-primary">Selengkapnya</button>
              </form>
            </div>
          </div>
        </div>
      <?php }  ?>


    </div>
  </div>
  <footer>
    <nav class="navbar navbar-light" style="background-color: rgb(241, 241, 241);">
      <h6 class="text-center mx-auto">@Copyright by 18111075_JuanRayhanHidayah_TIFRP18CIDB_UASWEB1</h2>
    </nav>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script>
    window.sr = ScrollReveal();
    sr.reveal('.box', {
      duration: 3500,
      origin: 'bottom',
      distance: '300px'
    })
    sr.reveal('.ic1', {
      duration: 5000,
      origin: 'left',
      distance: '300px'
    })
    sr.reveal('.ic2', {
      duration: 4500,
      origin: 'left',
      distance: '300px'
    })
    sr.reveal('.ic3', {
      duration: 4000,
      origin: 'left',
      distance: '300px'
    })
    sr.reveal('.ic4', {
      duration: 3500,
      origin: 'left',
      distance: '300px'
    })
    sr.reveal('.ic5', {
      duration: 3000,
      origin: 'left',
      distance: '300px'
    })
    sr.reveal('.ic6', {
      duration: 2500,
      origin: 'left',
      distance: '300px'
    })
    sr.reveal('.txt', {
      duration: 4000,
      origin: 'left',
      distance: '300px'
    })
    sr.reveal('.banner', {
      duration: 3000,
      origin: 'top',
      distance: '100px'
    })
    sr.reveal('.display-7', {
      duration: 4500,
      origin: 'left',
      distance: '300px'
    })
    sr.reveal('.lead', {
      duration: 5500,
      origin: 'left',
      distance: '300px'
    })
    sr.reveal('.txt', {
      duration: 2000,
      origin: 'top',
      distance: '300px'
    })
    sr.reveal('.txt1', {
      duration: 3000,
      origin: 'top',
      distance: '300px'
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