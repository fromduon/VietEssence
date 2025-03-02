<!DOCTYPE html>
<html lang="en">

<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp about-content" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome To <span class="text-primary">VietEssence</span></h1>
                    <p class="mb-4 large-text">At VietEssence, we connect international travelers with authentic Vietnamese cultural experiences. Our platform offers weekly updates on workshops and activities in traditional craft villages, primarily in Da Nang and Hoi An.</p>
                    <p class="mb-4 large-text">Discover the art of Vietnamese craftsmanship through hands-on workshops, interact with local artisans, and immerse yourself in the heritage of Vietnam. Whether you're looking to explore pottery, weaving, or bamboo crafting, we provide you with unique opportunities to connect with the rich traditions of this beautiful country.</p>
                    <!-- <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.6s">
                <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                <h1 class="mb-5">Activites</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="package-item position-relative">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/package-1.jpg" alt="">
                            <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">15% OFF</div>
                            <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF</div> -->
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Da Nang</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>2 days</small>
                            <!-- <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small> -->
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Pottery Making</h3>
                            <!-- <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div> -->
                            <p>Master the ancient craft of Vietnamese pottery and create your own ceramic piece.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item position-relative">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/package-2.jpg" alt="">
                            <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF</div>
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Hoi An</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>1 days</small>
                            <!-- <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small> -->
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Lantern Making</h3>
                             <!-- <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div> -->
                            <p> Craft a traditional Vietnamese lantern to capture the essence of Hội An.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item position-relative">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/package-3.jpg" alt="">
                            <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">25% OFF</div>
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Da Nang</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>1 day</small>
                            <!-- <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small> -->
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Silk Painting</h3>
                             <!-- <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div> -->
                            <p>Paint on silk using age-old techniques in a creative session.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="package-item position-relative">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/package-4.jpg" alt="">
                            <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">35% OFF</div>
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Da Nang</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <!-- <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small> -->
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Cooking Class</h3>
                             <!-- <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div> -->
                            <p>Cook and taste traditional Đà Nẵng dishes (Bánh xèo, Bún chả cá...) with expert chefs.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="package-item position-relative">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/package-5.jpg" alt="">
                            <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">25% OFF</div>
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Hoi An</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>1 day</small>
                            <!-- <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small> -->
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Bamboo Crafting</h3>
                             <!-- <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div> -->
                            <p>Create eco-friendly items in our hands-on bamboo crafting course.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="package-item position-relative">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/package-6.jpg" alt="">
                            <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF</div>
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Hoi An</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>1 day</small>
                            <!-- <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small> -->
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Fabric Dyeing</h3>
                             <!-- <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div> -->
                            <p>Experience the art of fabric dyeing using natural, local dyes.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Package End -->



    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.5s">
                <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Explore & Choose</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Discover unique workshops in traditional craft villages. Select a session that matches your interest, from pottery to bamboo crafting.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Secure & Pay</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Register for your chosen workshop and pay online via variety of payment methods (Visa, MasterCard, PayPal...) to ensure your participation.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Participate & Learn</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Attend the workshop, engage with local artisans, and deepen your understanding of Vietnamese cultural arts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->


    
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.5s">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Team</h6>
                <h1 class="mb-5">Meet Our Team</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/ngoc.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Yến Ngọc</h5>
                            <small>CEO - Team Leader</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/lan.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Ngọc Lan</h5>
                            <small>Finance Director</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/hai.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Huỳnh Hải</h5>
                            <small>Marketing Director</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/duong.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Ánh Dương</h5>
                            <small>Tech. Director</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/anh.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Minh Anh</h5>
                            <small>Tech. Director</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/nhi.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Yến Nhi</h5>
                            <small>HR Officer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Reviews</h6>
                <h1 class="mb-5">From Our Clients!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="<?php echo get_template_directory_uri(); ?>/img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Sophia Nguyen</h5>
                    <p>Melbourne, Australia</p>
                    <p class="mb-0">"Joining the pottery workshop was a highlight of my trip to Vietnam. VietEssence made it so easy to connect with true artisans and learn a craft I've always admired. An unforgettable experience!"</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="<?php echo get_template_directory_uri(); ?>/img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Johnny Tran</h5>
                    <p>Danang, Vietnam</p>
                    <p class="mt-2 mb-0">"VietEssence offers a unique glimpse into Vietnamese culture. The bamboo crafting workshop was not only educational but also incredibly fun. It was the perfect way to immerse myself in the local traditions."</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="<?php echo get_template_directory_uri(); ?>/img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Lee Min Dien</h5>
                    <p>Rome, Italy</p>
                    <p class="mt-2 mb-0">"I loved the weaving workshop I attended through VietEssence. The artisans were welcoming and so skilled. It was a fantastic opportunity to learn about Vietnamese heritage hands-on. Highly recommended for anyone visiting Vietnam!"</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="<?php echo get_template_directory_uri(); ?>/img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Ankit Sharma</h5>
                    <p>New Delhi, India</p>
                    <p class="mt-2 mb-0">"From selecting the workshop to participating in it, every step was handled professionally by VietEssence. Their commitment to preserving and sharing Vietnamese culture is evident. I couldn't wait to return and explore more crafts!"</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

<?php get_footer(); ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>