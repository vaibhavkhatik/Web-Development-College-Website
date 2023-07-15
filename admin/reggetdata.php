<?php
	require_once("connection.php");
?>
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
				<th class="text-center">DOB</th>
                <th class="text-center">Cast</th>
				<th class="text-center">Address</th>
				<th class="text-center">Mobile No.</th>
                <th class="text-center">Adhar No.</th>
				<th class="text-center">Email ID</th>
				<th class="text-center">Profile</th>
                <th class="text-center">Update</th>
				<th class="text-center">Delete</th>
				<th class="text-center">Status</th>

				
			</tr>
		</thead>
		<tbody>
		<?php
			$sql = "select s.*,d.deptname,y.year from tblstudent s 
			join dept d on s.dept=d.id
			join year y on s.admyear=y.id";
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
					<td><?php echo $row['dob']; ?></td>
					<td><?php echo $row['cast']; ?></td>
                    <td><?php echo $row['address']; ?></td>
					<td><?php echo $row['mobile']; ?></td>
					<td><?php echo $row['adhar']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td class='text-center'>
						<img src="<?php echo $row['profile']; ?>" class="img img-responsive" width="100px" height="50px">
					</td>
					<td class='text-center'>
						<button type="button" class="btn btn-primary pull-left" data-bs-toggle="modal" data-bs-target="#modaldefault"  
						onclick='callupdate("Update",<?php echo $dfdsfasf; ?>);'><i class="fa fa-edit"></i> Update </button>
					</td>
					<td class='text-center'> 
						<button type="button" class="btn btn-danger pull-left" onclick='callupdate("Delete",<?php echo $dfdsfasf; ?>);CRUDOPAjax();'><i class="fa fa-trash"></i> Delete </button>
					</td>
					<td><?php echo $row['status']; ?></td>
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