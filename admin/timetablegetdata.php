<?php
	require_once("connection.php");
?>
	<table id="dttable" class="table table-bordered table-hover">
		<thead>
			<tr style='background-color:#3c8dbc;color:white;'>
				<th class="text-center">UPDATE</th>
				<th class="text-center">DELETE</th>
				<th class="text-center">ID</th>
				<th class="text-center">DEPT</th>
				<th class="text-center">Year</th>
				<th class="text-center">Time Table Subject</th>
 				<th class="text-center">Time Table Description</th>
				<th class="text-center">Time Table File Upload</th>
				<th class="text-center">Time Table Creator</th>
				<th class="text-center">Insert Time</th>
				<th class="text-center">Update Time</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$sql = "select t.*,d.deptname,y.year as showyear from tbltimetable t 
			join dept d on t.dept=d.id
			join year y on t.year=y.id";
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
					<td><?php echo $row['showyear']; ?></td>
					<td><?php echo $row['timetablesubject']; ?></td>
 					<td><?php echo $row['timetabledescription']; ?></td>
					<td class='text-center'>
						<a href="<?php echo $row['timetablefileupload']; ?>" Download> Download File </a>
					</td>
					<td><?php echo $row['timetablecreator']; ?></td>
					<td><?php echo $row['inserttime']; ?></td>
					<td><?php echo $row['updatetime']; ?></td>
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