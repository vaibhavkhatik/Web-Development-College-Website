<?php
	require_once("connection.php");
?>
	<table id="dttable" class="table table-bordered table-hover">
		<thead>
			<tr style='background-color:#3c8dbc;color:white;'>
				<th class="text-center">UPDATE</th>
				<th class="text-center">DELETE</th>
				<th class="text-center">SI</th>
				<th class="text-center">Name</th>
				<th class="text-center">Address</th>
				<th class="text-center">Email</th>
				<th class="text-center">Mobile</th>
				<th class="text-center">Profile</th>
			</tr>
		</thead>
		<tbody>
		<?php
			  $sql = "select * from tblstudent1";
			$res = mysqli_query($con,$sql);
			  $ress = mysqli_num_rows($res);
			$i=1;
			while($row = mysqli_fetch_assoc($res)){
				//   print_r($row);
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
					<td><?php echo $row['studentname']; ?></td>
					<td><?php echo $row['studentaddress']; ?></td>
					<td><?php echo $row['studentemail']; ?></td>
					<td><?php echo $row['studentmobile']; ?></td>
					<td class='text-center'>
						<img src="<?php echo $row['profileimage']; ?>" class="img img-responsive" width="100px" height="50px">
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