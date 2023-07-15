<?php
	require_once("connection.php");
	require_once("mainhead.php");
	
	$dept=$_GET['dept'];
	$admyear=$_GET['admyear'];
	$marksyear=$_GET['marksyear'];
	$merit=$_GET['merit'];
?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="container-fluid">
 <form action="" method="get">
	 <h4 class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		Student Merit List</h4>
		<div class="row">
 			<div class="col-6">
				<div class="col-4">
					<label>Department</label>
				</div>
				<div class="col-8">
				<?php
					$se="select * from dept";
					$re=mysqli_query($con,$se);
					?>	
					<select	class="form-control textfield required"id="dept" name="dept">
						<option value="">Select Department</option>
							<?php 
						while($rows=mysqli_fetch_assoc($re)){
						?>
							<option value="<?php echo $rows['id']; ?>" <?php if($dept== $rows['id']){ echo "selected"; }?>><?php echo $rows['deptname'];?></option>
								<?php
							}
							?>
					</select>						
				</div>
			</div>

			<div class="col-6">
					<div class="col-4">
						<label>Admission Year</label>
					</div>
					<div class="col-8">
					<?php
						$se="select * from year";
						$re=mysqli_query($con,$se);
						?>	
						<select	class="form-control textfield required"id="admyear" name="admyear">

						<option value="">Select Admission Year</option>
							<?php 
							while($rows=mysqli_fetch_assoc($re)){
								?>
							<option value="<?php echo $rows['id']; ?>"<?php if($dept== $rows['id']){ echo "selected"; }?>><?php echo $rows['year'];?></option>
							<?php
						}
							?>
						</select>
					</div>
				</div>
				<div class="col-6">
					<div class="col-4">
						<label>Qualification</label>
					</div>
					<div class="col-8">
						<select	class="form-control textfield required"id="marksyear" name="marksyear">
							<option value="">Select Qualification</option>
							<option value="markssc">SSC</option>
							<option value="markhsc">HSC</option>
							<option value="markdiploma">DIPLOMA</option>
						</select>
					</div>
				</div>

				<div class="col-6">
					<div class="col-4">
						<label for="merit">Show Merit List</label>
					</div>
					<div class="col-8">
						<input type="text" placeholder="Enter Your Required marks" class="form-control" id="merit" name="merit" required>
					</div>
				</div>
				<div class="col-12 d-block text-center mt-3">
					<button type="submit" name="meritbtn" class="btn btn-success" id="meritbtn">Display</button>
				</div>
 		</div>
</form>
	<table id="dttable" class="table table-bordered table-hover">
		<thead>
			<tr style='background-color:#3c8dbc;color:white;'>
				<th class="text-center">Id</th>
				<th class="text-center">Name</th>
				<th class="text-center">Department</th>
				<th class="text-center">Admission Year</th> 
				<th class="text-center">SSC Marks</th>
				<th class="text-center">HSC Marks</th>
				<th class="text-center">Diploma Marks</th>
				
			</tr>
		</thead>
		<tbody>
		<?php
			$where="where s.$marksyear >='$merit' and s.admyear='$admyear' and s.dept='$dept'";
			$sql = "select s.*,d.deptname,y.year from tblstudent s 
			join dept d on s.dept=d.id
			join year y on s.admyear=y.id $where";
			$res = mysqli_query($con,$sql);
			$i=1;
			while($row = mysqli_fetch_assoc($res)){
				$dfdsfasf=json_encode($row);
				?>
				<tr>
					<td class='text-center'><?php echo $i++; ?></td>
					<td><?php echo $row['studname']; ?></td>
					<td><?php echo $row['deptname']; ?></td>
					<td><?php echo $row['year']; ?></td>
					<td><?php echo $row['markssc']; ?></td>
                    <td><?php echo $row['markhsc']; ?></td>
					<td><?php echo $row['markdiploma']; ?></td>
					
					
				</tr>
			<?php  } ?>
		</tbody>
	</table>
	<script>
		$(document).ready(function(){
			var table=$('#dttable').DataTable({
				'paging'      : true,
				'lengthChange': true,
				'searching'   : true,
				'ordering'    : true,
				'info'        : true,
				'responsive'  : true,
				'autoWidth'   : true,
				"lengthMenu": [[10, 25, 50, 100, 250, 500, 1000, -1], [10, 25, 50, 100, 250, 500, 1000, "All"]]
			});
		});
	</script>
</div>
</main>
<?php require_once('mainfooter.php'); ?>