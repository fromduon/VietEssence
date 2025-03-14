<!-- WordPress Footer -->
<?php wp_footer(); ?>
</body>
</html>

<script src="https://messenger.svc.chative.io/static/v1.0/channels/s1b60599b-8741-426a-95aa-84ddf60847c5/messenger.js?mode=livechat" defer="defer"></script>

<!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a href="<?php echo get_permalink(get_page_by_path('about')->ID); ?>" class="btn btn-link" href="">About Us</a>
                    <a href="<?php echo get_permalink(get_page_by_path('contact')->ID); ?>" class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>FPT City, Hoa Hai Ward, Ngu Hanh Son Dist., Danang</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+8481 714 7773</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>contact@vietessence.art</p>
                    <div class="d-flex pt-2">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Subscribe to our newsletter and never miss out on exciting cultural experiences in Vietnam!</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">2025 VietEssence</a> by Bird Can Swim</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="<?php echo site_url(); ?>">Home</a>
                            <a href="<?php echo get_permalink(get_page_by_path('contact')->ID); ?>">Help</a>
                            <a href="<?php echo wp_login_url(); ?>">Administrator</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

