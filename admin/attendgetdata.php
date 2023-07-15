<?php
	require_once("connection.php");
	if(isset($_POST['save'])){
		$cntrows=$_POST['cntrows']; 
		for($i=0;$i<$cntrows;$i++){
			$attendance=$_POST['attendance_'.$i]; 
			$studentid=$_POST['studentid_'.$i];
			$description=$_POST['desc_'.$i];
			$attdate=date('Y-m-d');
			$updatetime=date('Y-m-d:H:i:s');
			$insertdatetime=date('Y-m-d:H:i:s');
			
			$sql = "select id from studattendance where studid='$studentid' and attdate='$attdate'";
			$res = mysqli_query($con,$sql);
			if(mysqli_num_rows($res) > 0){
				$sql="update studattendance set status='$attendance', description='$description', updatetime='$updatetime' where  studid='$studentid' and attdate='$attdate'";
				mysqli_query($con,$sql);
				$returndata = mysqli_affected_rows($con);
				if($returndata){
					$sdfgvfdsghtr=1;
				}else{
					$sdfgvfdsghtr=0;
				}
			}else{
				$sql="insert into studattendance (studid, attdate,status, description,insertime,updatetime) Values('$studentid', '$attdate','$attendance', '$description','$updatetime', '$insertdatetime')";
				mysqli_query($con,$sql);
				$returndata=mysqli_insert_id($con);
				if($returndata){
					$sdfgvfdsghtr=1;
				}else{
					$sdfgvfdsghtr=0;
				}
			} 
		}
		echo "<script>alert('Attedance Save Successfully'); window.location.href=window.location.href;</script>";
	} 
	if(isset($_POST['deptsearch']) && isset($_POST['yearsearch'])){
		?>
		<table class="table table-bordered table-hover">
			<thead>
				<tr style='background-color:#3c8dbc;color:white;'>
					<th class="text-center">SI</th>
					<th class="text-center">Name</th>
					<th class="text-center">DEPT</th>
					<th class="text-center">YEAR</th>
					<th class="text-center">DATE</th>
					<th class="text-center">STATUS</th>
					<th class="text-center">DESC</th>
				</tr>
			</thead>
			<tbody>
			<?php
					$abc=" where s.dept='".$_POST['deptsearch']."' and s.admyear='".$_POST['yearsearch']."'";
					$sql = "select s.*,d.deptname,y.year as adyear from tblstudent s 
					join dept d on s.dept=d.id 
					join year y on s.admyear=y.id 
					$abc";
					$res = mysqli_query($con,$sql);
					$i=0;$ii=1;
					while($row = mysqli_fetch_assoc($res)){
						$todaydate=date('Y-m-d');
						$studid=$row['id'];$statusset='';$description="";
						$sqll = "select status,description from studattendance where studid='$studid' and attdate='$todaydate'";
						$rels = mysqli_query($con,$sqll);
						if(mysqli_num_rows($rels) > 0){
							$rowstt=mysqli_fetch_assoc($rels);
							$statusset=$rowstt['status'];
							$description=$rowstt['description'];
						}
						?>
						<tr>
							<td class='text-center'><?php echo $ii++; ?></td>
							<td><?php echo $row['studname']; ?></td>
							<td><?php echo $row['deptname']; ?></td>
							<td><?php echo $row['adyear']; ?></td>
							<td><?php echo $todaydate; ?></td>
							<td class='text-center'>
								<input type="radio" name="attendance_<?php echo $i; ?>" value="P" <?php if($statusset == "P"){ echo "checked"; } ?> checked> PRESENT
								<input type="radio" name="attendance_<?php echo $i; ?>"value="A" <?php if($statusset == "A"){ echo "checked"; } ?>> ABSENT
								<input type="radio" name="attendance_<?php echo $i; ?>"value="H" <?php if($statusset == "H"){ echo "checked"; } ?>> HALF DAY
								<input type="hidden" name="studentid_<?php echo $i; ?>" value="<?php echo $studid; ?>">
							</td>
							<td class='text-center'>
								<input type="text" class="form-control" name="desc_<?php echo $i; ?>" value="<?php echo $description; ?>">
							</td>
						</tr>
					<?php  $i++; } ?>
					<input type="hidden" name="cntrows" value="<?php echo $i; ?>">
				</tbody>
			</table>
			<div class="col-12 text-center d-block mt-3">
				<input type="submit" name="save" class="btn btn-primary" value="Save">
			</div>
		<?php } ?>