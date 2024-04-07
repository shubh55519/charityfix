<?php 
//Template Name:Contact
get_header();

?>
    <main>
      <!-- Breadcrumb Area S t a r t -->
      <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
          <div class="breadcrumb-text">
            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
              <ul class="breadcrumb listing">
                <li class="breadcrumb-item single-list"><a href="<?php echo site_url();?>" class="single">Home</a></li>
                <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single"><?php the_title();?></a></li>
              </ul>
            </nav>
            <h1 class="title wow fadeInUp" data-wow-delay="0.1s"><?php the_title();?></h1>
          </div>
        </div>
      </section>
      <!-- End-of Breadcrumb Area -->

      <!-- Contact area S t a r t-->
      <div class="volunteer-details top-bottom-padding2">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="contact-section">
                <div class="contact-list">
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-phone-fill"></i>
                    </div>
                    <div class="divider-ver"></div>
                    <div class="contact-content">
                      <p class="subtitle">Phone</p>
                      <a class="title" href="javascript:void(0)"><?php the_field("phone", 18);?></a>
                    </div>
                  </div>
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-mail-fill"></i>
                    </div>
                    <div class="divider-ver"></div>
                    <div class="contact-content">
                      <p class="subtitle">Email</p>
                      <a class="title" href="javascript:void(0)">Helpfull@gmail.com</a>
                    </div>
                  </div>
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-map-pin-line"></i>
                    </div>
                    <div class="divider-ver"></div>
                    <div class="contact-content">
                      <p class="subtitle">Location</p>
                      <a class="title" href="javascript:void(0)">View on Google Map</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="top-padding4">
            <div class="row gy-24">
              <div class="col-xl-6">
                <div class="send-box">
                  <form action="contact-us.html" class="custom-form">
                    <div class="row">
                      <div class="col-xl-12">
                        <div class="form-group">
                          <label class="custom-label" for="exampleFormControlInput1">Full Name</label>
                          <input type="text" class="form-control custom-input" id="exampleFormControlInput1" placeholder="Alex Jordan">
                        </div>
                      </div>
                      <div class="col-xl-12">
                        <div class="form-group">
                          <label class="custom-label" for="exampleFormControlInput5">Phone</label>
                          <input type="text" class="form-control custom-input" id="exampleFormControlInput5" placeholder="Phone">
                        </div>
                      </div>
                      <div class="col-xl-12">
                        <div class="form-group">
                          <label class="custom-label" for="exampleFormControlInput2">Email address</label>
                          <input type="email" class="form-control custom-input" id="exampleFormControlInput2" placeholder="name@example.com">
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="form-group">
                        <label class="custom-label" for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control custom-textarea" id="exampleFormControlTextarea1" placeholder="Type You message here"></textarea>
                      </div>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                  </form>
                </div>
              </div>
              <div class="col-xl-6">
                <iframe class="map-frame" src="https://www.google.com/maps/embed/v1/place?q=Dhaka,+Bangladesh&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" width="600" height="450" style="border: 15px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End-of contact-->

      <!-- Gallery S t a r t -->
      <div class="gallery-area">
        <div class="gallery-slider d-flex">
          <div class="gallery-img">
            <img src="<?php echo get_template_directory_uri();  ?>/theme/assets/images/gallery/gallery-1.png" alt="img">
          </div>
          <div class="gallery-img">
            <img src="<?php echo get_template_directory_uri();  ?>/theme/assets/images/gallery/gallery-2.png" alt="img">
          </div>
          <div class="gallery-img">
            <img src="<?php echo get_template_directory_uri();  ?>/theme/assets/images/gallery/gallery-3.png" alt="img">
          </div>
          <div class="gallery-img">
            <img src="<?php echo get_template_directory_uri();  ?>/theme/assets/images/gallery/gallery-4.png" alt="img">
          </div>
          <div class="gallery-img">
            <img src="<?php echo get_template_directory_uri();  ?>/theme/assets/images/gallery/gallery-2.png" alt="img">
          </div>
          <div class="gallery-img">
            <img src="<?php echo get_template_directory_uri();  ?>/theme/assets/images/gallery/gallery-3.png" alt="img">
          </div>
          <div class="gallery-img">
            <img src="<?php echo get_template_directory_uri();  ?>/theme/assets/images/gallery/gallery-1.png" alt="img">
          </div>
        </div>
      </div>
      <!-- End-of Gallery -->
    </main>
    <!-- Footer Start -->
  <?php 
  get_footer();
  ?>