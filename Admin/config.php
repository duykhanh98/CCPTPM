<?php 

//$conn= mysqli_connect('localhost','root','','dacn_bookstore') or die('Kết nối thất bại !!!!!');


$conn = mysqli_connect('localhost','root','','ccptpm');
mysqli_set_charset($conn, 'UTF8');

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
