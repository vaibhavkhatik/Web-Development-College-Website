<?php
	require_once("connection.php");
?>
	<table id="dttable" class="table table-bordered table-hover">
		<thead>
			<tr style='background-color:#3c8dbc;color:white;'>
				<th class="text-center">Update</th>
				<th class="text-center">Delete</th>
				<th class="text-center">id</th>
				<th class="text-center">StudentName</th>
				<th class="text-center">ApplyDate</th>
				<th class="text-center">DocumentType</th>
				<th class="text-center">LC/Bonafide</th>
				<th class="text-center">Payment</th>
				<th class="text-center">DocStatus</th>
				<th class="text-center">Updatetime</th>
				<th class="text-center">Inserttime</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$sql = "select d.*,s.studname from tbldoc d join tblstudent s on s.id=d.studentid";
			$res = mysqli_query($con,$sql);
			$i=1;
			while($row = mysqli_fetch_assoc($res)){
				$dfdsfasf=json_encode($row);
				?>
				<tr>
					<td class='text-center'>
						<button type="button" class="btn btn-primary pull-left" data-bs-toggle="modal" data-bs-target="#modaldefault"  
						onclick='callupdate("Update",<?php echo $dfdsfasf; ?>);'><i class="fa fa-edit"></i> Update </button>
					</td>
					<td class='text-center'> 
						<button type="button" class="btn btn-danger pull-left" 
						onclick='callupdate("Delete",<?php echo $dfdsfasf; ?>);CRUDOPAjax();'><i class="fa fa-trash"></i> Delete </button>
					</td>
					<td class='text-center'><?php echo $i++; ?></td>
 					<td><?php echo $row['studname']; ?></td>
					<td><?php echo $row['docdate']; ?></td>
					<td><?php echo $row['documenttype']; ?></td>
					<td class='text-center'>
						<img src="<?php echo $row['document']; ?>" class="img img-responsive" width="100px" height="50px">
					</td>
					<td><?php echo $row['payment']; ?></td>
					<td><?php echo $row['status']; ?></td>
					<td><?php echo $row['updatetime']; ?></td>
					<td><?php echo $row['inserttime']; ?></td>
					
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