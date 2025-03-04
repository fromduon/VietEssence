<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <!-- WordPress Styles -->
    <?php wp_head(); ?>
</head>

<head>
    <meta charset="utf-8">
    <title>VietEssence | Official Site | Your #1 Workshop Booking Site!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block topbar">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>FPT City, Hoa Hai Ward, Ngu Hanh Son Dist., Danang</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>081 714 7773</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>contact.vietessence@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="<?php echo home_url('/'); ?>" class="navbar-brand p-0">
                <!-- <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1> -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_no_bg.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                <a href="<?php echo home_url(); ?>" class="nav-item nav-link">Home</a>
                    <a href="<?php echo get_permalink(get_page_by_path('workshop')->ID); ?>" class="nav-item nav-link">Workshops</a>
                    <a href="<?php echo get_permalink(get_page_by_path('about')->ID); ?>" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?php echo get_permalink(get_page_by_path('destination')->ID); ?>" class="dropdown-item">Destination</a>
                            <a href="<?php echo get_permalink(get_page_by_path('booking')->ID); ?>" class="dropdown-item">Booking</a>
                            <a href="<?php echo get_permalink(get_page_by_path('team')->ID); ?>" class="dropdown-item">Travel Guides</a>
                            <a href="<?php echo get_permalink(get_page_by_path('testimonial')->ID); ?>" class="dropdown-item">Testimonial</a>
                            <a href="404.php" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="<?php echo get_permalink(get_page_by_path('contact')->ID); ?>" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>

        <div class="hero-header">
    <?php if (is_front_page() || is_home()) : ?>
        <div class="hero-video-container">
            <iframe class="hero-video" src="https://player.vimeo.com/video/1059695966?autoplay=1&loop=1&title=0&sidedock=0&controls=0&background=1"
                frameborder="0" allow="autoplay; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    <?php else : ?>
        <div class="hero-image"></div>
        <div class="hero-content">
            <h1 class="display-2 text-white fw-bold vietessence-title">VietEssence</h1>
            <h1 class="display-3 text-white mb-3 hero-title">Vietnam's Story, Your Adventure</h1>
        </div>
    <?php endif; ?>
</div>




    </div>
    <!-- Navbar & Hero End -->
