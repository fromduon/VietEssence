<?php
/**
 * Template Name: FAQs
 */
get_header(); 
?>

<div class="container" style="max-width: 800px; margin: 50px auto;">
    <h1 style="color: #2c3e50; text-align: center;">Frequently Asked Questions (FAQs)</h1>
    <p style="color: #7f8c8d; text-align: center;">Find answers to the most common questions about VietEssence.</p>

    <div>
        <?php 
        // Danh sách câu hỏi và trả lời
        $faqs = [
            "How do I book a workshop?" => "You can book a workshop directly on our website. Browse our <a href='".site_url('/workshop')."'>Workshops</a> page, select your preferred event, and proceed to checkout.",
            "What payment methods do you accept?" => "We accept major credit/debit cards (Visa, MasterCard, American Express), PayPal, and local bank transfers in Vietnam.",
            "Can I cancel my booking? Will I get a refund?" => "Yes, you can cancel up to 48 hours before the event for a full refund. Late cancellations will not be refunded. See our <a href='".site_url('/terms')."'>Terms & Conditions</a>.",
            "What should I bring to the workshop?" => "Most materials are provided. We recommend wearing comfortable clothing and bringing a notebook if you'd like to take notes.",
            "How can I contact customer support?" => "You can reach us via email at <a href='mailto:contact@vietessence.art'>contact@vietessence.art</a> or call us at +8481 714 7773.",
            "Is my personal information safe?" => "Yes, we use SSL encryption and secure servers to protect your data. Read more in our <a href='".site_url('/policy')."'>Privacy Policy</a>.",
        ];

        // Hiển thị danh sách FAQs
        $count = 1;
        foreach ($faqs as $question => $answer) :
        ?>
        <div style="padding: 15px; border-bottom: 1px solid #ddd;">
            <h2 style="font-size: 18px; color: #2c3e50; margin: 0;"><?php echo $count . ". " . $question; ?></h2>
            <p style="font-size: 16px; color: #34495e; margin-top: 5px;"><?php echo $answer; ?></p>
        </div>
        <?php 
        $count++;
        endforeach; 
        ?>
    </div>
</div>

<?php get_footer(); ?>
