<?php 
// Template Name: Blog
get_header();
echo "String 000000000000";
$imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),"large");
// print_r($imagepath);
?>
    <main>
      <!-- Breadcrumb Area S t a r t -->
      <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
          <div class="breadcrumb-text">
            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
              <ul class="breadcrumb listing">
                <li class="breadcrumb-item single-list"><a href="index.html" class="single">Home</a></li>
                <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single">Blog </a></li>
              </ul>
            </nav>
            <h1 class="title wow fadeInUp" data-wow-delay="0.1s">Latest blog</h1>
          </div>
        </div>
      </section>
      <!-- End-of Breadcrumb Area -->

      <!-- Blog S t a r t -->
      <section class="blog-section-three top-bottom-padding">
      <?php
           while(have_posts()){

           the_post();
           $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),"large");
          //  print_r($imagepath);
          ?>
        <div class="container">
          <!-- <?php echo 'String'?> -->
          
          <div class="row gy-24">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
            <h4 class="title text-capitalize"><a href="blog-details.html"><?php the_title();?></a></h4>
              <p class="subtitle"><?php the_content();?></p>
              <div class="single-blog h-calc">
                <div class="blog-img">
                  <a href="blog-details.html">
                    <!-- <img src="<?php echo get_template_directory_uri();  ?>/theme/assets/images/gallery/blog-7.png" class="img-fluid w-100" alt="img"> -->
                    <img src="<?php echo $imagepath[0] ?>" class="img-fluid w-100" alt="img">
                  </a>
                  <!-- <p><?php the_excerpt();?></p> -->
                  <!-- <div class="brush-bg">
                    <img src="<?php echo get_template_directory_uri();  ?>/theme/assets/images/gallery/brush.png" alt="image">
                    <img src="<?php echo $imagepath[0]?>" alt="image">
                    <?php echo get_the_date();?>
                  </div> -->
                </div>
                  <div class="blog-info">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="blog-info-title">
                        <div class="flex mb-15 gap-16 align-items-center">
                          <div class="user flex gap-10 align-items-center">
                            <i class="ri-user-line"></i>
                            <p class="info">By: admin</p>
                          </div>
                          <div class="donate flex gap-10 align-items-center">
                            <i class="ri-chat-3-line"></i>
                            <p class="info">Donation</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="button-section"><a href="<?php the_permalink();?>" class="read-btn">Read More</a></div>
              </div>
            </div>
            <!-- <?php echo 'String'?> -->
            <?php }?>
          <!-- pagination -->
          <nav class="pagination-nav">
            <ul class="pagination">
              <?php wp_pagenavi();?>
              <!-- <li class="page-item" aria-current="page"><span class="page-link active">1</span></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
              <li class="page-item">
                <a class="page-link next" href="javascript:void(0)" rel="next" aria-label="Next »"><i class="ri-arrow-right-line"></i></a>
              </li> -->
            </ul>
          </nav>
          
          <!-- End pagination -->
        </div>
      </section>
      <!-- End-of Blog -->

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
    <!-- Footer S t a r t -->
 <?php 
 get_footer();
 ?>