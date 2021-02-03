<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registrasi</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 form-container mx-auto text-center align-self-center" style="margin-top: 1.5rem;">
                <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box rounded shadow-lg" style="background-color: white; padding: 1rem;">
                    <div class="logo mb-3">
                        <img src="image/logo.png" alt="" width="80px" height="80px">
                    </div>
                    <div class="heading mb-4">
                        <h4 style="color: black;">Registrasi</h4>
                    </div>
                    <form action="config/register.php" method="POST">
                        <div class="form-input">
                            <input id="nama" name="nama" type="text" placeholder="" required>
                            <label for="nama" class="form__label">Nama</label>
                        </div>
                        <div class="form-input">
                            <input type="email" placeholder="" id="email" name="email" required>
                            <label for="email" class="form__label">E-mail</label>
                        </div>
                        <div class="form-input">
                            <input type="password" id="password" name="password" placeholder="" required>
                            <label for="password" class="form__label">Password</label>
                        </div>

                        <div class="text-center mb-3">
                            <button type="submit" class="btn">Daftar</button>
                        </div>
                        <div class="text-right mb-3">
                            <p>Sudah Punya Akun ? <a href="login.php" class="forget-link">Login</a> </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.form-box', {
            duration: 3000,
            origin: 'top',
            distance: '300px'
        })
    </script>
</body>

</html>