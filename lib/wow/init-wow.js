document.addEventListener("DOMContentLoaded", function () {
    // Khởi động WOW.js
    new WOW().init();

    // Khởi động Owl Carousel
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 3 }
        }
    });

    // Khởi động Tempus Dominus (DateTime Picker)
    $('#datetimepicker').datetimepicker({
        format: 'L'
    });
});

document.addEventListener("DOMContentLoaded", function () {
    if (typeof WOW !== 'undefined') {
        new WOW().init();
    } else {
        console.error("WOW.js not loaded");
    }
});
