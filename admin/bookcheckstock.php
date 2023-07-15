<?php
	require_once("mainhead.php");
?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="container-fluid">
    <section class="content-header">
        <h4 class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <button type="button" class="btn btn-success pull-left" data-bs-toggle="modal"
                onclick="callupdate('Save');" data-bs-target="#modaldefault"><i class="fa fa-plus"></i> New </button>
            <span class="pagenavhead">Book Check Stock</span>
        </h4>
    </section>
    <div class="row">
        <table id="dttable" class="table table-bordered table-hover">
            <thead>
                <tr style='background-color:#3c8dbc;color:white;'>
                    <th class="text-center">SI</th>
                    <th class="text-center">Department</th>
                    <th class="text-center">Year</th>
                    <th class="text-center">Book ID</th>
                    <th class="text-center">Book Name</th>
                    <th class="text-center">Opening Quantity</th>
                    <th class="text-center">Minus Quantity</th>
                    <th class="text-center">Plus Quantity</th>  
                    <th class="text-center">Closing Quantity</th>
                    <th class="text-center">Roll No</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select b.*,d.deptname,y.year as year from bookmaster b 
                join dept d on b.department=d.id
                join year y on y.id=b.year";
                $res = mysqli_query($con,$sql);
                $i=1;
                while($row = mysqli_fetch_assoc($res)){
                        $bookid=$row['id'];$sadasd='';
                        $sqql="select rollno from bookissue where bookid='".$bookid."'";
                        $reqs = mysqli_query($con,$sqql);
                        while($roqw = mysqli_fetch_assoc($reqs)){
                            $sadasd .=" ".$roqw['rollno'];
                        }          
                    ?>
                    <tr>
                        <td class='text-center'><?php echo $i++; ?></td>
                        <td><?php echo $row['deptname']; ?></td>
                        <td><?php echo $row['year']; ?></td>
                        <td><?php echo $bookid; ?></td>
                        <td><?php echo $row['bookname']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
            
                        <td><?php echo chkstock($row['id'],$row['quantity'],$con,'minus'); ?></td>
                        <td><?php echo chkstock($row['id'],$row['quantity'],$con,'return'); ?></td>
                        <td><?php echo chkstock($row['id'],$row['quantity'],$con,'closing'); ?></td>
                        <td><?php echo $sadasd; ?></td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
	</div>
    <?php
     function chkstock($bookid,$openingstk,$con,$condition){ //6
        $sql="select sum(if(stockstatus=1,quantity,0)) as addqty,sum(if(stockstatus=-1,quantity,0)) as minusqty  from bookissue where bookid='".$bookid."'";
        $res = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($res);
        if($condition=='closing'){
            $stk=$row['minusqty']-$row['addqty'];
            return $closingstk=$openingstk-$stk;
        }
        if($condition=='minus'){
            return $stk=$row['minusqty'];
         }
         if($condition=='return'){
            return $stk=$row['addqty'];
         }
    }
    ?>
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