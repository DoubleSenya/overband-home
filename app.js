const swiper = new Swiper('.projects-slider', {

    // custom css-classes
    wrapperClass: 'projects-wrapper',
    slideClass: 'project',
    slideActiveClass: 'project-active',
    slideNextClass: 'project-next',
    slidePrevClass: 'project-prev',
    // 

    direction: 'horizontal',
    loop: true,
    speed: 1500,

    navigation: {
        nextEl: '.project-button-next',
        prevEl: '.project-button-prev',
    },

    slidesPerView: 1,
    initialSlide: 0,

    breakpoints: {
        817: {
            slidesPerView: 2,
        }
    },
});