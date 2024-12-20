<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>OVERBAND | Веб-студия</title>
        <meta name="description" content="Добро пожаловать в нашу веб-студию, где мы создаем не просто веб-сайты, а мощные онлайн-платформы для вашего бизнеса. Мы специализируемся в веб-разработке, предоставляя выдающиеся результаты в создании современных и интуитивно понятных сайтов, а также веб-приложений, отвечающих потребностям вашего бизнеса. Наш опыт включает в себя индивидуальный подход к разработке бизнес-сайтов, корпоративных веб-решений, оптимизации для поисковых систем, созданию электронной коммерции, мобильных приложений и лендингов, призванных привлекать внимание и конвертировать посетителей в клиентов. Мы гордимся тем, что наши проекты сочетают в себе креативность, технологическую экспертизу и внимание к деталям, чтобы помочь вашему бизнесу процветать в онлайн-пространстве.">
        <meta name="keywords" content="веб-разработка, cоздание сайтов, веб-дизайн, разработка веб-приложений, бизнес-сайты, корпоративные решения, оптимизация сайта, мобильные приложения для бизнеса, лендинги">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
        <link href="style.css" rel="stylesheet"/>
    </head>
    <body class="body" id="body">

        <!-- MOBILE MENU -->
        <div class="mobile-menu" id="mobileMenu">
            <div class="close-menu" id="mobileMenuCloseBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 24 23" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.16143 0.74697C2.57565 0.161181 1.6259 0.161267 1.04016 0.747013C0.454455 1.3328 0.454455 2.28263 1.04024 2.86842L9.87947 11.7066L1.74722 19.8389C1.16148 20.4246 1.16143 21.3744 1.74722 21.9602C2.33301 22.546 3.2828 22.5459 3.86854 21.9602L12.001 13.8278L20.1333 21.9591C20.7191 22.5449 21.6689 22.5448 22.2546 21.959C22.8405 21.3731 22.8405 20.4233 22.2544 19.8378L14.1223 11.7064L22.9604 2.86829C23.5463 2.28237 23.5462 1.33276 22.9604 0.74697C22.3746 0.161181 21.425 0.161052 20.8391 0.74697L12.0006 9.58546L3.16143 0.74697Z" fill="#D9D9D9"/>
                </svg>
            </div>
            <nav class="nav_menu__mobile">
                <!-- <a href="#" class="nav-link__mobile" href="">О НАС</a> -->
                <a href="#projectBlock" class="nav-link__mobile" href="">ПРОЕКТЫ</a>
                <a href="#serviceBlock" class="nav-link__mobile" href="">УСЛУГИ</a>
                <a href="#solutionBlock" class="nav-link__mobile" href="">РЕШЕНИЕ ДЛЯ ВАС</a>
            </nav>
        </div>
        <!--  -->

        <!-- HEADER -->
        <header class="header">
            <div class="header-left">
                <div class="header-logo">OVERBAND</div>
            </div>
            <div class="header-right">
                <nav class="nav-menu">
                    <!-- <a class="nav-link" href="">О НАС</a> -->
                    <a class="nav-link" href="#projectBlock">ПРОЕКТЫ</a>
                    <a class="nav-link" href="#serviceBlock">УСЛУГИ</a>
                    <a class="nav-link nav-link__big" href="#solutionBlock">РЕШЕНИЕ ДЛЯ ВАС</a>
                </nav>
            </div>
            <div class="header-right__mobile">
                <button class="burger-menu" id="mobileMenuOpenBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="15" viewBox="0 0 30 15" fill="none">
                        <rect width="30" height="3" rx="1.5" fill="#D9D9D9"/>
                        <rect y="6" width="30" height="3" rx="1.5" fill="#D9D9D9"/>
                        <rect y="12" width="30" height="3" rx="1.5" fill="#D9D9D9"/>
                    </svg>
                </button>
            </div>
        </header>
        <!--  -->

        <div class="block block-home">
            <div class="left">
                <div class="logo over">OVER</div>
                <div class="description">
                    Создаем сайты, веб-приложения, стартапы для вашего бизнеса
                </div>

                <!-- <div class="line"></div> -->
            </div>
            <div class="right">
                <div class="logo band">BAND</div>
            </div>
        </div>

        <div class="block block-projects">
            <div class="arrow-projects__mobile">
                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                    <path d="M38.3553 41.8553C40.2883 41.8553 41.8553 40.2883 41.8553 38.3553L41.8553 6.85534C41.8553 4.92234 40.2883 3.35534 38.3553 3.35534C36.4223 3.35534 34.8553 4.92234 34.8553 6.85534L34.8553 34.8553L6.85534 34.8553C4.92234 34.8553 3.35534 36.4223 3.35534 38.3553C3.35534 40.2883 4.92234 41.8553 6.85534 41.8553L38.3553 41.8553ZM0.525126 5.47487L35.8805 40.8302L40.8302 35.8805L5.47487 0.525126L0.525126 5.47487Z" fill="#E24343"/>
                </svg>
            </div>
            <div class="block-head" id="projectBlock">
                <h2 class="block-heading">ПРОЕКТЫ</h2>
                <!-- <a href="" class="block-details">ПОДРОБНОСТИ</a> -->
            </div>

            <div class="block-description">
                <div class="block-description__text">
                    Предлагаем ознакомиться с нашими недавними проектами
                </div>
                <!-- <div class="arrow-projects">
                    <svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59" fill="none">
                        <path d="M0.507023 53.5003C0.506657 56.2623 2.74447 58.5016 5.50533 58.502L50.4961 58.508C53.257 58.5084 55.4954 56.2697 55.4958 53.5077C55.4961 50.7457 53.2583 48.5064 50.4975 48.506L10.5057 48.5006L10.511 8.49241C10.5114 5.73042 8.27359 3.49108 5.51273 3.49071C2.75187 3.49034 0.513453 5.72907 0.513082 8.49106L0.507023 53.5003ZM51.4657 0.463266L1.97167 49.9642L9.04034 57.0377L58.5343 7.53673L51.4657 0.463266Z" fill="#E24343"/>
                    </svg>
                </div> -->
            </div>

            <div class="block-content">
                <div class="projects-slider">
                    <div class="projects-wrapper">
                        <div class="project">
                            <div class="project-background corrida">
                                <img src="/images/projects/corrida.png" alt="" class="project-logo" width="60%" height="55%">
                                <div class="project-categories">
                                    <div class="category">Приложение</div>
                                    <div class="category">2023</div>
                                </div>
                            </div>
                            <div class="project-info">
                                <div class="project-title">Corrida Invest</div>
                                <div class="project-description">Инвестиционный проект</div>
                            </div>
                        </div>
                        <div class="project">
                            <div class="project-background wishapp">
                                <img src="/images/projects/wishapp2.png" alt="" class="project-logo" width="80%" height="10%">
                                <div class="project-categories">
                                    <div class="category">Приложение</div>
                                    <div class="category">2023</div>
                                </div>
                            </div>
                            <div class="project-info">
                                <div class="project-title">Wish App</div>
                                <div class="project-description">Мобильное приложение для поиска мероприятий и организации встреч</div>
                            </div>
                        </div>
                        <!-- <div class="project">
                            <div class="project-background zaselite">
                                <img src="/images/projects/zaselite.png" alt="" class="project-logo" width="80%" height="10%">
                                <div class="project-categories">
                                    <div class="category">Приложение</div>
                                    <div class="category">2023</div>
                                </div>
                            </div>
                            <div class="project-info">
                                <div class="project-title">Zaselite</div>
                                <div class="project-description">Агрегатор объявлений аренды недвижимости</div>
                            </div>
                        </div>
                        <div class="project">
                            <div class="project-background avmnogo">
                                Avmnogo
                                <div class="project-categories">
                                    <div class="category">Приложение</div>
                                    <div class="category">2023</div>
                                </div>
                            </div>
                            <div class="project-info">
                                <div class="project-title">Avmnogo</div>
                                <div class="project-description">CRM-система для автодилеров</div>
                            </div>
                        </div> -->
                        <div class="project">
                            <div class="project-background lomaday">
                                <img src="/images/projects/lomaday.png" alt="" class="project-logo" width="85%" height="30%">
                                <div class="project-categories">
                                    <div class="category lamoday-category">Приложение</div>
                                    <div class="category lamoday-category">2023</div>
                                </div>
                            </div>
                            <div class="project-info">
                                <div class="project-title">Lomaday</div>
                                <div class="project-description">Сайт сервисного центра по ремонту техники</div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="project-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="46" viewBox="0 0 48 46" fill="none">
                            <path d="M47.9995 23H5.96464M5.96464 23L26.9418 42.9433M5.96464 23L26.9821 3.01832" stroke="#E24343" stroke-width="8"/>
                        </svg>
                    </div>

                    <div class="project-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="46" viewBox="0 0 48 46" fill="none">
                            <path d="M-0.000488281 23H42.0344M42.0344 23L21.0573 3.05666M42.0344 23L21.0169 42.9817" stroke="#E24343" stroke-width="8"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="block block-services" id="serviceBlock">
            <div class="block-head block-head__p">
                <h2 class="block-heading__other">НАШИ УСЛУГИ</h2>
                <div class="arrow-services__mobile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                        <path d="M0.144659 38.3553C0.144658 40.2883 1.71166 41.8553 3.64466 41.8553L35.1447 41.8553C37.0777 41.8553 38.6447 40.2883 38.6447 38.3553C38.6447 36.4223 37.0777 34.8553 35.1447 34.8553L7.14466 34.8553L7.14466 6.85534C7.14466 4.92234 5.57765 3.35534 3.64466 3.35534C1.71166 3.35534 0.144659 4.92234 0.144659 6.85534L0.144659 38.3553ZM36.5251 0.525126L1.16978 35.8805L6.11953 40.8302L41.4749 5.47487L36.5251 0.525126Z" fill="#E24343"/>
                    </svg>
                </div>
            </div>

            <div class="block-description__other red-block">
                <div class="arrow arrow-services">
                    <svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59" fill="none">
                        <path d="M53.4965 58.4965C56.2584 58.497 58.4979 56.2594 58.4985 53.4985L58.5077 8.50772C58.5083 5.74686 56.2697 3.50828 53.5077 3.50772C50.7457 3.50715 48.5062 5.74481 48.5057 8.50567L48.4975 48.4975L8.48929 48.4893C5.7273 48.4887 3.4878 50.7264 3.48724 53.4872C3.48667 56.2481 5.72525 58.4867 8.48724 58.4872L53.4965 58.4965ZM0.463018 7.53409L49.9605 57.0316L57.0345 49.9634L7.53698 0.465915L0.463018 7.53409Z" fill="#191919"/>
                    </svg>
                </div>
                <div class="block-description__text">
                    Наша студия предлагает комплекс услуг для достижения лучших результатов
                </div>
                <!-- <div class="arrow"></div> -->
            </div>

            <div class="block-content__other red-block">
                <div class="service service-development">
                    <div class="image-container">
                        <div class="service__image" style="background-image: url('images/development.png');"></div>
                    </div>
                    <div class="service__title">Разработка</div>
                    <div class="service__description">Вы получите быстрое и оптимизированное приложение</div>
                </div>
                <div class="service service-adaptive">
                    <div class="image-container">
                        <div class="service__image" style="background-image: url('images/adaptive.png');"></div>
                    </div>
                    <div class="service__title">Адаптивная верстка</div>
                    <div class="service__description">Вы получите адаптивный сайт под любые устройства</div>
                </div>
                <div class="service service-support">
                    <div class="image-container">
                        <div class="service__image" style="background-image: url('images/support.png');"></div>
                    </div>
                    <div class="service__title">Поддержка проектов</div>
                    <div class="service__description">Поддержка существующих и новых проектов</div>
                </div>
                <div class="service service-design">
                    <div class="image-container">
                        <div class="service__image" style="background-image: url('images/design.png');"></div>
                    </div>
                    <div class="service__title">Дизайн</div>
                    <div class="service__description">Вы получите стильный и продающий дизайн</div>
                </div>
                <div class="service service-integrator">
                    <div class="image-container">
                        <div class="service__image" style="background-image: url('images/bisness.png');"></div>
                    </div>
                    <div class="service__title">Бизнес-интегратор</div>
                    <div class="service__description">Вы получите уникальный продукт для вашего бизнеса</div>
                </div>
            </div>
        </div>

        <div class="block block-solution" id="solutionBlock">
            <div class="block-head head-rel">
                <h2 class="block-heading">РЕШЕНИЕ ДЛЯ ВАС</h2>
                <div class="arrow arrow-solution">
                    <svg xmlns="http://www.w3.org/2000/svg" width="59" height="59" viewBox="0 0 59 59" fill="none">
                        <path d="M0.497259 53.494C0.497742 56.2549 2.73709 58.4927 5.49899 58.4922L50.5068 58.4844C53.2687 58.4839 55.5073 56.2454 55.5068 53.4844C55.5063 50.7235 53.267 48.4857 50.5051 48.4862L10.4981 48.4931L10.4912 8.50001C10.4907 5.73906 8.25137 3.50126 5.48947 3.50174C2.72757 3.50222 0.488992 5.7408 0.48947 8.50174L0.497259 53.494ZM51.4588 0.461296L1.96137 49.9588L9.03489 57.0274L58.5324 7.52991L51.4588 0.461296Z" fill="#E24343"/>
                    </svg>
                </div>
                <div class="arrow-solution__mobile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                        <path d="M0.144659 38.3553C0.144658 40.2883 1.71166 41.8553 3.64466 41.8553L35.1447 41.8553C37.0777 41.8553 38.6447 40.2883 38.6447 38.3553C38.6447 36.4223 37.0777 34.8553 35.1447 34.8553L7.14466 34.8553L7.14466 6.85534C7.14466 4.92234 5.57765 3.35534 3.64466 3.35534C1.71166 3.35534 0.144659 4.92234 0.144659 6.85534L0.144659 38.3553ZM36.5251 0.525126L1.16978 35.8805L6.11953 40.8302L41.4749 5.47487L36.5251 0.525126Z" fill="#E24343"/>
                    </svg>
                </div>
            </div>

            <div class="block-description">
                <div class="left-solution">
                    <div class="block-description__solution">
                        Вы можете оставить заявку, заполнив форму или связавшись с нами через телеграм   
                    </div>
                    <a class="btn-telegram" href="https://t.me/overband_bot" target="_blank">Telegram</a>
                </div>
                <div class="form-container right-solution">
                    <form action="" class="solution-form" id="orderForm">
                        <div class="input-container">
                            <input type="text" class="form-input" placeholder="Имя" name="name">
                            <div class="after-el">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="8" viewBox="0 0 24 8" fill="none">
                                    <path d="M23.3536 4.35355C23.5488 4.15829 23.5488 3.84171 23.3536 3.64645L20.1716 0.464466C19.9763 0.269204 19.6597 0.269204 19.4645 0.464466C19.2692 0.659728 19.2692 0.976311 19.4645 1.17157L22.2929 4L19.4645 6.82843C19.2692 7.02369 19.2692 7.34027 19.4645 7.53553C19.6597 7.7308 19.9763 7.7308 20.1716 7.53553L23.3536 4.35355ZM0 4.5H23V3.5H0V4.5Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                        <div class="input-container">
                            <input type="text" class="form-input" placeholder="Телефон" name="phone">
                            <div class="after-el">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="8" viewBox="0 0 24 8" fill="none">
                                    <path d="M23.3536 4.35355C23.5488 4.15829 23.5488 3.84171 23.3536 3.64645L20.1716 0.464466C19.9763 0.269204 19.6597 0.269204 19.4645 0.464466C19.2692 0.659728 19.2692 0.976311 19.4645 1.17157L22.2929 4L19.4645 6.82843C19.2692 7.02369 19.2692 7.34027 19.4645 7.53553C19.6597 7.7308 19.9763 7.7308 20.1716 7.53553L23.3536 4.35355ZM0 4.5H23V3.5H0V4.5Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                        <div class="input-container">
                            <input type="text" class="form-input" placeholder="Почта" name="email">
                            <div class="after-el">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="8" viewBox="0 0 24 8" fill="none">
                                    <path d="M23.3536 4.35355C23.5488 4.15829 23.5488 3.84171 23.3536 3.64645L20.1716 0.464466C19.9763 0.269204 19.6597 0.269204 19.4645 0.464466C19.2692 0.659728 19.2692 0.976311 19.4645 1.17157L22.2929 4L19.4645 6.82843C19.2692 7.02369 19.2692 7.34027 19.4645 7.53553C19.6597 7.7308 19.9763 7.7308 20.1716 7.53553L23.3536 4.35355ZM0 4.5H23V3.5H0V4.5Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                        <a class="btn-telegram__mobile" href="https://t.me/overband_bot" target="_blank">Telegram</a>
                        <button class="btn-form" id="orderFormButton">ОТПРАВИТЬ</button>
                    </form>
                </div>
            </div>
        </div>

        <footer class="footer red-block">
            <div class="logo-footer footer-section">
                <span class="logo-footer_over">OVER</span><span class="logo-footer_band">BAND</span>
            </div>

            <!-- <div class="footer-section">
                <div class="footer-section_heading">Адрес</div>
                <div class="footer-section_text">г. Новосибирск</div>
                <div class="footer-section_text">overband@gmail.com</div>
            </div> -->
            <!-- <div class="footer-section">
                <div class="footer-section_heading">О нас</div>
                <div class="footer-section_text">Контакты</div>
                <div class="footer-section_text">Помощь</div>
            </div>
            <div class="footer-section">
                <div class="footer-section_heading">Гарантии</div>
                <div class="footer-section_text">Политика конфиденциальности</div>
            </div> -->

            <div class="footer-info">
                <div class="company">2023 OVERBAND</div>
                <div class="contacts">
                    <a class="contact" href="https://t.me/overband_bot" target="_blank">Телеграм</a>
                    <!-- <div class="contact">ВКонтакте</div>
                    <div class="contact">Инстаграм</div> -->
                </div>
            </div>
        </footer>

        <div class="form-modal form-success-modal" id="successModal">
            Заявка успешно отправлена! 
            Ожидайте звонка
        </div>

        <div class="form-modal form-error-modal" id="errorModal">
            Что-то пошло не так.. 
            Повторите попытку
        </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="app.js"></script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(95750818, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/95750818" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</html>