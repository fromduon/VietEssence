<?php
/**
 * Template Name: Terms and Conditions
 */
get_header(); 
?>

<div class="container" style="max-width: 800px; margin: 50px auto;">
    <h1 style="color: #2c3e50; text-align: center;">Terms and Conditions</h1>
    <p style="color: #7f8c8d; text-align: center;">Effective Date: <?php echo date('F d, Y'); ?></p>

    <div>
        <?php 
        $terms_sections = [
            "1. Introduction" => "Welcome to <strong>VietEssence</strong>. These Terms and Conditions govern your use of <strong>" . get_bloginfo('url') . "</strong>. By using our website, you agree to these terms.",
            "2. Definitions" => "<strong>Company</strong> refers to VietEssence. <br><strong>Website</strong> refers to " . get_bloginfo('url') . ". <br><strong>User</strong> means any person who accesses our website.",
            "3. Booking and Payments" => "All workshop bookings must be completed through our website. Payments are securely processed via PayPal and Stripe.",
            "4. Cancellations & Refunds" => "Users can cancel bookings up to 48 hours before the event for a full refund. Late cancellations will not be refunded. See our <a href='" . site_url('/terms') . "'>Terms & Conditions</a>.",
            "5. User Conduct" => "Users must not engage in any activity that disrupts or harms other users, staff, or services.",
            "6. Intellectual Property" => "All content on VietEssence, including text, images, and logos, is the property of VietEssence. Users may not copy, distribute, or modify any materials without permission.",
            "7. Limitation of Liability" => "We are not responsible for any personal injury, loss, or damages arising from the use of our services.",
            "8. Privacy Policy" => "Our Privacy Policy explains how we handle your data. By using our services, you agree to our data policies. Read more at <a href='" . site_url('/policy') . "'>Privacy Policy</a>.",
            "9. Changes to Terms" => "We may update these terms from time to time. The latest version will always be available on our website.",
            "10. Contact Us" => "For inquiries about these terms, please contact us at:<br>Email: <a href='mailto:contact@vietessence.art'>contact@vietessence.art</a><br>Phone: +8481 714 7773."
        ];

        $count = 1;
        foreach ($terms_sections as $title => $content) :
        ?>
        <div style="padding: 15px; border-bottom: 1px solid #ddd;">
            <h2 style="font-size: 18px; color: #2c3e50; margin: 0;"><?php echo $title; ?></h2>
            <p style="font-size: 16px; color: #34495e; margin-top: 5px;"><?php echo $content; ?></p>
        </div>
        <?php 
        $count++;
        endforeach; 
        ?>
    </div>
</div>

<?php get_footer(); ?>
