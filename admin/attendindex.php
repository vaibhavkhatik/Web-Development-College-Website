<?php
	require_once("mainhead.php");
?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="container-fluid">
        <form method="post" action="">
		<section class="content-header">
            <h4 class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
				<span class="pagenavhead">Student Attendance System</span>
			</h4>
		</section>
		<div class="row">
            <div class="col-6 d-inline-flex flex-wrap">
                <div class="col-4">
                    <label>DEPARTMENT</label>
                </div>
                <div class="col-8">
                    <select name="deptsearch" id="deptsearch" class="form-control">
                        <option value="">Select Dept</option>
                        <?php
                        $sql = "select * from dept";
                        $res = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_assoc($res)){
                            $id=$row['id'];
                            $deptname=$row['deptname'];
                            ?>
                                <option value="<?php echo $id; ?>" <?php if($_POST['deptsearch']==$id){ echo 'selected'; } ?>><?php echo $deptname; ?></option>
                            <?php
                        }
                    ?>
                    </select>
                </div>
            </div>
            
            <div class="col-6 d-inline-flex flex-wrap">
                <div class="col-4">
                    <label>YEAR</label>
                </div>
                <div class="col-8">
                    <select name="yearsearch" id="yearsearch" class="form-control">
                        <option value="">Select YEAR</option>
                        <?php
                        $sql = "select * from year";
                        $res = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_assoc($res)){
                            $id=$row['id'];
                            $year=$row['year'];
                            ?>
                                <option value="<?php echo $id; ?>" <?php if($_POST['yearsearch']==$id){ echo 'selected'; } ?>><?php echo $year; ?></option>
                            <?php
                        }
                    ?>
                    </select>
                </div>
            </div>
            <div class="col-12 text-center d-block mt-3">
                <input type="submit" name="search" class="btn btn-warning" value="Search">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" id="recordshow">
                <?php include_once('attendgetdata.php'); ?>
            </div>
		</div>
    </form>
	</div>
 </main>
<?php require_once('mainfooter.php'); ?>