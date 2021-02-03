<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="toast/toastr.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 form-container mx-auto text-center align-self-center" style="margin-top: 1.5rem;">
                <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box box rounded shadow-lg" style="padding: 1rem;">
                    <div class="logo mb-3">
                        <img src="image/logo.png" alt="" width="80px" height="80px">
                    </div>
                    <div class="heading mb-4">
                        <h4 style="color: black;">Login Form</h4>
                    </div>
                    <form action="config/login.php" method="POST">
                        <div class="mb-3" style="color: #777;">Login dengan : </div>
                        <a href="https://web.facebook.com/login/" class="btn btn-social btn-facebook" style="text-decoration: none;">Facebook</a>
                        <a href="https://accounts.google.com/signin/v2/identifier?hl=en&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="btn btn-social btn-google" style="text-decoration: none;">Google</a>
                        <a href="https://login.yahoo.com/?.intl=id&src=noSrc&specId=yidReg&done=https%3A%2F%2Fwww.yahoo.com&intl=id&prompt=login" class="btn btn-social btn-yahoo" style="text-decoration: none;">Yahoo</a>
                        <div class="form-input">
                            <input type="email" placeholder="" id="email" name="email" required>
                            <label for="Email" class="form__label">E-mail</label>
                        </div>
                        <div class="form-input">
                            <input type="password" id="password" name="password" placeholder="" required>
                            <label for="Password" class="form__label">Password</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 d-flex">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox1">
                                    <label class="custom-control-label text-dark" for="checkbox1">Ingat saya</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="lupa.html" class="forget-link">Lupa Password</a>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <button name="login" type="submit" class="btn">Login</button>
                        </div>
                        <div class="text-right mb-3">
                            <p>Belum Punya Akun ? <a href="register.php" class="forget-link">Daftar</a> </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="js/login.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="toast/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
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