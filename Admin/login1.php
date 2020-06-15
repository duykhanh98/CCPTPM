<?php 

include("header.php");
?>
<?php
include ('config.php');
    if(isset($_SESSION['dangnhap']))
    {
//echo  'Xin chào '.$_SESSION['dangnhap'];
        header ('location:index.php');
    }
    if (isset($_POST['dangnhap']))
    {
        $taikhoan   = $_POST['taikhoan'];
        $matkhau    = md5($_POST['matkhau']);
        $sql="  SELECT * FROM user 
                WHERE user_name = '$taikhoan' and password = '$matkhau'";
        $run = mysqli_query($conn, $sql);
        $dem = mysqli_num_rows($run);
        if($dem == 0)
        {
                echo '<script>alert("Sai tài khoàn hoặc mật khẩu")</script>';
        }else{
            $_SESSION['dangnhap']=$taikhoan;
            header ('Location:Index.php');
        }
    }
?>
<div class="content">
			<div class="login">
				<div class="main-agileits">
					<div class="form-w3agile">
						<h3>ĐĂNG NHẬP</h3>
						<form action="" method="post" enctype="multipart/form-data">
							<div class="key">
								<i class="fa fa-user" aria-hidden="true"></i>
								<input type="text" value="Nhập tên tài khoản" name="taikhoan" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input type="password" value="Password" name="matkhau" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
								<div class="clearfix"></div>
							</div>
							<input type="submit" name="dangnhap" value="Đăng nhập">
						</form>
					</div>
					<div class="forg">
						<a href="#" class="forg-left">Quên mật khẩu</a>
						<a href="registered.php" class="forg-right">Đăng ký</a>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
</div>
<?php include("footer.php"); ?>