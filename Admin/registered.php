<?php include("header.php"); ?>
<?php 
    include ('config.php');
    if (isset($_POST['registered']))
    {
        $username = $_POST['Username'];
        // $email = $_POST['Email'];
        // $password = md5($_POST['Password']);
        // $password1 = md5($_POST['Password1']);
		$password = $_POST['Password'];
		$password1 = $_POST['Password1'];
        $full_name = $_POST['Fullname'];
        if($password != $password1){
        	 echo '<script>alert("Mật khẩu không trùng nhau!")</script>';
        }else{
        	$sql = " INSERT INTO user (user_name, password, full_name)
                VALUES ('$username', '$password','$full_name')";
        $run = mysqli_query($conn, $sql);
        	// header("Location:Index.php");
			echo '<script>alert("Bạn đã đăng ký tài khoản thành công, mời đăng nhập.")</script>';
        }
        
    }
?>

<div class="content">
				<!--login-->
<div class="login">
	<div class="main-agileits">
		<div class="form-w3agile form1">
			<h3>Đăng ký</h3>
			<form action="#" method="post">
				<div class="key">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" value="Nhập tên tài khoản" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
					<div class="clearfix"></div>
				</div>
				<div class="key">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<input type="text" value="Nhập email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<div class="clearfix"></div>
				</div>
				<div class="key">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" value="Họ và Tên" name="Fullname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Fullname';}" required="">
					<div class="clearfix"></div>
				</div>
				<div class="key">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input type="password" value="Nhâp mật khẩu" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
					<div class="clearfix"></div>
				</div>
				<div class="key">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input type="password" value="Nhập lại mật khẩu" name="Password1" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
					<div class="clearfix"></div>
				</div>
				<input type="submit" name="registered" value="Đăng ký">
			</form>
		</div>
				
	</div>
</div>
				<!--login-->
</div>

<?php include("footer.php"); ?>