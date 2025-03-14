<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<!-- About Us Start -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content wow fadeInLeft" data-wow-delay="0.4s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Who We Are</h1>
                    <p class="mb-4 large-text">VietEssence is dedicated to connecting travelers with the heart of Vietnamese culture. Our workshops allow visitors to experience traditional crafts, meet skilled artisans, and gain deeper insights into Vietnam’s rich heritage.</p>
                    <p class="mb-4 large-text">Whether you're an artist, a traveler, or just curious about local traditions, we bring you closer to authentic cultural experiences.</p>
                    <a href="<?php echo site_url('/workshop'); ?>" class="btn btn-primary">Explore Workshops</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image wow fadeInRight" data-wow-delay="0.4s">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about-vietnam.jpg" class="img-fluid rounded shadow-lg" alt="About VietEssence">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us End -->

<!-- Our Team Start -->
<section class="team-section py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.6s">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Team</h6>
            <h1 class="mb-5">Meet the People Behind VietEssence</h1>
        </div>
        <div class="row g-4">
            <?php
            $team_members = [
                ["img/ngoc.jpg", "Yến Ngọc", "CEO - Team Leader"],
                ["img/lan.jpg", "Ngọc Lan", "Finance Director"],
                ["img/hai.jpg", "Huỳnh Hải", "Marketing Director"],
                ["img/duong.jpg", "Ánh Dương", "Technical Director"],
                ["img/anh.jpg", "Minh Anh", "Technical Director"],
                ["img/nhi.jpg", "Yến Nhi", "CSM Officer"],
            ];
            foreach ($team_members as $member) : ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-card">
                        <div class="team-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/<?php echo $member[0]; ?>" class="img-fluid" alt="<?php echo $member[1]; ?>">
                            <div class="team-overlay">
                                <h5><?php echo $member[1]; ?></h5>
                                <p><?php echo $member[2]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Our Team End -->

<?php get_footer(); ?>