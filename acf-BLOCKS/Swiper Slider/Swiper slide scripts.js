var swiper = new Swiper('.swiper-front', {
    speed: 800,
    autoplay: {
        delay: 4000,
    },
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
    },
    preventClicks: false,   
});
