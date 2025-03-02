<!-    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>FPT City, Hoa Hai Ward, Ngu Hanh Son Dist., Danang</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+8481 714 7773</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>contact.vietessence@gmail.com</p>
                    <div class="d-flex pt-2">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Subscribe to our newsletter and never miss out on exciting cultural experiences in Vietnam!</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">2025 VietEssence</a> by Bird Can Swim</a>, All Right Reserved.

                        <!-- /*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support.  -->
                        Powered by <a class="border-bottom" href="https://htmlcodex.com">HTMLCodex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- WordPress Footer -->
<?php wp_footer(); ?>
</body>
</html>

<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Book A Tour</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="bookingForm">
                    <div class="mb-3">
                        <label class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="userName" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="userEmail" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Workshop</label>
                        <input type="text" class="form-control" id="workshopTitle" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control" id="workshopLocation" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date & Time</label>
                        <input type="datetime-local" class="form-control" id="bookingDateTime" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Special Request</label>
                        <textarea class="form-control" id="specialRequest" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Book Now</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Khi nút "Book Now" được nhấn
    document.querySelectorAll(".open-booking-modal").forEach(button => {
        button.addEventListener("click", function () {
            let workshopTitle = this.getAttribute("data-title");
            document.getElementById("workshopTitle").value = workshopTitle;
        });
    });

    // Xử lý khi submit form
    document.getElementById("bookingForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Ngăn chặn tải lại trang

        // Lấy dữ liệu từ form
        let userName = document.getElementById("userName").value;
        let userEmail = document.getElementById("userEmail").value;
        let workshopTitle = document.getElementById("workshopTitle").value;
        let bookingDateTime = document.getElementById("bookingDateTime").value;
        let destination = document.getElementById("destination").value;
        let specialRequest = document.getElementById("specialRequest").value;

        // Gửi dữ liệu qua AJAX để xử lý
        fetch("<?php echo admin_url('admin-ajax.php'); ?>", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams({
                action: "submit_booking",
                userName, userEmail, workshopTitle, bookingDateTime, destination, specialRequest
            })
        })
        .then(response => response.text())
        .then(data => {
            alert("Booking successfully submitted!");
            document.getElementById("bookingForm").reset(); // Reset form
        })
        .catch(error => console.error("Error:", error));
    });
});
</script>
