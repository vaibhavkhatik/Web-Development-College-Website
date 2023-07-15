<?php include_once('header.php'); ?>
  <!-- Start main-content -->
  <div class="main-content bg-lighter">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Contact</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-gray-silver">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-4">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                  <div class="media-body"> <strong>OUR OFFICE LOCATION</strong>
                    <p>#405, Lan Streen, Los Vegas, USA</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                  <div class="media-body"> <strong>OUR CONTACT NUMBER</strong>
                    <p>+325 12345 65478</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                  <div class="media-body"> <strong>OUR CONTACT E-MAIL</strong>
                    <p>supporte@yourdomin.com</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-film text-theme-colored"></i></a>
                  <div class="media-body"> <strong>Make a Video Call</strong>
                    <p>Skype</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <h3 class="line-bottom mt-0 mb-20">Interested in discussing?</h3>
            <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error optio in quia ipsum quae neque alias eligendi, nulla nisi. Veniam ut quis similique culpa natus dolor aliquam officiis ratione libero. Expedita asperiores aliquam provident amet dolores.</p>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="#" method="post">

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
              </div>
            </form>

            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
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
    </section>
    
    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">

          <!-- Google Map HTML Codes -->
          <div 
            data-address="121 King Street, Melbourne Victoria 3000 Australia"
            data-popupstring-id="#popupstring1"
            class="map-canvas autoload-map"
            data-mapstyle="style8"
            data-height="400"
            data-latlng="-37.817314,144.955431"
            data-title="sample title"
            data-zoom="12"
            data-marker="images/map-marker.png">
          </div>
          <div class="map-popupstring hidden" id="popupstring1">
            <div class="text-center">
              <h3>CharityFund Office</h3>
              <p>121 King Street, Melbourne Victoria 3000 Australia</p>
            </div>
          </div>
          <!-- Google Map Javascript Codes -->
          <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
          <script src="js/google-map-init.js"></script>

        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
 <?php include_once('footer.php'); ?>