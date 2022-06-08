<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
    <title>ABM</title>
</head>

<body>


 
  
   
    <header class="header">
        <div class="search-panel" id="search-panel">
            <div class="search-container">
                <div class="container-menu">
                    <a href=""><img src="../img/white-logo.png" alt=""></a>
                    <form class="search-input">
                        <input type="text" placeholder="Что вы ищите?">
                        <button type="submit">Искать</button>
                        <div class="close-search" align="right" onclick="closeSerachPanel()">
                            <img src="../img/close.svg" alt="">
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="header-menu-mobile" id="header-menu-mobile">
            <div class="navbar-mobile">
                <div class="logo-mobile">
                    <img src="../img/header-logo-mobile.svg" alt="">
                </div>
                <div class="close-menu-mobile" align="right" onclick="closeMobile()">
                    <img src="../img/close.svg" alt="">
                </div>
            </div>
            <div class="header-li-mobile">
                <li class="header-company-mobile">
                    <a href="" id="header-company-mobile">Компания</a>
                    <ul>
                        <li> <a href="">О компании</a></li>
                        <li> <a href="">Новости компании</a></li>
                        <li> <a href="">Галерея</a></li>
                        <li><a href="">Вакансии</a></li>
                        <li><a href="">Контакты</a></li>
                        <li><a href="">Правовая информация</a></li>
                    </ul>
                </li>

                <li class="header-production-mobile">
                    <a href="" id="header-production-mobile">Продукция</a>
                    <ul>
                        <li><a href="">Пакеры механические</a></li>
                        <li><a href="">Пакеры разбуриваемые</a></li>
                        <li><a href="">Пакеры надувные</a></li>
                        <li><a href="">Пакерные компоновки</a></li>
                        <li><a href="">Клапаны</a></li>
                        <li><a href="">Якоря</a></li>

                    </ul>
                </li>

                <li class="header-services-mobile">
                    <a href="" id="header-services-mobile">Услуги</a>
                    <ul>
                        <li><a href="">Ремонт пакеров</a></li>
                        <li><a href="">Прокат пакеров</a></li>
                        <li><a href="">Инженерное сопровождение</a></li>
                    </ul>
                </li>
                <a href="" id="header-services-mobile">Новости</a>
                <a href="" id="header-services-mobile">Галерея</a>
                <a href="" id="header-services-mobile">Вакансии</a>
                <a href="" id="header-services-mobile">Контакты </a>
                <div class="header-social">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 0C5.37281 0 0 5.37256 0 12C0 18.6274 5.37281 24 12 24C18.6272 24 24 18.6274 24 12C24 5.37256 18.6272 0 12 0ZM18.087 13.2978C18.6463 13.8441 19.2381 14.3583 19.7402 14.961C19.9626 15.2277 20.1723 15.5034 20.3319 15.8135C20.5597 16.2557 20.354 16.7406 19.9582 16.7669L17.4997 16.7664C16.8648 16.8189 16.3595 16.5628 15.9335 16.1287C15.5935 15.7828 15.278 15.4133 14.9505 15.0556C14.8167 14.9087 14.6757 14.7705 14.5078 14.6617C14.1726 14.4437 13.8815 14.5105 13.6895 14.8606C13.4938 15.2169 13.4491 15.6117 13.4304 16.0082C13.4037 16.5879 13.2288 16.7394 12.6472 16.7666C11.4044 16.8248 10.2251 16.6362 9.12908 16.0097C8.16221 15.457 7.41385 14.677 6.76174 13.7938C5.49189 12.0722 4.51937 10.1826 3.64554 8.23881C3.44888 7.80104 3.59276 7.56681 4.0757 7.55773C4.87808 7.54226 5.68045 7.54423 6.48282 7.55699C6.80937 7.56215 7.02543 7.74899 7.1509 8.05713C7.58449 9.12393 8.11605 10.1389 8.78216 11.0803C8.95967 11.3309 9.14087 11.5809 9.39892 11.7579C9.68372 11.9534 9.90077 11.8888 10.0351 11.5708C10.121 11.3688 10.1581 11.1527 10.1767 10.9361C10.2406 10.1944 10.2482 9.45293 10.1377 8.71415C10.069 8.25183 9.80894 7.95327 9.34809 7.86586C9.11337 7.82142 9.14774 7.73451 9.26191 7.60045C9.46005 7.36868 9.64567 7.22529 10.0167 7.22529L12.7943 7.2248C13.232 7.31073 13.3303 7.50715 13.3897 7.94811L13.3921 11.0348C13.387 11.2055 13.4778 11.7113 13.7842 11.823C14.0297 11.904 14.1918 11.7071 14.3386 11.5517C15.0047 10.8448 15.4793 10.0105 15.9043 9.14701C16.0919 8.7662 16.2537 8.37213 16.4108 7.97733C16.5277 7.6854 16.7094 7.54177 17.0389 7.54668L19.7136 7.54987C19.7924 7.54987 19.8725 7.55061 19.9506 7.56411C20.4014 7.64121 20.5248 7.83517 20.3854 8.27491C20.1659 8.96581 19.7394 9.54132 19.3225 10.1183C18.8757 10.736 18.3991 11.3322 17.9567 11.9526C17.5501 12.5198 17.5822 12.8053 18.087 13.2978Z"
                            fill="black" />
                    </svg>

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24 12C24 5.3736 18.6264 0 12 0C5.3736 0 0 5.3736 0 12C0 18.6264 5.3736 24 12 24C12.0705 24 12.1406 23.9985 12.2109 23.9973V14.6558H9.63281V11.6512H12.2109V9.44019C12.2109 6.87598 13.7763 5.48035 16.0637 5.48035C17.159 5.48035 18.1005 5.56201 18.375 5.59845V8.27838H16.7977C15.5533 8.27838 15.3124 8.86981 15.3124 9.73755V11.6512H18.2878L17.9 14.6558H15.3124V23.5364C20.3282 22.0984 24 17.4774 24 12Z"
                            fill="black" />
                    </svg>

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.28272 0C2.81287 0 0 2.81287 0 6.28272V17.7173C1.26327e-07 21.1871 2.81287 24 6.28272 24H17.7173C21.1871 24 24 21.1871 24 17.7173V6.28272C24 2.81287 21.1871 -1.26327e-07 17.7173 0H6.28272ZM20.4725 5.42679C20.4725 6.53715 19.5724 7.43726 18.462 7.43726C17.3517 7.43726 16.4516 6.53715 16.4516 5.42679C16.4516 4.31644 17.3517 3.41632 18.462 3.41632C19.5724 3.41632 20.4725 4.31644 20.4725 5.42679ZM16.9634 12.0628C16.9634 14.8387 14.7131 17.089 11.9372 17.089C9.16129 17.089 6.91099 14.8387 6.91099 12.0628C6.91099 9.28695 9.16129 7.03665 11.9372 7.03665C14.7131 7.03665 16.9634 9.28695 16.9634 12.0628Z"
                            fill="black" />
                    </svg>


                </div>
                <div class="header-contact-mobile">
                    <p>452600, Республика Башкортостан, <br>
                        г. Октябрьский, ул. Северная, д. 25/2</p>
                    <a href="" id="footer-telephone">+7 (347) 674-39-94</a><br>
                    <a href="">mail@abmsg.ru</a>
                </div>
            </div>

        </div>



        <div class="container-menu">
            <div class="header-a">
                <a href="/" id="a-logo">
                    <img id="logo" src="../img/logo.svg" alt="">
                </a>
       
                <div class="header-menu">
                    <div class="dropdown">
                    <a class="a-header dropdown" data-modal="modal-header-production" id="header-production" href="/about">Продукция
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_30_22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="16" height="16">
                                <rect width="16" height="16" fill="#C4C4C4" />
                            </mask>
                            <g mask="url(#mask0_30_22)">
                                <path d="M13 7L8 12L3 7" stroke="white" stroke-width="2" />
                            </g>
                        </svg></a>
                

                        <div class="dropdown-content" id="modal-header-production">
                            <div class="modal-body">
                            <a class="modal-a" href="">Пакеры механические</a>      
                            <a class="modal-a" href="">Пакеры разбуриваемые</a>     
                            <a class="modal-a" href="">Пакеры надувные</a>      
                            <a class="modal-a" href="">Пакерные компоновки</a>      
                            <a class="modal-a" href="">Клапаны</a>      
                            <a class="modal-a" href="">Якоря</a>        
                            </div>
                        </div>
                    </div>
                    
                        <div class="dropdown">
                    <a class="a-header dropdown" id="header-services" data-modal="modal-header-services" href="/about">Услуги
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_30_22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="16" height="16">
                                <rect width="16" height="16" fill="#C4C4C4" />
                            </mask>
                            <g mask="url(#mask0_30_22)">
                                <path d="M13 7L8 12L3 7" stroke="white" stroke-width="2" />
                            </g>
                        </svg></a>
                   

                        <div class="dropdown-content" id="modal-header-services">
                            <div class="modal-body">
                            <a class="modal-a" href="">Ремонт пакеров</a>
                            <a class="modal-a" href="">Прокат пакеров</a>
                            <a class="modal-a" href="">Инженерное сопровождение</a>
                            </div>
                        </div>
                    </div>
                    <a class="a-header" href="/about">О комании</a>
                    <a class="a-header" href="/news">Новости</a>
                    <a class="a-header" href="/gallery">Галерея</a>
                    <a class="a-header" href="/vacancy">Вакансии</a>
                    <a class="a-header" href="/contact">Контакты</a>
                </div>
                <a id="tel-header-mobile" align="right" href="/telephone">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_305_377" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="32" height="32">
                            <rect width="32" height="32" fill="#C4C4C4" />
                        </mask>
                        <g mask="url(#mask0_305_377)">
                            <path
                                d="M9.62435 14.5656C11.331 17.9197 14.0807 20.6693 17.4347 22.376L20.0421 19.7686C20.374 19.4367 20.8362 19.3419 21.251 19.4723C22.5784 19.9108 24.0007 20.1478 25.4821 20.1478C25.7965 20.1478 26.0979 20.2727 26.3202 20.495C26.5425 20.7172 26.6673 21.0187 26.6673 21.333V25.4812C26.6673 25.7955 26.5425 26.0969 26.3202 26.3192C26.0979 26.5415 25.7965 26.6663 25.4821 26.6663C20.1385 26.6663 15.0138 24.5436 11.2352 20.7651C7.45673 16.9866 5.33398 11.8618 5.33398 6.51819C5.33398 6.20386 5.45885 5.90241 5.68112 5.68014C5.90338 5.45788 6.20484 5.33301 6.51917 5.33301H10.6673C10.9816 5.33301 11.2831 5.45788 11.5054 5.68014C11.7276 5.90241 11.8525 6.20386 11.8525 6.51819C11.8525 7.99967 12.0895 9.4219 12.5281 10.7493C12.6584 11.1641 12.5636 11.6263 12.2318 11.9582L9.62435 14.5656Z"
                                fill="white" />
                        </g>
                    </svg>
                </a>
                <a id="tel-header" align="right" href="/telephone">+7 (34767) 4-39-94</a>
                <div class="search" align="right" onclick="serachPanel()">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_169_639" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="28" height="28">
                            <rect width="28" height="28" fill="#C4C4C4" />
                        </mask>
                        <g mask="url(#mask0_169_639)">
                            <circle cx="12.0119" cy="12.0117" r="6.875" transform="rotate(-45 12.0119 12.0117)"
                                stroke="white" stroke-width="2" />
                            <path d="M16.6523 17.271L23.1489 23.7675" stroke="white" stroke-width="2" />
                        </g>
                    </svg>
                </div>
                {{-- <a id="a-lang" href="/lang">RU<img style="margin: 5px" height="20px" src="../img/ru-flag.png" alt="">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_30_22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16"
                        height="16">
                        <rect width="16" height="16" fill="#C4C4C4" />
                    </mask>
                    <g mask="url(#mask0_30_22)">
                        <path d="M13 7L8 12L3 7" stroke="white" stroke-width="2" />
                    </g>
                </svg></a> --}}
                <div class="header-burger-flex" align="right" onclick="openMobile()">
                    <div class="header-burger">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
  

    <div id="main-page">
        <div class="container-menu">
            <div id="main-text">
                <p>АБМ СЕРВИС ГРУПП</p>
                <h1>Проектирование, производство пакерного
                    оборудования
                    и компоновок для нефтяных и газовых скважин</h1>
                <a id="main-a" href="/">
                    <div id="main-line"></div>
                    <p id="p-line">ПОДРОБНЕЕ</p>
                </a>

            </div>
            <div class="main-mouse">
                <img height="43px" src="../img/main-mouse.svg" alt="">
            </div>
            <div id="main-photo">
                <img src="../img/для главной 1 (1).png" alt="">
            </div>

        </div>

    </div>




    <div class="production">
       
        <div class="container-menu">
            <h1><b>Продукция</b></h1>
            <div class="production-menu">
                <div class="colum-33">
                    <a href="">Пакер механические</a>
                    <a href="">Пакер разбуриваемый</a>
                    <a href="">Пакер надувные</a>
                </div>
                <div class="colum-33">
                    <a href="">Пакерные компоновки</a>
                    <a href="">Клапаны</a>
                    <a href="">Якоря</a>
                </div>
                <div class="colum-33">
                    <a href="">Разъединители</a>
                    <a href="">Переводники безопасные</a>
                    <a href="">Центраторы</a>
                </div>
            </div>
            <div class="text-menu">
                <p>На сайте представлен не весь ассортимент продукции, для выбора необходимого оборудования или
                    технологии, просим Вас направить запрос по электронной почте <a href="">market@abmsg.ru</a>, либо
                    для
                    соединения со специалистом позвонить нам по телефонам указанным в контактах</p>
            </div>
        </div>
    </div>


    <div class="services">
        <div class="container-menu">
            <h1>Наши услуги</h1>
            <div class="colum-33">

                <img src="../img/service1.png" alt="">


                <h1>Ремонт</h1>
                <p>Ремонт пакерного оборудования любых производителей РФ и импортного производства.</p>
                <a href="#" class="services-a">
                    <div id="services-line"></div>
                    <p id="p-line-black">ПОДРОБНЕЕ</p>
                </a>

            </div>
            <div class="colum-33">

                <img src="../img/service2.png" alt="">

                <h1>Прокат</h1>
                <p>Прокат пакеров для УЭЦН, ППД, ГРП и технологических операций.</p>
                <a href="#" class="services-a">
                    <div id="services-line"></div>
                    <p id="p-line-black">ПОДРОБНЕЕ</p>
                </a>
            </div>
            <div class="colum-33">

                <img src="../img/service3.png" alt="">

                <h1>Сопровождение</h1>
                <p>Полное инженерное сопровождение по установке любых пакеров.</p>
                <a href="#" class="services-a">
                    <div id="services-line"></div>
                    <p id="p-line-black">ПОДРОБНЕЕ</p>
                </a>
            </div>
        </div>
    </div>


    <div class="form-question">
        <div class="container-menu">
            <div class="question-block">
                <h1>Какие у вас задачи?
                    Заполните форму,
                    и мы решим любую
                    из них.</h1>
                <form action="" method="post">
                    <div class="input-part">
                        <div class="field">
                            <label>Ваше имя</label>
                            <input type="text" placeholder="Как к вам обращаться?">
                        </div>
                        <div class="field">
                            <label>Телефон или e-mail</label>
                            <input type="text" placeholder="Введите предпочитаемы способ связи">
                        </div>
                        <div class="field">
                            <label>Ваше сообщение</label>
                            <input type="text" placeholder="Напишите свой вопрос или предложение">
                        </div>


                    </div>
                    <div class="submit-part">
                        <button type="submit">Отправить</button>
                        <p>Нажимая кнопку «Отправить»,
                            вы соглашаетесь на обработку
                            <a href="#">персональных данных</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="slider-img">
        <div class="slider-img2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../img/slider-img1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="../img/slider-img2.jpg" alt="">
                </div>
            </div>

        </div>

        <div class="container-menu">
            <div class="slider-info">
                <h1>О компании</h1>
                <div class="slider-change">
                    <div class="arrow-left-img">
                        <svg width="82" height="18" viewBox="0 0 82 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M82 9L2 8.99999M2 8.99999L11 17M2 8.99999L11 0.999994" stroke="white"
                                stroke-width="2" />
                        </svg>

                    </div>
                    <div class="slider-count">

                    </div>
                    <div class="arrow-right-img"><svg width="82" height="18" viewBox="0 0 82 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 9H80M80 9L71 1M80 9L71 17" stroke="white" stroke-width="2" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="quality">
        <div class="container-menu">
            <h1>Мы специализируемся на разработке, изготовлении
                и поставке пакерного оборудования. Предприятие располагает современными производственными мощностями,
                более
                90 станков импортного и отечественного производства. </h1>
            <div class="colum-25">
                <img src="../img/comand.png" alt="">
                <p>Команда квалифицированных специалистов с опытом работы более 20 лет.</p>
            </div>
            <div class="colum-25">
                <img src="../img/time.png" alt="">
                <p>Быстрая разработка
                    конструкции под требования Заказчика.</p>
            </div>
            <div class="colum-25">
                <img src="../img/quality.png" alt="">
                <p>Оперативность и гарантия качества выполненных работ.</p>
            </div>
            <div class="colum-25">
                <img src="../img/novely.png" alt="">
                <p>Новизна в каждом узле.</p>
            </div>
            <a href="#" class="quality-a">
                <div id="quality-line"></div>
                <p id="p-line-black">ПОДРОБНЕЕ</p>
            </a>
        </div>
    </div>


    <div class="news">
        <div class="container-menu">
            <h1>Новости</h1>
            <div class="colum-33">
                <a href="">
                    <img src="../img/new1.png" alt="">
                    <h2>Запустили новый проект «Обновим ваше оборудование».</h2>

                </a>
                <p>18 декабря 2021</p>
            </div>
            <div class="colum-33">
                <a href="">
                    <img src="../img/new2.png" alt="">
                    <h2>Технология проведения ремонтно изоляционных работ.</h2>

                </a>
                <p>6 декабря 2021</p>
            </div>
            <div class="colum-33">
                <a href="">
                    <img src="../img/new3.png" alt="">
                    <h2>Новый каталог пакерного оборудования
                        уже на сайте.</h2>

                </a>
                <p>27 ноября 2021 </p>
            </div>
            <a href="#" class="news-a">
                <div id="news-line"></div>
                <p id="p-line-black">Все статьи</p>
            </a>
        </div>
    </div>


    <div class="partners">
        <div class="container-menu">
            <h1>Партнеры</h1>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="slide swiper-slide">
                        <img src="../img/gazprom.png" alt="">
                    </div>
                    <div class="slide swiper-slide">
                        <img src="../img/lukoil.png" alt="">
                    </div>
                    <div class="slide swiper-slide">
                        <img src="../img/rosneft.png" alt="">
                    </div>
                    <div class="slide swiper-slide">
                        <img src="../img/bashneft.png" alt="">
                    </div>
                    <div class="slide swiper-slide">
                        <img src="../img/tatneft.png" alt="">
                    </div>
                    <div class="slide swiper-slide">
                        <img src="../img/neftisa.png" alt="">
                    </div>
                </div>

            </div>
            <div class="arrows">
                <div class="arrow-left" id="swiperPrev">
                    <svg width="82" height="18" viewBox="0 0 82 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M82 9L2 8.99999M2 8.99999L11 17M2 8.99999L11 0.999994" stroke="#07070B"
                            stroke-width="2" />
                    </svg>
                </div>
                <div class="arrow-right" id="swiperNext">
                    <svg width="82" height="18" viewBox="0 0 82 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 9H80M80 9L71 1M80 9L71 17" stroke="#07070B" stroke-width="2" />
                    </svg>
                </div>
            </div>
        </div>

    </div>

    <div class="form-consultation">
        <div class="container-menu">
            <div class="consultation-block">
                <h1>Требуется консультация?
                    Заполните форму,
                    и мы свяжемся
                    с вами.</h1>
                <form action="" method="post">
                    <div class="input-part">
                        <div class="field">
                            <label>Ваше имя</label>
                            <input type="text" placeholder="Как к вам обращаться?">
                        </div>
                        <div class="field">
                            <label>Телефон или e-mail</label>
                            <input type="text" placeholder="Введите предпочитаемы способ связи">
                        </div>
                        <div class="field">
                            <label>Ваше сообщение</label>
                            <input type="text" placeholder="Напишите свой вопрос или предложение">
                        </div>


                    </div>
                    <div class="submit-part">
                        <button type="submit">Отправить</button>
                        <p>Нажимая кнопку «Отправить»,
                            вы соглашаетесь на обработку
                            <a href="#">персональных данных</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-footer">
            <div class="footer-contacts">
                <p>452600, Республика Башкортостан, <br>
                    г. Октябрьский, ул. Северная, д. 25/2</p>
                <a href="" id="footer-telephone">+7 (347) 674-39-94</a>
                <a href="">mail@abmsg.ru</a>
                <a href="">Политика <br>
                    конфиденциальности</a>
                <h1>&copy 2021, ООО «АБМ Сервис Групп»</h1>
            </div>
            <div class="footer-menu">
                <li class="footer-company">
                    <a href="" id="footer-company">Компания</a>
                    <ul>
                        <li> <a href="">О компании</a></li>
                        <li> <a href="">Новости компании</a></li>
                        <li> <a href="">Галерея</a></li>
                        <li><a href="">Вакансии</a></li>
                        <li><a href="">Контакты</a></li>
                        <li><a href="">Правовая информация</a></li>
                    </ul>
                </li>

                <li class="footer-production">
                    <a href="" id="footer-production">Продукция</a>
                    <ul>
                        <li><a href="">Пакеры механические</a></li>
                        <li><a href="">Пакеры разбуриваемые</a></li>
                        <li><a href="">Пакеры надувные</a></li>
                        <li><a href="">Пакерные компоновки</a></li>
                        <li><a href="">Клапаны</a></li>
                        <li><a href="">Якоря</a></li>
                        <li><a href="">Пакерные компоновки</a></li>
                        <li><a href="">Клапаны</a></li>
                        <li><a href="">Якоря</a></li>
                    </ul>
                </li>

                <li class="footer-services">
                    <a href="" id="footer-services">Услуги</a>
                    <ul>
                        <li><a href="">Ремонт пакеров</a></li>
                        <li><a href="">Прокат пакеров</a></li>
                        <li><a href="">Инженерное сопровождение</a></li>
                    </ul>
                </li>
            </div>

            <div class="footer-social">
                <a href=""><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 0C5.37281 0 0 5.37256 0 12C0 18.6274 5.37281 24 12 24C18.6272 24 24 18.6274 24 12C24 5.37256 18.6272 0 12 0ZM18.087 13.2978C18.6463 13.8441 19.2381 14.3583 19.7402 14.961C19.9626 15.2277 20.1723 15.5034 20.3319 15.8135C20.5597 16.2557 20.354 16.7406 19.9582 16.7669L17.4997 16.7664C16.8648 16.8189 16.3595 16.5628 15.9335 16.1287C15.5935 15.7828 15.278 15.4133 14.9505 15.0556C14.8167 14.9087 14.6757 14.7705 14.5078 14.6617C14.1726 14.4437 13.8815 14.5105 13.6895 14.8606C13.4938 15.2169 13.4491 15.6117 13.4304 16.0082C13.4037 16.5879 13.2288 16.7394 12.6472 16.7666C11.4044 16.8248 10.2251 16.6362 9.12908 16.0097C8.16221 15.457 7.41385 14.677 6.76174 13.7938C5.49189 12.0722 4.51937 10.1826 3.64554 8.23881C3.44888 7.80104 3.59276 7.56681 4.0757 7.55773C4.87808 7.54226 5.68045 7.54423 6.48282 7.55699C6.80937 7.56215 7.02543 7.74899 7.1509 8.05713C7.58449 9.12393 8.11605 10.1389 8.78216 11.0803C8.95967 11.3309 9.14087 11.5809 9.39892 11.7579C9.68372 11.9534 9.90077 11.8888 10.0351 11.5708C10.121 11.3688 10.1581 11.1527 10.1767 10.9361C10.2406 10.1944 10.2482 9.45293 10.1377 8.71415C10.069 8.25183 9.80894 7.95327 9.34809 7.86586C9.11337 7.82142 9.14774 7.73451 9.26191 7.60045C9.46005 7.36868 9.64567 7.22529 10.0167 7.22529L12.7943 7.2248C13.232 7.31073 13.3303 7.50715 13.3897 7.94811L13.3921 11.0348C13.387 11.2055 13.4778 11.7113 13.7842 11.823C14.0297 11.904 14.1918 11.7071 14.3386 11.5517C15.0047 10.8448 15.4793 10.0105 15.9043 9.14701C16.0919 8.7662 16.2537 8.37213 16.4108 7.97733C16.5277 7.6854 16.7094 7.54177 17.0389 7.54668L19.7136 7.54987C19.7924 7.54987 19.8725 7.55061 19.9506 7.56411C20.4014 7.64121 20.5248 7.83517 20.3854 8.27491C20.1659 8.96581 19.7394 9.54132 19.3225 10.1183C18.8757 10.736 18.3991 11.3322 17.9567 11.9526C17.5501 12.5198 17.5822 12.8053 18.087 13.2978Z"
                        fill="white" />
                </svg></a>

               <a href=""> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24 12C24 5.3736 18.6264 0 12 0C5.3736 0 0 5.3736 0 12C0 18.6264 5.3736 24 12 24C12.0705 24 12.1406 23.9985 12.2109 23.9973V14.6558H9.63281V11.6512H12.2109V9.44019C12.2109 6.87598 13.7763 5.48035 16.0637 5.48035C17.159 5.48035 18.1005 5.56201 18.375 5.59845V8.27838H16.7977C15.5533 8.27838 15.3124 8.86981 15.3124 9.73755V11.6512H18.2878L17.9 14.6558H15.3124V23.5364C20.3282 22.0984 24 17.4774 24 12Z"
                        fill="white" />
                </svg></a>

               <a href=""><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6.28272 0C2.81287 0 0 2.81287 0 6.28272V17.7173C1.26327e-07 21.1871 2.81287 24 6.28272 24H17.7173C21.1871 24 24 21.1871 24 17.7173V6.28272C24 2.81287 21.1871 -1.26327e-07 17.7173 0H6.28272ZM20.4725 5.42679C20.4725 6.53715 19.5724 7.43726 18.462 7.43726C17.3517 7.43726 16.4516 6.53715 16.4516 5.42679C16.4516 4.31644 17.3517 3.41632 18.462 3.41632C19.5724 3.41632 20.4725 4.31644 20.4725 5.42679ZM16.9634 12.0628C16.9634 14.8387 14.7131 17.089 11.9372 17.089C9.16129 17.089 6.91099 14.8387 6.91099 12.0628C6.91099 9.28695 9.16129 7.03665 11.9372 7.03665C14.7131 7.03665 16.9634 9.28695 16.9634 12.0628Z"
                        fill="white" />
                </svg></a>

            </div>

    </footer>


</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="../js/main.js"></script>

</html>
