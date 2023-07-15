<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php 
include_once('connection.php');
//edit get data start
if($_GET['idregister']!=''){
	$sql = "Select * from tblregister WHERE idregister ='".$_GET['idregister']."'";
	$result=mysqli_query($con, $sql);
	$rowedit = mysqli_fetch_assoc($result);
 }
 //edit get data End
?>

<body class="bg-info">
	<div class="container bg-white rounded-3">
		<div class="row m-5 p-5">
			<h2 class="text-center">Registration</h2>
			<div class="col-sm-6">
				<img src="img/register.png" class="img-responsive img-fluid mx-auto" >
			</div> 
			<div class="col-sm-6">
				<form action="save.php" method="post">
					<div class="mb-3 mt-3">
					  <label for="fname">Name:</label>
					  <input type="text" class="form-control" id="fname" placeholder="Enter Name" name="fname" autofocus required value="<?php echo $rowedit['fname']; ?>">
					</div>
					<div class="mb-3 mt-3">
					  <label for="mobile">Mobile:</label>
					  <input type="tel" class="form-control" id="mobile" placeholder="Enter Mobile No" name="mobile" required value="<?php echo $rowedit['mobile']; ?>">
					</div>
					<div class="mb-3 mt-3">
					  <label for="email">Email / Username:</label>
					  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required value="<?php echo $rowedit['email']; ?>">
					</div>
					<div class="mb-3">
					  <label for="pwd">Password:</label>
					  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required value="<?php echo $rowedit['pwd']; ?>">
					</div>
					<div class="form-check mb-3">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" onclick="showpassword()">
						<label class="form-check-label" for="flexCheckDefault">
							Show Password
						</label>
					</div>
					<div class="mb-3">
					  <label for="cpwd">Confirm Password:</label>
					  <input type="password" class="form-control" id="cpwd" placeholder="Enter password" name="cpwd" required value="<?php echo $rowedit['cpwd']; ?>">
					</div>

					<input type="hidden" id="idregister" name="idregister" value="<?php echo $_GET['idregister']; ?>">

					<?php if($_GET['idregister']!='' && $_GET['option']=="edit"){ ?>
						<button type="submit" name="editpage" id="editpage" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</button>
					<?php }else  if($_GET['idregister']!='' && $_GET['option']=="delete"){ ?>
						<button type="submit" name="deletepage" id="deletepage" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
					<?php }else{ ?>
						<button type="submit" name="register" id="register" class="btn btn-primary"><i class="fa fa-user"></i> Register</button>
						<?php } ?>
					<div class="mt-3">
						<a href="index.php" class="text-primary text-decoration-none">Already Account ? </a>
					</div>
				  </form>
			</div>  
			<<script>
				function showpassword(){
 					var x = document.getElementById("pwd");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
					
 					var xy = document.getElementById("cpwd");
					if (xy.type === "password") {
						xy.type = "text";
					} else {
						xy.type = "password";
					}
 				}
			</script>
		</div>  
	</div>  
</body>
</html>
