<?php 
$logoimg = get_header_image();
// print_r($logoimg);

?>

<!DOCTYPE html>
<html lang="en" dir="lrt">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="These template is suitable for charity , NGO , non-profit organization , donation , church or a fundraising website.">
    <meta name="keywords" content="charity, causes, donate, charity foundation, charity hub, charity theme, donations, non profit, fundraiser,social, ngo, non-profit, nonprofit, organization, volunteer">
    <meta name="author" content="initTheme">
	  <meta property="og:type" content="website" >
    <meta property="og:title" content="Charity & Donation HTML Template" >
    <meta property="og:site_name" content="donate Website" >
    <meta property="og:site_name" content="Charitfix" >
    <meta property="og:url" content="www.Charitfix.com" >
    <meta property="og:image" content="www.Charitfix.com" >
    <meta property="og:description" content="These template is suitable for charity , NGO ,donate,fundraiser, non-profit organization" >
    <meta name="twitter:title" content="Charity & Donation HTML Template" >
    <meta name="twitter:description" content="These template is suitable for charity , NGO ,donate,fundraiser, non-profit organization" >
    <meta name="twitter:image" content="www.Charitfix.com" >
    <meta name="twitter:card" content="summary" >
    <title> <?php bloginfo('name');?> <?php wp_title();?> <?php if(is_front_page()){
                echo '|'; bloginfo('description');}?> </title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="<?php echo get_template_directory_uri();  ?>/theme/assets/images/icon/favicon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/theme/assets/css/bootstrap-5.3.0.min.css">
    <!-- fonts & icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/theme/assets/css/remixicon.css">
    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/theme/assets/css/plugin.css">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/theme/assets/css/main-style.css">
      <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();  ?>/theme/assets/css/custom.css">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet"/>
    <!-- RTL CSS::When Need RTL Uncomments File -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/rtl.css"> -->
    <?php wp_head();?>
  </head>
  <!-- <body <?php body_class(); ?>> -->
  <body >
    <div class="loading-page" id="preloader-active">
      <div class="counter">
          <p class="text text-capitalize">loading</p>
          <span class="number">0%</span>
          <span class="line"></span>
      </div>
    </div>
    <header>
      <div class="header-area">
        <div class="main-header header-sticky">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                  <div class="header-left d-flex align-items-center justify-content-between">
                    <!-- Logo-->
                    <div class="logo logo-large light-logo">
                      <a href="<?php echo site_url();?>"><img src="<?php echo  $logoimg; ?>" alt="logo"></a>
                    </div>
                    <!-- Logo Mobile-->
                    <div class="logo logo-mobile light-logo">
                      <a href="<?php echo site_url();?>"><img src="<?php echo $logoimg;  ?>" alt="img"></a>
                    </div>
                  </div>

                  <div class="search-container">
                    <input type="text" id="searchField" class="search-field" placeholder="Search...">
                    <button id="closeSearch" class="close-search-btn"><i class="ri-close-line"></i></button>
                  </div>

                  <!-- Main-menu for desktop -->
                  <div class="main-menu d-none d-lg-block">
                    <nav>
                        <?php wp_nav_menu(
                          array(
                            'theme_location'=>'primary-menu',
                            'menu_class'=>'listing',
                            // 'items_wrap'=> '<ul id="%1$s" class="%2$s">%3$s</ul>'
                            // 'link_after'=> '<i class="ri-arrow-down-s-line"></i>',
                            )
                          )?>        
                    </nav>
                  </div>
                  <div class="header-right">
                    <div class="cart">
                      <!-- search button -->
                      <a href="javascript:void(0)" class="rounded-btn search-bar"><i class="ri-search-line"></i></a>
                      <a href="login.html" class="btn-primary-fill pill-btn">Log in</a>
                    </div>
                  </div>
                </div>
                <!-- <?php echo get_template_directory_uri(); ?> -->
                  <!-- Mobile Menu -->
                  <div class="div">
                    <div class="mobile_menu d-block d-lg-none"></div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>