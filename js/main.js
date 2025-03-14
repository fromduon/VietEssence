(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);

document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById("language-toggle");

    // Kiểm tra nếu chưa có ngôn ngữ nào trong LocalStorage, đặt mặc định là "en"
    if (!localStorage.getItem("language")) {
        localStorage.setItem("language", "en");
    }

    const currentLang = localStorage.getItem("language");

    // Đặt trạng thái ban đầu của toggle
    if (currentLang === "vn") {
        toggle.checked = true;
        changeLanguage("vn");
    } else {
        toggle.checked = false;
        changeLanguage("en");
    }

    // Sự kiện khi người dùng nhấn vào toggle
    document.getElementById("language-switch").addEventListener("click", function () {
        if (toggle.checked) {
            localStorage.setItem("language", "en");
            changeLanguage("en");
        } else {
            localStorage.setItem("language", "vn");
            changeLanguage("vn");
        }

        // Reload trang để cập nhật nội dung theo ngôn ngữ đã chọn
        setTimeout(() => {
            location.reload();
        }, 300);
    });
});

function changeLanguage(lang) {
    // Kiểm tra nếu ngôn ngữ đã được chọn, tránh reload liên tục
    if (localStorage.getItem("language") !== lang) {
        // Lưu ngôn ngữ vào LocalStorage
        localStorage.setItem("language", lang);

        // Lưu vào Cookie để PHP có thể sử dụng
        document.cookie = "language=" + lang + "; path=/; max-age=" + (60 * 60 * 24 * 30);

        // Chỉ reload trang nếu ngôn ngữ thực sự thay đổi
        location.reload();
    }
}
