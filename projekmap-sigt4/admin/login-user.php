<?php
/**
 * Cara Membuat Website
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>Halaman Login</title>
<style>
    .login-from {
    margin-top: 80px;
    border: 1px solid #ddd;
}
 
.login-from h4 {
    font-size: 26px;
    margin-bottom: 20px;
    margin-top: 20px;
}
 
p.return-home {
    margin: 20px 0;
}
</style>
<link rel="stylesheet" href="./../assets/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="./../assets/login.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4 login-from">
            <h4><em class="glyphicon glyphicon-log-in"></em>  Halaman Login</h4>
 
            <?php 
            /**
             * Pesan Error Bila terjadi kegagalan dalam login
             */
            if (isset($_GET['error']) && $_GET['error'] == 'salah') {
                echo '<div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Wrong ! </strong> Username dan Password tidak ditemukan
                       </div>'; 
            }?>
            <form action="check-login.php" method="post">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" />
                </div>
                <div class="text-right">
                    <button class="btn btn-primary">Login</button>
                </div>
            </form>
            <p class="return-home"><a href="./../"><em class="glyphicon glyphicon-menu-left"></em>Halaman Depan</a></p>      
        </div>
    </div>
</div> <!-- End container -->
 
    <!-- Script js -->
    <script src="./../assets/jquery/jquery.min.js"></script>
    <script src="./../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- End Script -->
</body>
</html>