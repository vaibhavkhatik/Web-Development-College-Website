<?php
	require_once("connection.php");
?>
	<table id="dttable" class="table table-bordered table-hover">
		<thead>
			<tr style='background-color:#3c8dbc;color:white;'>
				<th class="text-center">SI</th>
				<th class="text-center">Student Id</th>
 				<th class="text-center">Type Of Leave</th>
				<th class="text-center">Reason</th>
				<th class="text-center">Description</th>
				<th class="text-center">Teacher Id</th>
				<th class="text-center">Status</th>
				<th class="text-center">Insert Time</th>
				<th class="text-center">Update Time</th>
				<th class="text-center">Update</th>
				<th class="text-center">Delete</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$sql = "select l.*,s.studname from tblleave l join tblstudent s on l.studentid=s.id";
			$res = mysqli_query($con,$sql);
			$i=1;
			while($row = mysqli_fetch_assoc($res)){
				$dfdsfasf=json_encode($row);
				?>
				<tr>
					<td class='text-center'><?php echo $i++; ?></td>
					<td><?php echo $row['studname']; ?></td>
 					<td><?php echo $row['typeofleave']; ?></td>
					<td><?php echo $row['reason']; ?></td>
					<td><?php echo $row['description']; ?></td>
					<td><?php echo $row['teacherid']; ?></td>
					<td><?php echo $row['status']; ?></td>
					<td><?php echo $row['inserttime']; ?></td>
					<td><?php echo $row['updatetime']; ?></td>
					<td class='text-center'>
						<button type="button" class="btn btn-primary btn-sm pull-left" data-bs-toggle="modal" data-bs-target="#modaldefault"  
						onclick='callupdate("Update",<?php echo $dfdsfasf; ?>);'><i class="fa fa-edit"></i> Update </button>
					</td>
					<td class='text-center'> 
						<button type="button" class="btn btn-danger btn-sm pull-left" 
						onclick='callupdate("Delete",<?php echo $dfdsfasf; ?>);CRUDOPAjax();'><i class="fa fa-trash"></i> Delete </button>
					</td>
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