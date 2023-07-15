<?php
	require_once("connection.php");
?>
	<table id="dttable" class="table table-bordered table-hover">
		<thead>
			<tr style='background-color:#3c8dbc;color:white;'>
				<th class="text-center">id</th>
				<th class="text-center">department</th>
				<th class="text-center">year</th>
				<th class="text-center">category</th>
				<th class="text-center">bookid</th>
				<th class="text-center">bookname</th>
				<th class="text-center">author</th>
				<th class="text-center">quantity</th>
				<th class="text-center">image</th>
				<th class="text-center">Update</th>
				<th class="text-center">Delete</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$sql = "select b.*,d.deptname,y.year as yearset,b.year from bookmaster b 
			join dept d on b.department=d.id
			join year y on y.id=b.year";
			//$sql = "select * from bookmaster";
			$res = mysqli_query($con,$sql);
			$i=1;
			while($row = mysqli_fetch_assoc($res)){
				$dfdsfasf=json_encode($row);
				?>
				<tr>
					<td class='text-center'><?php echo $i++; ?></td>
					
					<td><?php echo $row['deptname']; ?></td>
					<td><?php echo $row['yearset']; ?></td>
					<td><?php echo $row['category']; ?></td>
					<td><?php echo $row['bookid']; ?></td>
					<td><?php echo $row['bookname']; ?></td>
					<td><?php echo $row['author']; ?></td>
					<td><?php echo $row['quantity']; ?></td>
					<td class='text-center'>
						<img src="<?php echo $row['image']; ?>" class="img img-responsive" width="100px" height="50px"></td>
					<td class='text-center'>
						<button type="button" class="btn btn-primary pull-left" data-bs-toggle="modal" data-bs-target="#modaldefault"  
						onclick='callupdate("Update",<?php echo $dfdsfasf; ?>);'><i class="fa fa-edit"></i> Update </button></td>
					<td class='text-center'> 
						<button type="button" class="btn btn-danger pull-left" 
						onclick='callupdate("Delete",<?php echo $dfdsfasf; ?>);CRUDOPAjax();'><i class="fa fa-trash"></i> Delete </button></td>
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