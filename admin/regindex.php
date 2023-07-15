<?php
	require_once("mainhead.php");
?>
 <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
     <div class="container-fluid">
		<section class="content-header">
			<h4 class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
				<span class="pagenavhead">Student Registration</span> 
				<button type="button" class="btn btn-success pull-left" data-bs-toggle="modal"
					onclick="callupdate('Save');" data-bs-target="#modaldefault"><i class="fa fa-plus"></i> New </button>
 			</h4>
		</section>
		<div class="modal modal-default fade" id="modaldefault">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header text-center d-block">
						<h4 class="modal-title">Student Data Operation</h4>
					</div>
					<div class="modal-body">
						<form id="formid" enctype="multipart/form-data">
							<input type="text" class="form-control d-none textfields" id="id" name="id">
							<input type="text" class="form-control d-none textfields" id="crud" name="crud" value="">
 								<div class="row mb-2">
									<div class="col-4">
										<label>Student Name</label>
									</div>
									<div class="col-8">
										<input type="text" class="form-control textfields required" id="studname" name="studname"
											placeholder="Enter Student Name">
									</div>
								</div>
								<div class="row mb-2">
									<div class="col-4">
										<label>Department</label>
									</div>
									<div class="col-8">
										<?php
										$se="select * from dept";
										$re=mysqli_query($con,$se);
										?>	
										<select	class="form-control textfield required"id="dept" name="dept">

										<option value="">Select Department</option>
											<?php 
											while($rows=mysqli_fetch_assoc($re)){
												?>
											<option value="<?php echo $rows['id']; ?>"><?php echo $rows['deptname'];?></option>
											<?php
										}
											?>
										</select>						
									</div>
								</div>
                                <div class="row mb-2">
									<div class="col-4">
										<label>Admission Year</label>
									</div>
									<div class="col-8">
									<?php
										$se="select * from year";
										$re=mysqli_query($con,$se);
										?>	
										<select	class="form-control textfield required"id="admyear" name="admyear">

										<option value="">Select Admission Year</option>
											<?php 
											while($rows=mysqli_fetch_assoc($re)){
												?>
											<option value="<?php echo $rows['id']; ?>"><?php echo $rows['year'];?></option>
											<?php
										}
											?>
										</select>	
									</div>
								</div>
								<div class="row mb-2">
									<div class="col-4">
										<label>SSC Marks</label>
									</div>
									<div class="col-8">
										<input type="text" class="form-control textfields required" id="markssc" name="markssc"
											placeholder="Enter Student SSC Marks">
									</div>
								</div>

                                <div class="row mb-2">
									<div class="col-4">
										<label>HSC Marks</label>
									</div>
									<div class="col-8">
										<input type="text" class="form-control textfields required" id="markhsc" name="markhsc"
											placeholder="Enter HSC Marks">
									</div>
								</div>

                                <div class="row mb-2">
									<div class="col-4">
										<label>Diploma Marks</label>
									</div>
									<div class="col-8">
										<input type="text" class="form-control textfields required" id="markdiploma" name="markdiploma"
											placeholder="Enter Diploma Marks">
									</div>
								</div>

                                <div class="row mb-2">
									<div class="col-4">
										<label>DOB</label>
									</div>
									<div class="col-8">
										<input type="date" class="form-control textfields required" id="dob" name="dob">
									</div>
								</div>

                                <div class="row mb-2">
									<div class="col-4">
										<label>Student Cast</label>
									</div>
									<div class="col-8">
                                        <select id="cast" name="cast" class="form-control textfields required" placeholder="Select Cast">
                                            <option value="Open" name="open">Open</option>
                                            <option value="OBC" name="obc">OBC</option>
                                            <option value="ST" name="st">ST</option>
                                            <option value="NT" name="nt">NT</option>
                                            <option value="VJNT" name="vjnt">VJNT</option>
                                            <option value="Others" name="others">Others</option>
                                            
                                        </select>
									</div>
								</div>

                                <div class="row mb-2">
									<div class="col-4">
										<label>Address</label>
									</div>
									<div class="col-8">
										<textarea class="form-control textfields required" name="address" id="address" cols="30" rows="3"></textarea>
									</div>
								</div>    
                                
                                <div class="row mb-2">
									<div class="col-4">
										<label>Mobile No.</label>
									</div>
									<div class="col-8">
										<input type="text" class="form-control textfields required" id="mobile" name="mobile" placeholder="Enter Mobile No.">
									</div>
								</div>

                                <div class="row mb-2">
									<div class="col-4">
										<label>Adhar No.</label>
									</div>
									<div class="col-8">
										<input type="text" class="form-control textfields required" id="adhar" placeholder="Enter Adhar No." name="adhar">
									</div>
								</div>

                                <div class="row mb-2">
									<div class="col-4">
										<label>Email ID</label>
									</div>
									<div class="col-8">
										<input type="text" class="form-control textfields required" id="email" placeholder="Enter Email" name="email">
									</div>
								</div>                                

								<div class="row mb-2">
									<div class="col-4">
										<label>Profile</label>
									</div>
									<div class="col-8">
										<input type="file" class="form-control textfields" id="profile" name="profile">
										<input type="text" class="form-control d-none textfields" id="profile_old"
											name="profile_old">
										<img src="" class="img img-responsive d-none profile" width="100px" height="50px">
									</div>
								</div>	
								
								<div class="row mb-2">
									<div class="col-4">
										<label>Student Admission Status</label>
									</div>
									<div class="col-8">
                                        <select id="status" name="status" class="form-control textfields required" placeholder="Select Admission Status">
                                            <option value="Complete" name="complete">Complete</option>
                                            <option value="Pending" name="pending">Pending</option>
                                            <option value="Cancel" name="cancel">Cancel</option>                                                                                      
                                        </select>
									</div>
								</div>
 								<div class="col-12 text-center d-block">
									<button type="button" id="Save" name="Save" class="btn btn-primary"
									onclick="return checkformvalidation();">Registration</button>
								</div>
							</div>
						</form>
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
            url: 'regsave.php',
            type: 'POST',
            cache: false,
            data: formData,
            mimeType: "multipart/form-data",
            contentType: false,
            processData: false
        });
        req.done(function(text) {
            var return_data = text.trim();
            //sssconsole.log("return_data="+return_data);
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
            url: 'reggetdata.php',
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