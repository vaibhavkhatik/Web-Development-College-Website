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
              <h2 class="title text-white text-center">Course Details</h2>
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

    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-0 pt-30 pb-30">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              <img src="images/services/lg3.jpg" alt="">
              <h3 class="text-theme-colored">Accounting Technologies</h3>
              <h5><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo unde, <span class="text-theme-color-2">Accounting Technologies</span> corporis dolorum blanditiis ullam officia <span class="text-theme-color-2">car repairing </span>natus minima fugiat repellat! Corrupti voluptatibus aperiam voluptatem. Exercitationem, placeat, cupiditate.</em></h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptatem officiis quod animi possimus a, iure nam sunt quas aperiam non recusandae reprehenderit, nesciunt cumque pariatur totam repellendus delectus? Maxime quasi earum nobis, dicta, aliquam facere reiciendis, delectus voluptas, ea assumenda blanditiis placeat dignissimos quas iusto repellat cumque.</p>
              <div class="row">
                <div class="col-md-12">
                  <h3 class="text-theme-colored">Features of the course </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et optio cum velit autem dolor reprehenderit saepe assumenda eos, qui. Voluptatem eveniet, illum dolor nemo? Velit maiores quaerat a non dolor praesentium, corporis optio ullam, voluptatem fuga consequatur sed cupiditate quam!</p> <br>
                  <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="icon-box box-border text-center mb-20 p-15"> 
                       <i class="fa fa-desktop text-theme-color-2 font-36"></i>
                        <h4>Best Lab</h4>
                      </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="icon-box box-border text-center mb-20 p-15">
                        <i class="fa fa-user text-theme-color-2 font-36"></i>
                        <h4 class="">Best Teachers</h4>
                      </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="icon-box box-border text-center mb-20 p-15">
                        <i class="fa fa-money text-theme-color-2 font-36"></i>
                        <h4 class="">Low Cost Services</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <h3 class="text-theme-colored title-border mb-30 mt-50">Get A Free Registration!</h3>
              
                  <!-- Appointment Form Sart-->
                  <form id="appointment_form" name="appointment_form" class="form-transparent mt-30" method="post" action="#">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input id="form_name" name="form_name" class="form-control" type="text" required="" placeholder="Enter Name" aria-required="true">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input id="form_phone" name="form_phone" class="form-control required" type="text" placeholder="Enter Phone" aria-required="true">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input name="form_appontment_date" class="form-control required datetime-picker" type="text" placeholder="Appoinment Date & Time" aria-required="true">
                        </div>
                      </div>
                    </div>
                    <div class="form-group mb-10">
                      <textarea id="form_message" name="form_message" class="form-control required"  placeholder="Enter Message" rows="5" aria-required="true"></textarea>
                    </div>
                    <div class="form-group mb-0 mt-20">
                      <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
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
                  <!-- Appointment Form Ends -->

                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
                <h4 class="widget-title line-bottom">Courses List</h4>
                <div class="services-list">
                  <ul class="list list-border">
                    <li class="active"><a href="page-courses-accounting-technologies.html">Accounting Technologies</a></li>
                    <li><a href="page-courses-chemical-engineering.html">Chemical Engineering</a></li>
                    <li><a href="page-courses-computer-technologies.html">Computer Technologies</a></li>
                    <li><a href="page-courses-development-studies.html">Development Studies</a></li>
                    <li><a href="page-courses-electrical-electronic.html">Electrical & Electronic</a></li>
                    <li><a href="page-courses-modern-languages.html">Modern Languages</a></li>
                    <li><a href="page-courses-modern-technologies.html">Modern Technologies</a></li>
                    <li><a href="page-courses-software-engineering.html">Software Engineering</a></li>
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title line-bottom">Opening Hours</h4>
                <div class="opening-hours">
                  <ul class="list-border">
                    <li class="clearfix"> <span> Mon - Tues :  </span>
                      <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Wednes - Thurs :</span>
                      <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Fri : </span>
                      <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Sun : </span>
                      <div class="value pull-right"> Colosed </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title line-bottom">Latest News</h4>
                <div class="latest-posts">
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Sustainable Construction</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                </div>
              </div>
              <div class="widget">
                <div class="mt-30 p-30" style="border: 10px solid #f1f1f1;">
                  <h5 class="text-theme-colored title-border mb-20">student's Feedback</h5>
                  <div class="testimonial-carousel-info owl-nav-top">
                    <div class="item">
                      <div class="comment">
                        <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                      </div>
                      <div class="content mt-20">
                        <div class="thumb pull-right">
                          <img class="img-circle" alt="" src="images/testimonials/s1.jpg">
                        </div>
                        <div class="patient-details text-right pull-right mr-20 mt-10">
                          <h5 class="author">Jonathan Smith</h5>
                          <h6 class="title">cici inc.</h6>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="comment">
                        <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                      </div>
                      <div class="content mt-20">
                        <div class="thumb pull-right">
                          <img class="img-circle" alt="" src="images/testimonials/s2.jpg">
                        </div>
                        <div class="patient-details text-right pull-right mr-20 mt-10">
                          <h5 class="author">Jonathan Smith</h5>
                          <h6 class="title">cici inc.</h6>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="comment">
                        <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                      </div>
                      <div class="content mt-20">
                        <div class="thumb pull-right">
                          <img class="img-circle" alt="" src="images/testimonials/s3.jpg">
                        </div>
                        <div class="patient-details text-right pull-right mr-20 mt-10">
                          <h5 class="author">Jonathan Smith</h5>
                          <h6 class="title">cici inc.</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title line-bottom">Photos from Flickr</h4>
                <div id="flickr-feed" class="clearfix">
                  <!-- Flickr Link -->
                  <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08">
                  </script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
 <?php include_once('footer.php'); ?>