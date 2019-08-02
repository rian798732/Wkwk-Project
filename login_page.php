<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body class="login-body">
    <div class="login-content">
        <span class="text-bold text-welcome">SELAMAT DATANG</span><br/>
        <span>Belum punya akun?</span> <a class="text-underline" style="color:white" href="#">Daftar Disini</a>
        <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<div style='margin-bottom: -40px;' class='alert alert-danger alert-center' role='alert'><span></span>Maaf, Login gagal. Username atau Password Salah</div>";
            }
        }
        ?>
        <div class="panel panel-default margin-top-10 form-login">
            <form action="login_act.php" method="post">
                <div>
                    <div class="input-group margin-top-50">
                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                        <input type="text" class="form-control" placeholder="Username" name="uname">
                    </div>
                    <div class="input-group margin-top-5">
                        <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                        <input type="password" class="form-control" placeholder="Password" name="pass">
                    </div>
                    <div class="input-group">			
                        <input type="submit" class="btn btn-primary button-center" value="Login">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>