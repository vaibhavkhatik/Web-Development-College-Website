<?php
	require_once("connection.php");
?>
	<table id="dttable" class="table table-bordered table-hover">
		<thead>
			<tr style='background-color:#3c8dbc;color:white;'>
				<th class="text-center">Update</th>
				<th class="text-center">Delete</th>
				<th class="text-center">SI</th>
				<th class="text-center">department</th>
				<th class="text-center">year</th>
				<th class="text-center">noticedate</th>
				<th class="text-center">noticesubject</th>
				<th class="text-center">noticedescription</th>
				<th class="text-center">noticeupload file</th>
 			</tr>
		</thead>
		<tbody>
		<?php
			$sql = "select n.*,d.deptname ,y.year as admyear from tbnotice n 
			join dept d on n.department=d.id
			join year y on n.year=y.id";
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
 					<td><?php echo $row['deptname']; ?></td>
					<td><?php echo $row['admyear']; ?></td>
					<td><?php echo $row['noticedate']; ?></td>
 					<td><?php echo $row['noticesubject']; ?></td>
					<td><?php echo $row['noticedescription']; ?></td>
					<td><a href="<?php echo $row['noticefile']; ?>" download> Download File</a></td>
 					
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