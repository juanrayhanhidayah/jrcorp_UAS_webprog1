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
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" style="margin-bottom: 20px;">
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
    <div class="container" style="margin-top: 50px !important; margin-bottom:20px;">
        <div class="greets" style="margin-bottom: 20px; padding:6px;">
            <h3 class="text-center">Dashboard</h3>
            <hr class="mt-2 mb-3" />
        </div>
        <a href="buat_layanan.php" class="btn btn-primary">Buat baru</a>
        <div class="table table-responsive table-striped" style="margin-top: 15px;">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col" style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 0;
                    while ($row = $q->fetch()) {
                        $id_layanan = $row["id"];
                        $title = $row["title"];
                        $thumbnail = $row["thumbnail"];
                        $deskripsi = $row["deskripsi"];
                        ++$count;
                    ?>
                        <tr>
                            <th scope="row"><?php echo $count;  ?>
                            </th>
                            <td><?php echo $title;  ?>
                            </td>
                            <td>
                                <form action="edit_layanan.php" method="POST">
                                    <input type="hidden" name="id_layanan" value="<?php echo $id_layanan; ?>" />
                                    <input type="hidden" name="title" value="<?php echo $title; ?>" />
                                    <input type="hidden" name="deskripsi" value="<?php echo $deskripsi; ?>" />
                                    <input type="hidden" name="thumbnail" value="<?php echo $thumbnail; ?>" />
                                    <button type="submit" class="btn btn-primary" style="width: 100%; margin-bottom:10px;">Edit</button>
                                </form>
                                <form action="config/hapus.php" method="POST">
                                    <input type="hidden" name="id_layanan" value="<?php echo $id_layanan; ?>" />
                                    <button type="submit" class="btn btn-danger" style="width: 100%;">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php };  ?>

                </tbody>
            </table>
        </div>
        <hr class="mt-2 mb-3" />
    </div>

    <footer>
        <nav class="navbar navbar-light fixed-bottom" style="background-color: rgb(241, 241, 241);">
            <h6 class="text-center mx-auto">@Copyright by 18111075_JuanRayhanHidayah_TIFRP18CIDB_UASWEB1</h2>
        </nav>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

</body>

</html>