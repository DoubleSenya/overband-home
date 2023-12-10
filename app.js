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

    var elements = document.querySelectorAll(".nav-link__mobile")
    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('click', (e) => {
            mobileMenu.classList.remove('mobile-menu__active')
            body.classList.remove('no-scroll')
        })
    }


    document.getElementById('orderFormButton').addEventListener('click', (e) => {

        e.preventDefault();

        let form = document.getElementById('orderForm')

        let formData = new FormData(form)

        fetch("/form.php", { 
            method: "POST", 
            body: formData,
        })
            .then((response) => {
                form.reset();

                document.getElementById('successModal').classList.add('form-modal-active');

                setTimeout(() =>{
                    document.getElementById('successModal').classList.remove('form-modal-active')
                }, 2500)

            }).catch((error) => {
                document.getElementById('errorModal').classList.add('form-modal-active');

                setTimeout(() =>{
                    document.getElementById('errorModal').classList.remove('form-modal-active')
                }, 2500)
        });
    })
    
});