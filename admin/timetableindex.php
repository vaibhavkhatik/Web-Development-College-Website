<?php
	require_once("mainhead.php");
?>
<body>
    
    <style>
        .row .col-12 {
            display: inline-flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }
    </style>
    <div class="container-fluid">
		<section class="content-header">
			<h4 class="text-center">
				<button type="button" class="btn btn-success pull-left" data-bs-toggle="modal"
					onclick="callupdate('Save');" data-bs-target="#modaldefault"><i class="fa fa-plus"></i> New </button>
				<span class="pagenavhead">Time Table System</span>
			</h4>
		</section>
		<div class="modal modal-default fade" id="modaldefault">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header text-center d-block">
						<h4 class="modal-title">Time Table</h4>
					</div>
					<div class="modal-body">
						<form id="formid" enctype="multipart/form-data">
							<input type="text" class="form-control d-none textfields" id="id" name="id">
							<input type="text" class="form-control d-none textfields" id="crud" name="crud" value="">
							<div class="row">
								<div class="col-12">
									<div class="col-4">
										<label>DEPT</label>
									</div>
									<div class="col-8">
										<?php 
										$se="select * from dept";
										$re=mysqli_query($con,$se); ?>
 										<select class="form-control textfields required" id="dept" name="dept">
											 <option value="">Select Department</option>
											 <?php
											 while($rows=mysqli_fetch_assoc($re)){ ?>
												<option value="<?php echo $rows['id']; ?>"><?php echo $rows['deptname']; ?></option>
											<?php }
											 ?>
										</select>
									 </div>
								</div>
								<div class="col-12">
									<div class="col-4">
										<label>YEAR</label>
									</div>
									<div class="col-8">
										<?php 
										$se="select * from year";
										$re=mysqli_query($con,$se); ?>
 										<select class="form-control textfields required" id="year" name="year">
											 <option value="">Select year</option>
											 <?php
											 while($rows=mysqli_fetch_assoc($re)){ ?>
												<option value="<?php echo $rows['id']; ?>"><?php echo $rows['year']; ?></option>
											<?php }
											 ?>
										</select>
									 </div>
								</div>
								<div class="col-12">
									<div class="col-4">
										<label>Time Table Subject</label>
									</div>
									<div class="col-8">
										<input type="text" class="form-control textfields required" id="timetablesubject" name="timetablesubject"
											placeholder="Time Table Subject">
									</div>
								</div>
								<div class="col-12">
									<div class="col-4">
										<label> TimeTableDescription</label>
									</div>
									<div class="col-8">
										<input type="text" class="form-control textfields required" id="timetabledescription" name="timetabledescription"
											placeholder="timetableDescription">
									</div>
								</div>
								<div class="col-12">
									<div class="col-4">
										<label>TimeTablefileUpload</label>
									</div>
									<div class="col-8">
										<input type="file" class="form-control textfields" id="timetablefileupload" name="timetablefileupload">
										<input type="text" class="form-control d-none textfields" id="timetablefileupload_old"
											name="timetablefileupload_old">
										<img src="" class="img img-responsive d-none timetablefileupload" width="100px" height="50px">
									</div>
								</div>
								<div class="col-12">
									<div class="col-4">
										<label>TimeTableCreator</label>
									</div>
									<div class="col-8">
										<input type="text" class="form-control textfield" id="timetablecreator" name="timetablecreator" 
									   		 placeholder="timetablecreator">
									</div>
								</div>
								
								


								<div class="col-12 text-center d-block">
									<button type="button" id="Save" name="Save" class="btn btn-primary"
									onclick="return checkformvalidation();">Save</button>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger pull-right" data-bs-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12" id="recordshow"></div>
		</div>
	</div>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script type="text/javascript">
    function checkformvalidation() {
        var dsfdasfasdf = "";
        $(document).find("#formid .required").each(function() {
            if ($(this).val().trim() == '') {
                dsfdasfasdf = "Y";
                $(this).focus();
                alert("Please Enter Value");
                return false;
            }
        });
        if (dsfdasfasdf == "") {
            CRUDOPAjax();
            return true;
        }
    }

    function callupdate(opration, data) {
        $(".textfields").val("");
        $("#formid img").addClass("d-none");
        if (data) {
            Object.entries(data).forEach(([key, value]) => {
                // console.log(key , value);
                if ($("img." + key).length && value != '') {
                    $(".img." + key).removeClass("d-none");
                    $(".img." + key).attr('src', value);
                    $("#" + key + "_old").val(value);
                } else if ($("#formid #" + key).length) {
                    $("#formid #" + key).val(value);
                }
            });
        }
        $("#crud").val(opration);
        $("#Save").text(opration);
    }

    function CRUDOPAjax() {
        $("#modaldefault").modal('hide');
		var crud=$("#crud").val().trim();
        if (crud == 'Delete') {
            var result = confirm("Do you want to Delete?");
            if (result == false) {
                return false;
            }
        }
        var formData = new FormData($("#formid")[0]);
		var req = $.ajax({
            url: 'timetablesave.php',
            type: 'POST',
            cache: false,
            data: formData,
            mimeType: "multipart/form-data",
            contentType: false,
            processData: false
        });
        req.done(function(text) {
            var return_data = text.trim();
            console.log("return_data="+return_data);
            if (return_data == "1") {
                if(crud == 'Save'){
					alert("Inserted Successfully");
				}else if(crud == 'Update'){
					alert("Updated Successfully");
				}else if(crud == 'Delete'){
					alert("Deleted Successfully");
				}
                refreshdata();
            } else {
                alert("try again");
            }
        });
    }

    function refreshdata() {
        var req = $.ajax({
            url: 'timetablegetdata.php',
            type: 'get',
            cache: false
        });
        req.done(function(text) {
            $('#recordshow').html(text);
        });
    }
    $(document).ready(function() {
        refreshdata();
    });
    </script>
</body>

</html>