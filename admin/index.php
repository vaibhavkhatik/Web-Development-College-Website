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
	if(isset($_POST['login'])){
  		$email=trim($_POST['email']);
		$pwd=trim($_POST['pwd']);
		$remember=trim($_POST['remember']);
		
		$sql = "SELECT idregister,mobile FROM tblregister where email='".$email."' and pwd='".$pwd."'";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {
			echo "<script> alert('Login Successfully...!'); </script>";
			$row = mysqli_fetch_assoc($result);
			$idregister=$row["idregister"];
 			$otp=rand(1111,9999);
			$_SESSION['idregister']=$row["idregister"];
			$_SESSION['mobile']=$row["mobile"];
			
			$sqlnew = "update tblregister set otp='".$otp."'where idregister='".$idregister."'";
			$res = mysqli_query($con, $sqlnew);
			echo "<script> window.location='otp.php'; </script>";
 		} else {
			echo "<script> alert('Please Valid Username & Password.'); </script>";
			echo "<script> window.location='index.php'; </script>";
 		}

 	}
	?>
	<div class="container bg-white rounded-3">
		<div class="row m-5 p-5">
			<h2 class="text-center text-uppercase">Login</h2>
			<div class="col-sm-6">
				<form action="" method="post">
					<div class="mb-3 mt-3">
					  <label for="email">Email:</label>
					  <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" autofocus required>
					</div>
					<div class="mb-3">
					  <label for="pwd">Password:</label>
					  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
					</div>
					<div class="form-check mb-3">
					  <label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="remember"> Remember me
					  </label>
					</div>
					<button type="submit" name="login" id="login" class="btn btn-primary">Login</button>
					<div class="mt-3">
						<a href="register.php" class="text-primary text-decoration-none">Create a New Account ? </a>
					</div>
				  </form>
			</div>  
			<div class="col-sm-6">
				<img src="img/login.png" class="img-responsive img-fluid" >
			</div>  
		</div>  
	</div>  
</body>
</html>
