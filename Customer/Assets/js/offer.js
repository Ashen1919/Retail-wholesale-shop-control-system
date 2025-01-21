document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".swiper", {
        loop: true,  
        spaceBetween: 30, 
        autoplay: {
            delay: 3000, // Delay between slides (in ms)
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true, 
            dynamicBullets: true
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            },
        }
    });
});