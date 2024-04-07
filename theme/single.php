<?php 
get_header();
?>

<main>
    <!-- Breadcrumb Area S t a r t -->
    <!-- <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
          <div class="breadcrumb-text">
            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
              <ul class="breadcrumb listing">
                <li class="breadcrumb-item single-list"><a href="index.html" class="single">Home</a></li>
                <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single">Blog </a></li>
              </ul>
            </nav>
            <h1 class="title wow fadeInUp" data-wow-delay="0.1s">blog details</h1>
          </div>
        </div>
      </section> -->
      <!-- End-of Breadcrumb Area -->

      <section class="blog-details top-bottom-padding2">
        <?php the_title();?>
        <?php echo get_the_content();?>
        <?php comment_form();?>
      </section>
</main>

<?
get_footer();
?>