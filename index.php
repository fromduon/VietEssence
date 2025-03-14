<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                <h1 class="mb-4">Welcome To <span class="text-primary">VietEssence</span></h1>
                <p class="mb-4 large-text">Discover the soul of Vietnam through Da Nang's craft villages. In Non Nuoc, young sculptors like Nguyen Van Long blend tradition with modern art, breathing new life into marble carving. In Cam Ne, artisans weave bamboo into sustainable designs, while Tuy Loan's silk weavers, like Tran Thi Hoa, reinvent textiles with natural dyes. Each village tells a story of resilience and innovation, where heritage meets the future.</p>
                <p class="mb-4 large-text">Join us to explore, create, and connect with the essence of Vietnam.</p>
                <p class="mb-4 large-text">VietEssence - Vietnam's Story, Your Adventure.</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

   <!-- Activities (Latest Workshops) Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.6s">
            <h6 class="section-title bg-white text-center text-primary px-3">Workshops</h6>
            <h1 class="mb-5">Discover Our Latest Workshops</h1>
        </div>

        <div class="row g-4">
            <?php
$args = array(
    'post_type'      => 'post',
    'category_name'  => 'workshop',
    'posts_per_page' => 6 
);
$query = new WP_Query($args);

if ($query->have_posts()) :
    $delay = 0.1;
    while ($query->have_posts()) : $query->the_post();

        $description = get_post_meta(get_the_ID(), 'description', true) ?: 'No description available.';
        $discount = get_post_meta(get_the_ID(), 'discount', true) ?: 'No discount';
        $location = get_post_meta(get_the_ID(), 'location', true) ?: 'Unknown Location';
        $duration = get_post_meta(get_the_ID(), 'duration', true) ?: 'Unknown Duration';
        $price = get_post_meta(get_the_ID(), 'price', true) ?: 'Contact for price';

        $thumbnail_id = get_post_meta(get_the_ID(), 'thumbnail', true);
        $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'medium') ?: get_the_post_thumbnail_url(get_the_ID(), 'medium');
        $thumbnail_url = $thumbnail_url ?: get_template_directory_uri() . '/img/default-image.jpg';
        ?>

        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
            <div class="card shadow-sm border-0 h-100">
                <div class="position-relative">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo esc_url($thumbnail_url); ?>" class="card-img-top img-fluid workshop-image" alt="<?php the_title(); ?>">
                    </a>
                    <span class="badge bg-danger position-absolute top-0 start-0 m-2 px-3 py-1">
                        <?php echo esc_html($discount); ?>
                    </span>
                </div>
                <div class="text-center p-4">
                    <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none">
                        <h4 class="mb-0"><?php the_title(); ?></h4>
                    </a>
                    <p class="text-muted text-center m-0"><?php echo esc_html($description); ?></p>
                </div>
                <div class="d-flex justify-content-around py-3 border-top">
                    <span><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo esc_html($location); ?></span>
                    <span><i class="fa fa-clock text-primary me-2"></i><?php echo esc_html($duration); ?></span>
                </div>
                <div class="text-center pb-3">
                <span class="fw-bold text-primary" style="font-size: 1.5rem;">$<?php echo number_format((float)$price, 2); ?></span>
                </div>
            </div>
        </div>

    <?php 
    $delay += 0.1;
    endwhile;
    wp_reset_postdata();
else :
    echo "<p class='text-center text-muted'>No workshops available at the moment. Check back soon!</p>";
endif;
            ?>
        </div>
        <div class="text-center mt-4 wow fadeInUp" data-wow-delay="0.2s">
            <a href="<?php echo site_url('/workshop'); ?>" class="btn btn-primary px-5 py-3 rounded-pill">View All Workshops</a>
        </div>
    </div>
</div>
<!-- Activities (Latest Workshops) End -->

    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.5s">
                <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Explore & Choose</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Discover unique workshops in traditional craft villages. Select a session that matches your interest, from pottery to bamboo crafting.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Secure & Pay</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Register for your chosen workshop and pay online via variety of payment methods (Visa, MasterCard, PayPal...) to ensure your participation.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Participate & Learn</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Attend the workshop, engage with local artisans, and deepen your understanding of Vietnamese cultural arts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->


    
<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Team</h6>
            <h1 class="mb-5">Meet Our Team</h1>
        </div>
        <div class="row g-4">
            <?php
            $team_members = [
                ["img/ngoc.jpg", "Yến Ngọc", "CEO - Team Leader"],
                ["img/lan.jpg", "Ngọc Lan", "Finance Director"],
                ["img/hai.jpg", "Huỳnh Hải", "Marketing Director"],
                ["img/duong.jpg", "Ánh Dương", "Tech. Director"],
                ["img/anh.jpg", "Minh Anh", "Tech. Director"],
                ["img/nhi.jpg", "Yến Nhi", "CSM Officer"],
            ];
            $delay = 0.1;
            foreach ($team_members as $member) : ?>
                <div class="col-lg col-md-6 wow zoomIn" data-wow-delay="<?php echo $delay; ?>s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/<?php echo $member[0]; ?>" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0"><?php echo $member[1]; ?></h5>
                            <small><?php echo $member[2]; ?></small>
                        </div>
                    </div>
                </div>
            <?php $delay += 0.1; endforeach; ?>
        </div>
    </div>
</div>
<!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Reviews</h6>
                <h1 class="mb-5">From Our Clients!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="<?php echo get_template_directory_uri(); ?>/img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Sophia Nguyen</h5>
                    <p>Melbourne, Australia</p>
                    <p class="mb-0">"Joining the pottery workshop was a highlight of my trip to Vietnam. VietEssence made it so easy to connect with true artisans and learn a craft I've always admired. An unforgettable experience!"</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="<?php echo get_template_directory_uri(); ?>/img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Johnny Tran</h5>
                    <p>Danang, Vietnam</p>
                    <p class="mt-2 mb-0">"VietEssence offers a unique glimpse into Vietnamese culture. The bamboo crafting workshop was not only educational but also incredibly fun. It was the perfect way to immerse myself in the local traditions."</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="<?php echo get_template_directory_uri(); ?>/img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Bao Dien</h5>
                    <p>Rome, Italy</p>
                    <p class="mt-2 mb-0">"I loved the weaving workshop I attended through VietEssence. The artisans were welcoming and so skilled. It was a fantastic opportunity to learn about Vietnamese heritage hands-on. Highly recommended for anyone visiting Vietnam!"</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="<?php echo get_template_directory_uri(); ?>/img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Ankit Sharma</h5>
                    <p>New Delhi, India</p>
                    <p class="mt-2 mb-0">"From selecting the workshop to participating in it, every step was handled professionally by VietEssence. Their commitment to preserving and sharing Vietnamese culture is evident. I couldn't wait to return and explore more crafts!"</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

<?php get_footer(); ?>