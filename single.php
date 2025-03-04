<?php get_header(); ?>

<div class="container mt-4">
    <div class="row">
        <!-- Cột trái: Tác giả & Chia sẻ -->
        <aside class="col-lg-2 d-none d-lg-block wow fadeInLeft" data-wow-delay="0.2s">
            <div class="text-muted">
                <p class="fw-bold">PUBLISHED:</p>
                <p><?php echo get_the_date(); ?></p>

                <p class="fw-bold">SHARE IT!</p>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" target="_blank" class="d-block mb-2"><i class="fab fa-linkedin"></i> POST</a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="d-block mb-2"><i class="fab fa-facebook"></i> SHARE</a>
                <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" target="_blank" class="d-block"><i class="fab fa-twitter"></i> TWEET</a>
            </div>
        </aside>

        <!-- Nội dung bài viết -->
        <div class="col-lg-7">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <!-- Ảnh đại diện lớn -->
                <?php
                $thumbnail_id = get_post_meta(get_the_ID(), 'thumbnail', true);
                $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'large') ?: get_the_post_thumbnail_url(get_the_ID(), 'large');
                if (!$thumbnail_url) {
                    $thumbnail_url = get_template_directory_uri() . '/img/default-image.jpg';
                }
                ?>
                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title(); ?>" class="img-fluid rounded shadow-lg mb-4 wow fadeInUp" data-wow-delay="0.3s">

                <!-- Tiêu đề -->
                <h1 class="fw-bold wow fadeInLeft" data-wow-delay="0.4s"><?php the_title(); ?></h1>
                <?php
$date_raw = get_post_meta(get_the_ID(), 'date', true);
if (!empty($date_raw) && preg_match('/^\d{8}$/', $date_raw)) {
    $formatted_date = DateTime::createFromFormat('Ymd', $date_raw)->format('F j, Y');
} else {
    $formatted_date = 'Unknown date';
}
?>
<p class="text-muted wow fadeInLeft" data-wow-delay="0.5s">Takes place on: <?php echo esc_html($formatted_date); ?></p>


                <!-- Nội dung chính -->
                <div class="content wow fadeInUp" data-wow-delay="0.6s">
                    <?php the_content(); ?>
                </div>

                <!-- Thông tin Workshop -->
                <div class="border rounded p-4 bg-light mt-4 shadow-sm wow fadeInRight" data-wow-delay="0.7s">
                    <h4 class="fw-bold"><i class="fas fa-info-circle"></i> Workshop Details</h4>
                    <p><strong>📍 Location:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'location', true)); ?></p>
                    <p><strong>⏳ Duration:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'duration', true)); ?></p>
                    <p><strong>💰 Discount:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'discount', true)); ?></p>
                </div>

                <!-- Điều hướng bài viết -->
                <div class="d-flex justify-content-between mt-5 wow fadeInUp" data-wow-delay="0.8s">
                    <?php previous_post_link('<strong>⬅ %link</strong>', 'Previous Workshop'); ?>
                    <?php next_post_link('<strong>%link ➡</strong>', 'Next Workshop'); ?>
                </div>
            <?php endwhile; endif; ?>
        </div>

        <!-- Sidebar phải -->
        <aside class="col-lg-3">
            <div class="bg-light p-4 rounded shadow-sm mb-4 wow fadeIn" data-wow-delay="0.5s">
                <h4 class="fw-bold">MEET THE ARTISANS</h4>
                <p>Discover the talented craftsmen behind our workshops and learn about their inspiring stories.</p>
                <a href="https://www.victoriahotels.asia/vi/tin-tuc/nhung-ban-tay-nghe-nhan-cua-hoi-an/" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Click here</a>
            </div>

            <div class="bg-white p-4 rounded shadow-sm mb-4 wow fadeIn" data-wow-delay="0.6s">
                <h4 class="fw-bold">JOIN OUR CREATIVE COMMUNITY</h4>
                <p>Receive insights, tips, and early access to unique Vietnamese craft workshops!</p>
                <form>
                    <input type="email" class="form-control mb-2" placeholder="Enter your email">
                    <button type="submit" class="btn btn-primary w-100">Sign up</button>
                </form>
            </div>

            <div class="bg-white p-4 rounded shadow-sm wow fadeIn" data-wow-delay="0.7s">
                <h4 class="fw-bold">POPULAR WORKSHOPS</h4>
                <ul class="list-unstyled">
                    <?php
                    $popular_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'orderby' => 'comment_count',
                        'order' => 'DESC',
                    );
                    $popular_query = new WP_Query($popular_args);
                    if ($popular_query->have_posts()) :
                        while ($popular_query->have_posts()) : $popular_query->the_post();
                    ?>
                            <li class="mb-3 p-2 border-bottom">
                                <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none d-flex align-items-center">
                                    <?php
                                    $thumbnail_id = get_post_meta(get_the_ID(), 'thumbnail', true);
                                    $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'thumbnail');

                                    if (!$thumbnail_url) {
                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                                    }

                                    if (!$thumbnail_url) {
                                        $thumbnail_url = get_template_directory_uri() . '/img/default-thumbnail.jpg';
                                    }
                                    ?>
                                    <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title(); ?>" class="rounded me-2" width="50">
                                    <span class="workshop-title"><?php the_title(); ?></span>
                                </a>
                            </li>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </ul>
            </div>
        </aside>
    </div>
</div>

<!-- Booking Section -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="booking p-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 text-white">
                    <h6 class="text-white text-uppercase">Booking</h6>
                    <h1 class="text-white mb-4">Online Booking</h1>
                    <p class="mb-4">Join our hands-on workshops and experience Vietnam’s traditional craftsmanship firsthand. Learn from skilled artisans, create your own masterpiece, and take home unforgettable memories.</p>
                    <p class="mb-4">Secure your spot today and immerse yourself in the beauty of Vietnamese culture!</p>
                </div>
                <div class="col-md-6">
                    <h1 class="text-white mb-4">Booking</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                    <label for="message">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
