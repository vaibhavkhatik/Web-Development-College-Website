<!--?php include_once('header.php'); ?--> 
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Appointment Form</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-gray-silver">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-push-3">
            <div class="border-1px p-25">
              <h4 class="text-theme-colored text-uppercase m-0">Make an Appointment</h4>
              <div class="line-bottom mb-30"></div>
              <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
              <form id="appointment_form" name="appointment_form" class="mt-30" method="post" action="#">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group mb-10">
                      <input name="form_name" class="form-control" type="text" required="" placeholder="Enter Name" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-10">
                      <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-10">
                      <input name="form_phone" class="form-control required" type="text" placeholder="Enter Phone" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-10">
                      <input name="form_appontment_date" class="form-control required date-picker" type="text" placeholder="Appoinment Date" aria-required="true">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-10">
                      <input name="form_appontment_time" class="form-control required time-picker" type="text" placeholder="Appoinment Time" aria-required="true">
                    </div>
                  </div>
                </div>
                <div class="form-group mb-10">
                  <textarea name="form_message" class="form-control required"  placeholder="Enter Message" rows="5" aria-required="true"></textarea>
                </div>
                <div class="form-group mb-0 mt-20">
                  <input name="form_botcheck" class="form-control" type="hidden" value="">
                  <button type="submit" class="btn btn-dark btn-theme-colored" data-loading-text="Please wait...">Submit</button>
                </div>
              </form>
              <!-- Appointment Form Validation-->
              <script type="text/javascript">
                $("#appointment_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>  
  <!-- end main-content -->
 <?php include_once('footer.php'); ?>