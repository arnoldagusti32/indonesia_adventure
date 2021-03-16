<?php
ob_start();
session_start();
$koneksi = new mysqli("sql308.epizy.com", "epiz_27456010", "k6mTdJdqfC", "epiz_27456010_indonesiaadventure");

if (@$_SESSION['admin'] || @$_SESSION['user']) {
    header("location:index.php");
} else {
?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <title>Halaman Login</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    </head>

    <body>
        <div class="container">
            <div class="row text-center ">
                <div class="col-md-12">
                    <br /><br />
                    <h2> Login Administrator</h2>
                    <img src="img/logo_login.jpg" wight="300px" height="236px">
                    <br />
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong> Masukan Username dan Password </strong>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST">
                                <br>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="username" class="form-control" placeholder="Username" required />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required />
                                </div>
                                <input type="submit" name="login" value="Login" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>

    </body>

    </html>

    <?php

    if (isset($_POST['login'])) {
        $username = @$_POST['username'];
        $password = @$_POST['password'];

        $sql = $koneksi->query("SELECT * FROM user WHERE username='$username' AND password='$password'");

        $data = $sql->fetch_assoc();
        $ketemu = $sql->num_rows;

        if ($ketemu >= 1) {

            session_start();
            if ($data['level'] == "admin") {
                $_SESSION['admin'] = $data['id'];
                header("location:index.php");
            } else if ($data['level'] == "user") {
                $_SESSION['admin'] = $data['id'];
                header("location:index.php");
            }
        } else {
    ?>

            <script type="text/javascript">
                alert("Login Gagal! \nUsername dan Password SALAH!");
            </script>

<?php
        }
    }
}

?>