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
        1101: {
            slidesPerView: 2,
        }
    },
});

window.addEventListener('load', (event) => {
    
    var mobileMenu = document.getElementById('mobileMenu')
    var body = document.getElementById('body')

    document.getElementById('mobileMenuOpenBtn').addEventListener('click', (e) => {
        
        mobileMenu.classList.add('mobile-menu__active')
        body.classList.add('no-scroll')
    })

    document.getElementById('mobileMenuCloseBtn').addEventListener('click', (e) => {
        mobileMenu.classList.remove('mobile-menu__active')
        body.classList.remove('no-scroll')
    })


    document.getElementById('orderFormButton').addEventListener('click', (e) => {

        let form = document.getElementById('orderForm')

        let formData = new FormData(form)

        fetch("http://overband-bot.com/form.php", { method: "POST", body: formData })
            .then((response) => {
                console.log(response.text())
            }).catch((error) => {
            
        });
    })
    
});