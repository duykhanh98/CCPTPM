
<?php
include ('config.php');
ob_start();
if(isset($_SESSION['dangnhap']))
{
    //echo  'Xin chào '.$_SESSION['dangnhap'];
    header ('location:index.php');
}
if (isset($_POST['dangnhap']))
{
    $taikhoan   = $_POST['taikhoan'];
    $matkhau    = $_POST['matkhau'];
    $sql="  SELECT * FROM user 
            WHERE user_name = '$taikhoan' and password = '$matkhau'";
    $run=mysqli_query($conn, $sql);
    $dem=mysqli_num_rows($run);
    if($dem == 0)
    {
            echo '<script>alert("Sai tài khoàn hoặc mật khẩu")</script>';
    }else{
        $_SESSION['dangnhap']=$taikhoan;
        header ('location:index.php');
    }
}
?>
<p id="motasanpham">Đăng nhập thành viên    </p>
            
           <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-5">
                <label>Tên đăng nhâp</label>
                <input class="form-control" type="text" name="taikhoan" placeholder="Username..." required>
                <label>Mật khẩu</label>
                <input class="form-control" type="password" name="matkhau" placeholder="Password..." required>
                <button class="btn btn-danger mt-2" type="submit" name="dangnhap">Đăng nhập</button>
                </div>
            </div>
            </form>

        <?php 
        ob_end_flush();
         ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" /></div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" /></div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html">Forgot Password?</a><a class="btn btn-primary" href="index.php">Login</a></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>



