<?php
	require_once("connection.php");
	 if(isset($_POST['deptsearch']) && isset($_POST['yearsearch'])){
		?>
		<table class="table table-bordered table-hover">
			<thead>
				<tr style='background-color:#3c8dbc;color:white;'>
					<th class="text-center">SI</th>
					<th class="text-center">Student Name</th>
					<th class="text-center">Date</th>
					<th class="text-center">Status</th>
					<th class="text-center">Desc</th>
					<th class="text-center">Dept</th>
					<th class="text-center">Year</th>
				</tr>
			</thead>
			<tbody>
			<?php
					$abc=" where ss.dept='".$_POST['deptsearch']."' and ss.admyear='".$_POST['yearsearch']."'";
					$sql = "select s.*,ss.studname,d.deptname,y.year as adyear from studattendance s 
					join tblstudent ss on s.studid=ss.id
					join dept d on ss.dept=d.id 
					join year y on ss.admyear=y.id  
 					$abc";
					$res = mysqli_query($con,$sql);
					$i=0;$ii=1;
					while($row = mysqli_fetch_assoc($res)){
						$todaydate=date('Y-m-d');
						$studid=$row['id'];
						$statusset=$row['status'];
 						?>
						<tr>
							<td class='text-center'><?php echo $ii++; ?></td>
							<td><?php echo $row['studname']; ?></td>
							<td><?php echo $todaydate; ?></td>
							<td class='text-center'>
								<?php if($statusset == "P"){ echo "P"; } ?>
								<?php if($statusset == "A"){ echo "A"; } ?>
								<?php if($statusset == "H"){ echo "H"; } ?>
							</td>
 							<td><?php echo $row['description']; ?></td>
							<td><?php echo $row['deptname']; ?></td>
							<td><?php echo $row['adyear']; ?></td> 
							
						</tr>
					<?php  $i++; } ?>
					<input type="hidden" name="cntrows" value="<?php echo $i; ?>">
				</tbody>
			</table>
			<div class="col-12 text-center d-block mt-3">

			</div>
		<?php } ?>