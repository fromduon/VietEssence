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
            This curated list of workshops is updated weekly, offering you an authentic glimpse into Vietnam’s rich cultural heritage.
        </p>
    </div>

    <!-- Form lọc -->
    <form id="workshop-filter" class="mb-4 wow fadeInUp" method="GET" action="">
        <div class="row g-3">
            <div class="col-md-4">
                <label class="form-label fw-bold">Price (USD)</label>
                <select class="form-select" name="price">
                    <option value="">All Prices</option>
                    <option value="0-50" <?php selected($_GET['price'] ?? '', '0-50'); ?>>Under $50</option>
                    <option value="50-100" <?php selected($_GET['price'] ?? '', '50-100'); ?>>$50 - $100</option>
                    <option value="100-200" <?php selected($_GET['price'] ?? '', '100-200'); ?>>$100 - $200</option>
                    <option value="200" <?php selected($_GET['price'] ?? '', '200'); ?>>Above $200</option>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold">Location</label>
                <select class="form-select" name="location">
                    <option value="">All Locations</option>
                    <option value="Da Nang" <?php selected($_GET['location'] ?? '', 'Da Nang'); ?>>Da Nang</option>
                    <option value="Hoi An" <?php selected($_GET['location'] ?? '', 'Hoi An'); ?>>Hoi An</option>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold">Duration</label>
                <select class="form-select" name="duration">
                    <option value="">All</option>
                    <option value="short" <?php selected($_GET['duration'] ?? '', 'short'); ?>>Short (1-3 hours)</option>
                    <option value="long" <?php selected($_GET['duration'] ?? '', 'long'); ?>>Long (4+ hours)</option>
                </select>
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary px-4 rounded-3">Apply Filters</button>
            </div>
        </div>
    </form>

    <div class="row g-4">
        <?php
        $meta_query = array('relation' => 'AND');

        // Lọc theo giá
        if (!empty($_GET['price'])) {
            $price_range = explode('-', $_GET['price']);
            if (count($price_range) == 2) {
                $meta_query[] = array(
                    'key' => 'price',
                    'value' => array($price_range[0], $price_range[1]),
                    'type' => 'NUMERIC',
                    'compare' => 'BETWEEN'
                );
            } elseif ($_GET['price'] == '200') {
                $meta_query[] = array(
                    'key' => 'price',
                    'value' => 200,
                    'type' => 'NUMERIC',
                    'compare' => '>='
                );
            }
        }

        if (!empty($_GET['location'])) {
            $meta_query[] = array(
                'key' => 'location',
                'value' => sanitize_text_field($_GET['location']),
                'compare' => '='
            );
        }

        if (!empty($_GET['duration'])) {
            if ($_GET['duration'] == 'short') {
                $meta_query[] = array(
                    'key' => 'duration',
                    'value' => 3,
                    'type' => 'NUMERIC',
                    'compare' => '<='
                );
            } elseif ($_GET['duration'] == 'long') {
                $meta_query[] = array(
                    'key' => 'duration',
                    'value' => 4,
                    'type' => 'NUMERIC',
                    'compare' => '>='
                );
            }
        }

        $args = array(
            'post_type' => 'post',
            'category_name' => 'workshop',
            'posts_per_page' => 9,
            'meta_query' => $meta_query
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            $delay = 0.2;
            while ($query->have_posts()) : $query->the_post();
                $description = get_post_meta(get_the_ID(), 'description', true) ?: 'No description available.';
                $discount = get_post_meta(get_the_ID(), 'discount', true) ?: 'No discount';
                $location = get_post_meta(get_the_ID(), 'location', true) ?: 'Unknown Location';
                $duration = get_post_meta(get_the_ID(), 'duration', true) ?: 'Unknown Duration';
                $price = get_post_meta(get_the_ID(), 'price', true) ?: 'Contact for price';

                $thumbnail_id = get_post_meta(get_the_ID(), 'thumbnail', true);
                $thumbnail_url = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : get_the_post_thumbnail_url(get_the_ID(), 'medium');
                $thumbnail_url = $thumbnail_url ?: get_template_directory_uri() . '/img/default-image.jpg';

                ?>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?php echo $delay; ?>s">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="position-relative">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url($thumbnail_url); ?>" class="card-img-top img-fluid workshop-image" alt="<?php the_title(); ?>">
                            </a>
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2 px-3 py-1">
                            <?php echo esc_html($discount) . '% OFF'; ?>
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
                            <span><i class="fa fa-clock text-primary me-2"></i><?php echo esc_html($duration) . ' ' . ($duration == 1 ? 'hour' : 'hours'); ?> </span>
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
            echo "<p class='text-center text-muted wow fadeIn' data-wow-duration='1s'>No workshops found.</p>";
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
