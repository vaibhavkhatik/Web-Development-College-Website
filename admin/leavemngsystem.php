<?php
	require_once("mainhead.php");
?> 
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     <div class="container-fluid">
		<section class="content-header">
			<h4 class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
				<button type="button" class="btn btn-success pull-left" data-bs-toggle="modal"
					onclick="callupdate('Save');" data-bs-target="#modaldefault"><i class="fa fa-plus"></i> New </button>
				<span class="pagenavhead">Leave Application</span>
			</h4>
		</section>
		<div class="modal modal-default fade" id="modaldefault">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header text-center d-block">
						<h4 class="modal-title">Leave Application</h4>
					</div>
					<div class="modal-body">
						<form id="formid" enctype="multipart/form-data">
							<input type="text" class="form-control d-none textfields" id="id" name="id">
							<input type="text" class="form-control d-none textfields" id="crud" name="crud" value="">
							 
								<div class="row mb-3">
									<div class="col-4">
										<label>Student</label>
									</div>
									<div class="col-8">
										<?php $se="select * from tblstudent";
										$res=mysqli_query($con,$se); ?>
										<select id="studentid" name="studentid" class="form-control textfields required">
											<option value="">Select Student</option>
										<?php
										while($rows=mysqli_fetch_assoc($res)){ ?>
											<option value="<?php echo $rows['id']; ?>"><?php echo $rows['studname']; ?></option>
										<?php } ?>	
										</select>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-4">
										<label>Type Of Leave</label>
									</div>
									<div class="col-8">
										<select id="typeofleave" name="typeofleave" class="form-control textfields required">
										<option value="">Select Type Of Leave</option>
										<option value="leave">Leave</option>		
										<option value="halfleave">HalfLeave</option>		
										</select>
									</div>
								</div>
 								<div class="row mb-3">
									<div class="col-4">
										<label>Reason</label>
									</div>
									<div class="col-8">
										<input type="text" class="form-control textfields required" id="reason" name="reason"
											placeholder="Enter your reason here..!">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-4">
										<label>Description</label>
									</div>
									<div class="col-8">
										<input type="text" class="form-control textfields required" id="description" name="description"
											placeholder="Enter Student description">
									</div>
								</div>
                                <div class="row mb-3">
									<div class="col-4">
										<label>Teacher id</label>
									</div>
									<div class="col-8">
										<input type="text" class="form-control textfields required" id="teacherid" name="teacherid"
											placeholder="Enter Teacher Id">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-4">
										<label>Status</label>
									</div>
									<div class="col-8">
											<select id="status" name="status" class="form-control textfields required">
												<option value="">Select Status</option>
												<option value="accept">Accept</option>		
												<option value="reject">Reject</option>
												<option value="pending">Pending</option>		
											</select>
									</div>
								</div>
								<div class="col-12 text-center d-block">
									<button type="button" id="Save" name="Save" class="btn btn-primary"
									onclick="return checkformvalidation();">Save</button>
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
            url: 'leavesave.php',
            type: 'POST',
            cache: false,
            data: formData,
            mimeType: "multipart/form-data",
            contentType: false,
            processData: false
        });
        req.done(function(text) {
            var return_data = text.trim();
            // console.log("return_data="+return_data);
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
            url: 'leavegetdata.php',
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
</main>
<?php require_once('mainfooter.php'); ?>