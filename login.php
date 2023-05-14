<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in to Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page" style="background-color: #d1c286;">
    <div class="login-box">
        <div class="login-logo">
            <a href="admin/index2.html">Silahkan <b>LOGIN</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Admin bukan?</p>

                <form action="progLogin.php" method="post">
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-block"
                                style="background: #d1c286; color: #fff; border: 2px solid #d1c286;">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <p>- Akun Admin -</p>
                    <button onclick="admin()" href="#" class="btn btn-block"
                        style="background-color: #f1c386; color: #fff; border: 2px solid #f1c286;">
                        ADMIN
                    </button>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a onclick="admin()" style="color: #d1c286; cursor: pointer;">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="index.php" class="text-center" style="color: #d1c286;">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src=" admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.min.js"></script>

    <script>
        $(document).ready(function () {
            $('form').submit(function (event) {
                // mengambil nilai input email dan password
                var email = $('input[name="email"]').val();
                var password = $('input[name="password"]').val();

                // validasi input email dan password
                if (email == '') {
                    alert('Email harus diisi');
                    event.preventDefault();
                } else if (password == '') {
                    alert('Password harus diisi');
                    event.preventDefault();
                }
            });
        });

        function admin() {
            alert('Email : admin@login.com password : admin123')
        }
    </script>


</body>

</html>