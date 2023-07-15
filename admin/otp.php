<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-info">
	<?php 
	require_once("connection.php");
	if(isset($_POST['loginotp'])){
  		$otp=trim($_POST['otp']);
		$sql = "SELECT idregister FROM tblregister where otp='".$otp."' and idregister='".$_SESSION['idregister']."'";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {
			echo "<script> alert('OTP Verify Successfully...!'); </script>";
 			echo "<script> window.location='dashboard.php'; </script>";
 		} else {
			echo "<script> alert('Please Enter Valid OTP'); </script>";
			echo "<script> window.location='index.php'; </script>";
 		}
 	}
	// only for otp show start code
	$sqln = "SELECT otp FROM tblregister where idregister='".$_SESSION['idregister']."' and mobile='".$_SESSION['mobile']."'";
	$resultn = mysqli_query($con, $sqln);
	$rownew = mysqli_fetch_assoc($resultn);
	$otpshow=$rownew["otp"];
	// only for otp show start end
	?>
	<div class="container bg-white rounded-3">
		<div class="row m-5 p-5">
			<h2>OTP Verification</h2>
			<div class="col">
				<form action="" method="post">
					<div class="mb-3 mt-3">
					  <label for="otp" class="mb-3">OTP: Verfication Code send on <?php echo "XXXXXX".substr($_SESSION['mobile'],6); ?></label>
					  <label for="otp" class="mb-3">Temp Verfication Code Show : <?php echo $otpshow; ?></label>
					  <input type="text" class="form-control" id="otp" placeholder="Enter OTP" name="otp" autofocus required>
					</div>
					<button type="submit" name="loginotp" id="loginotp" class="btn btn-primary">Verify</button>
 				</form>
			</div>  
			<div class="col">
				<img src="img/key.png" class="img-responsive img-fluid">
			</div>  
		</div>  
	</div>  
</body>
</html>
