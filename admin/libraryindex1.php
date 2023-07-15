<?php
	require_once("mainhead.php");
?> 
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="container-fluid">
		<section class="content-header">
			<h4 class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
				<button type="button" class="btn btn-success pull-left" data-bs-toggle="modal"
					onclick="callupdate('Save');" data-bs-target="#modaldefault"><i class="fa fa-plus"></i> New </button>
				<span class="pagenavhead">Book issue and Book Deposite</span>
			</h4>
		</section>
		<div class="modal modal-default fade" id="modaldefault">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header text-center d-block">
						<h4 class="modal-title">Book issue and Book Deposite</h4>
					</div>
					<div class="modal-body">
						<form id="formid" enctype="multipart/form-data">
							<input type="text" class="form-control d-none textfields" id="id" name="id">
							<input type="text" class="form-control d-none textfields" id="crud" name="crud" value="">
							<div class="row">
								<div class="col-12">
									<div class="col-4">
										<label>Department</label>
									</div>
									<div class="col-8">
										<?php 
										$se="select * from dept";
										$re=mysqli_query($con,$se); ?>
 										<select class="form-control textfields required" id="department" name="department">
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
										<label>Year</label>
									</div>
									<div class="col-8">
									<?php 
										$se="select * from year";
										$re=mysqli_query($con,$se); ?>
 										<select class="form-control textfields required" id="year" name="year">
											 <option value="">Select Year</option>
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
										<label>Book Id</label>
									</div>
									<div class="col-8">
										<?php 
										$se="select * from bookmaster";
										$re=mysqli_query($con,$se); ?>
 										<select class="form-control textfields required" id="bookid" name="bookid">
											 <option value="">Select Bookid</option>
											 <?php
											 while($rows=mysqli_fetch_assoc($re)){ ?>
												<option value="<?php echo $rows['id']; ?>"><?php echo $rows['bookid']; ?></option>
											<?php }
											 ?>
										</select>
									 </div>
								</div>
								<div class="col-12">
									<div class="col-4">
										<label>Roll No</label>
									</div>
									<div class="col-8">
										<input type="text" class="form-control textfields required" id="rollno" name="rollno"
											placeholder="Enter Roll No">
									</div>
								</div>
								<div class="col-12">
									<div class="col-4">
										<label>Issue Date</label>
									</div>
									<div class="col-8">
										<input type="date" class="form-control textfields required" id="issuedate" name="issuedate"
											placeholder="Enter issue date ">
									</div>
								</div>
								<div class="col-12">
									<div class="col-4">
										<label>Deposite Date</label>
									</div>
									<div class="col-8">
										<input type="date" class="form-control textfields required" id="depositedate" name="depositedate"
											placeholder="Enter Deposite Date">
									</div>
								</div>
								<div class="col-12">
									<div class="col-4">
										<label>Description</label>
									</div>
									<div class="col-8">
										<input type="text" class="form-control textfields required" id="description" name="description"
											placeholder="Write description here..">
									</div>
								</div>
								<div class="col-12">
									<div class="col-4">
										<label>Quantity</label>
									</div>
									<div class="col-8">
										<input type="number" class="form-control textfields required" id="quantity" name="quantity"
											placeholder="Select quantity">
									</div>
								</div>
								<div class="col-12">
									<div class="col-4">
										<label>Status</label>
									</div>
									<div class="col-8">
										<select id="status" name="status" class="form-control textfields required">
										<option value=""> Select status</option>
											<option value="returned"> Returned</option>
											<option value="received"> Received</option>
										</select>	
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
            url: 'librarysave1.php',
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
            url: 'librarygetdata1.php',
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