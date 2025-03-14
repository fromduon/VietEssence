<!DOCTYPE html>
<html lang="en">

<?php
/*
Template Name: Workshop
*/
?>

<?php get_header(); ?>

<div class="container py-5">
    <div class="text-center mb-5 wow fadeInDown" data-wow-duration="1s">
        <h1 class="fw-bold text-primary">Discover New Workshops</h1>
        <p class="text-secondary fw-medium mx-auto" style="max-width: 1000px; font-size: 18px;">
            This curated list of workshops is updated weekly, offering you an authentic glimpse into Vietnam’s rich cultural heritage. Explore traditional crafts, engage with skilled artisans, and create your own handmade souvenirs.
        </p>
    </div>

    <form id="workshop-filter" class="mb-4">
        <div class="row g-3">
            <div class="col-md-4">
                <label class="form-label fw-bold">Price (USD)</label>
                <select class="form-select" name="price_range">
                    <option value="">All Prices</option>
                    <option value="0-50">Under $50</option>
                    <option value="50-100">$50 - $100</option>
                    <option value="100-200">$100 - $200</option>
                    <option value="200">Above $200</option>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold">Location</label>
                <select class="form-select" name="location">
                    <option value="">All Locations</option>
                    <option value="Da Nang">Da Nang</option>
                    <option value="Hoi An">Hoi An</option>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold">Other Filters</label>
                <select class="form-select" name="etc">
                    <option value="">All</option>
                    <option value="short">Short Duration (1-3 hours)</option>
                    <option value="long">Long Duration (5+ days)</option>
                </select>
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary px-4">Apply Filters</button>
            </div>
        </div>
    </form>

    <div class="row g-4">
        <?php
        $args = array(
            'post_type'      => 'post',
            'category_name'  => 'workshop',
            'posts_per_page' => 9
        );
        $query = new WP_Query($args);
        
        if ($query->have_posts()) :
            $delay = 0.2;
            while ($query->have_posts()) : $query->the_post();
        
                // Custom Fields
                $description = get_post_meta(get_the_ID(), 'description', true) ?: 'No description available.';
                $discount = get_post_meta(get_the_ID(), 'discount', true) ?: 'No discount';
                $location = get_post_meta(get_the_ID(), 'location', true) ?: 'Unknown Location';
                $duration = get_post_meta(get_the_ID(), 'duration', true) ?: 'Unknown Duration';
                $price = get_post_meta(get_the_ID(), 'price', true) ?: 'Contact for price';
        
                // Thumbnail Handling
                $thumbnail_id = get_post_meta(get_the_ID(), 'thumbnail', true);
                $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'medium') ?: get_the_post_thumbnail_url(get_the_ID(), 'medium');
                $thumbnail_url = $thumbnail_url ?: get_template_directory_uri() . '/img/default-image.jpg';
                ?>
        
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?php echo $delay; ?>s">
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
                            <p class="text-muted"><?php echo esc_html($description); ?></p>
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
                $delay += 0.2;
            endwhile;
            wp_reset_postdata();
        else :
            echo "<p class='text-center text-muted wow fadeIn' data-wow-duration='1s'>Currently, there are no available workshops. Please check back later!</p>";
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
