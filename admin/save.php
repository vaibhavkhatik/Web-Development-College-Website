<?php 
	require_once("connection.php");
 	//insert data start
 	if(isset($_POST['register'])){
		$fname=trim($_POST['fname']);
		$mobile=trim($_POST['mobile']);
		$email=trim($_POST['email']);
		$pwd=trim($_POST['pwd']);
		$cpwd=trim($_POST['cpwd']);
		$datetime=date('Y-m-d H:i:s');
		$sql = "INSERT INTO tblregister (fname, mobile, email, pwd, cpwd, timedata) VALUES ('".$fname."', '".$mobile."', '".$email."','".$pwd."', '".$cpwd."', '".$datetime."')";
		if(mysqli_query($con, $sql)) {
			$last_id = mysqli_insert_id($con); 	//get last inserted id
			echo "<script> alert('Registration Successfully...!'); </script>";
			echo "<script> window.location='index.php'; </script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
 	}
	 //insert data start
?>
<?php 
	//update data start
 	if(isset($_POST['editpage'])){
		$idregister=trim($_POST['idregister']);
		$fname=trim($_POST['fname']);
		$mobile=trim($_POST['mobile']);
		$email=trim($_POST['email']);
		$pwd=trim($_POST['pwd']);
		$cpwd=trim($_POST['cpwd']);
		$datetime=date('Y-m-d H:i:s');
		$sql = "UPDATE tblregister SET fname='".$fname."',mobile='".$mobile."',email='".$email."',pwd='".$pwd."',cpwd='".$cpwd."',timedata='".$datetime."' WHERE idregister='".$idregister."'";
		if (mysqli_query($con, $sql)) {
 			echo "<script> alert('Record Update Successfully...!'); </script>";
			echo "<script> window.location='dashboard.php'; </script>";
		} else {
			echo "Error updating record: " . mysqli_error($con);
		}
		
  	}
	 //update data start
?>
<?php 
	//Delete data start
 	if(isset($_POST['deletepage'])){
		$idregister=trim($_POST['idregister']);
 		$sql = "delete from tblregister WHERE idregister='".$idregister."'";
		if (mysqli_query($con, $sql)) {
 			echo "<script> alert('Record Delete Successfully...!'); </script>";
			echo "<script> window.location='dashboard.php'; </script>";
		} else {
			echo "Error Deleting record: " . mysqli_error($con);
		}
		
  	}
	 //Delete data start
?>