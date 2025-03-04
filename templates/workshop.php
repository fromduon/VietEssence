<!DOCTYPE html>
<html lang="en">

<?php
/*
Template Name: Workshop
*/
?>

<?php get_header(); ?>

<div class="container py-5">
    <!-- Phần tiêu đề -->
    <div class="text-center mb-5 wow fadeInDown" data-wow-duration="1s">
        <h1 class="fw-bold text-primary">Discover New Workshops</h1>
        <p class="text-muted fst-italic" style="font-size: 18px;">
            (Updated: <?php echo esc_html(date('l, d/m/Y', strtotime('Monday this week'))); ?>)
        </p>
        <p class="text-secondary fw-medium mx-auto" style="max-width: 700px; font-size: 18px;">
            This curated list of workshops is updated weekly, offering you an authentic glimpse into Vietnam’s rich cultural heritage. Explore traditional crafts, engage with skilled artisans, and create your own handmade souvenirs.
        </p>
    </div>

    <!-- Danh sách Workshop -->
    <div class="row g-4">
        <?php
        $args = array(
            'post_type'      => 'post',
            'category_name'  => 'workshop',
            'posts_per_page' => 9
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            $delay = 0.2; // Độ trễ tăng dần giữa các workshop
            while ($query->have_posts()) : $query->the_post();

                // Custom Fields
                $description = get_post_meta(get_the_ID(), 'description', true) ?: 'No description available.';
                $discount = get_post_meta(get_the_ID(), 'discount', true) ?: 'No discount';
                $location = get_post_meta(get_the_ID(), 'location', true) ?: 'Unknown Location';
                $duration = get_post_meta(get_the_ID(), 'duration', true) ?: 'Unknown Duration';

                // Thumbnail Handling
                $thumbnail_id = get_post_meta(get_the_ID(), 'thumbnail', true);
                $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'medium') ?: get_the_post_thumbnail_url(get_the_ID(), 'medium');
                $thumbnail_url = $thumbnail_url ?: get_template_directory_uri() . '/img/default-image.jpg';
                ?>
                
                <!-- Card Workshop với hiệu ứng fadeInUp -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?php echo $delay; ?>s">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="position-relative">
                            <img src="<?php echo esc_url($thumbnail_url); ?>" class="card-img-top img-fluid workshop-image" alt="<?php the_title(); ?>">
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2 px-3 py-1">
                                <?php echo esc_html($discount); ?>
                            </span>
                        </div>
                        <div class="text-center p-4">
                            <h4 class="mb-0"><?php the_title(); ?></h4>
                            <p class="text-muted"><?php echo esc_html($description); ?></p>
                        </div>
                        <div class="d-flex justify-content-around py-3 border-top">
                            <span><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo esc_html($location); ?></span>
                            <span><i class="fa fa-clock text-primary me-2"></i><?php echo esc_html($duration); ?></span>
                        </div>
                        <div class="text-center pb-3">
                            <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-primary px-3 border-end">
                                Details
                            </a>
                        </div>
                    </div>
                </div>

            <?php 
                $delay += 0.2; // Tăng độ trễ cho hiệu ứng tiếp theo
            endwhile;
            wp_reset_postdata();
        else :
            echo "<p class='text-center text-muted wow fadeIn' data-wow-duration='1s'>Currently, there are no available workshops. Please check back later!</p>";
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
