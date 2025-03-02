<?php get_header(); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    // Lấy dữ liệu từ custom fields
                    $overview = get_post_meta(get_the_ID(), 'overview', true) ?: 'No overview available.';
                    $detailed = get_post_meta(get_the_ID(), 'detailed', true) ?: 'No details available.';
                    $description = get_post_meta(get_the_ID(), 'description', true) ?: 'No description available.';
                    $discount = get_post_meta(get_the_ID(), 'discount', true) ?: 'No discount';
                    $location = get_post_meta(get_the_ID(), 'location', true) ?: 'Unknown Location';
                    $duration = get_post_meta(get_the_ID(), 'duration', true) ?: 'Unknown Duration';

                    // Lấy ảnh đại diện từ custom field hoặc ảnh thumbnail mặc định
                    $thumbnail_id = get_post_meta(get_the_ID(), 'thumbnail', true);
                    $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'large');

                    if (!$thumbnail_url) {
                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    }

                    if (!$thumbnail_url) {
                        $thumbnail_url = get_template_directory_uri() . '/img/default-image.jpg';
                    }
            ?>
                    <article class="mb-5">
                        <h1 class="fw-bold"><?php the_title(); ?></h1>
                        <p class="text-muted">Published on <?php echo get_the_date(); ?></p>

                        <div class="mb-4">
                            <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title(); ?>" class="img-fluid rounded">
                        </div>

                        <div class="border rounded p-4 bg-light mb-4">
                            <h4 class="fw-bold">Workshop Details</h4>
                            <p><strong>📍 Location:</strong> <?php echo esc_html($location); ?></p>
                            <p><strong>⏳ Duration:</strong> <?php echo esc_html($duration); ?></p>
                            <p><strong>💰 Discount:</strong> <?php echo esc_html($discount); ?></p>
                        </div>

                        <div class="mb-4">
                            <h4 class="fw-bold">Overview</h4>
                            <p><?php echo esc_html($overview); ?></p>
                        </div>

                        <div class="mb-4">
                            <h4 class="fw-bold">Detailed Description</h4>
                            <p><?php echo nl2br(esc_html($detailed)); ?></p>
                        </div>

                        <div class="mb-5">
                            <h4 class="fw-bold">Additional Information</h4>
                            <p><?php echo nl2br(esc_html($description)); ?></p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <?php previous_post_link('<strong>⬅ %link</strong>', 'Previous Workshop'); ?>
                            <?php next_post_link('<strong>%link ➡</strong>', 'Next Workshop'); ?>
                        </div>
                    </article>
            <?php
                endwhile;
            else :
                echo "<p class='text-center text-muted'>Sorry, no workshop details found.</p>";
            endif;
            ?>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="bg-light p-4 rounded">
                <h4 class="fw-bold">Other Workshops</h4>
                <ul class="list-unstyled">
                    <?php
                    $related_args = array(
                        'post_type'      => 'post',
                        'category_name'  => 'workshop',
                        'posts_per_page' => 5,
                        'post__not_in'   => array(get_the_ID())
                    );
                    $related_query = new WP_Query($related_args);
                    if ($related_query->have_posts()) :
                        while ($related_query->have_posts()) : $related_query->the_post();
                    ?>
                            <li class="mb-2">
                                <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none">
                                    <?php the_title(); ?>
                                </a>
                            </li>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo "<li>No related workshops available.</li>";
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
