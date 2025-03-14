<?php
/**
 * Template Name: Policy
 */
get_header(); 
?>

<div class="container" style="max-width: 800px; margin: 50px auto;">
    <h1 style="color: #2c3e50; text-align: center;">Privacy Policy</h1>
    <p style="color: #7f8c8d; text-align: center;">Effective Date: <?php echo date('F d, Y'); ?></p>

    <div>
        <?php 
        $policy_sections = [
            "1. Introduction" => "Welcome to <strong>VietEssence</strong>. Your privacy is critically important to us. This Privacy Policy explains how we collect, use, and protect your personal data when you visit and use <strong>" . get_bloginfo('url') . "</strong>.",
            "2. Information We Collect" => "We collect personal data such as name, email, phone number, and booking details. Additionally, we use cookies and analytics to enhance user experience.",
            "3. How We Use Your Information" => "We use your data to process bookings, personalize content, and improve our services.",
            "4. How We Share Your Data" => "We do not sell your data. However, we may share it with service providers for payment processing and analytics.",
            "5. Cookies & Tracking" => "You can manage cookie preferences in your browser settings. Learn more at <a href='https://www.allaboutcookies.org' target='_blank'>AllAboutCookies.org</a>.",
            "6. Your Rights" => "You have the right to access, correct, or delete your personal data. Contact us at <a href='mailto:contact@vietessence.art'>contact@vietessence.art</a>.",
            "7. Security Measures" => "We use SSL encryption and secure servers to protect your data.",
            "8. Changes to This Policy" => "We may update this policy from time to time. Last updated on: <strong>" . date('F d, Y') . "</strong>.",
            "9. Contact Us" => "For any inquiries regarding this policy, please contact us at:<br>Email: <a href='mailto:contact@vietessence.art'>contact@vietessence.art</a><br>Phone: +8481 714 7773."
        ];

        $count = 1;
        foreach ($policy_sections as $title => $content) :
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
