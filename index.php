<?php

require 'slider.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/public/app-bundle.css">
</head>
<body>    
    <header class="header">
        <nav class="navigation">
            <div class="navigation__content">
                <img class="navigation__logo" src="/public/images/logo.png">
    
                <a class="navigation__item" href="">
                    Сотрудничество
                </a>
                <a class="navigation__item" href="">
                    Отзывы
                </a>
                <a class="navigation__item" href="">
                    Контакты
                </a>
            </div>
        </nav>
    
        <div class="header__content container">
            <div class="header__name">
                АНДРЕЙ ЩЕННИКОВ
            </div>
            <h1 class="header__title">
                Master Art
            </h1>
            <div class="header__subtitle">
                дизайнер
            </div>
        </div>
    </header>
    
    <main>
        <section class="welcome-section">
            <div class="welcome-section__content">
                <p class="welcome-section__paragraph">
                    Привет :) <br>
                    Опыт в сфере дизайна более 18 лет.
                    Воплощаю в жизнь ваши самые смелые фантазии.
                    Для достижения поставленной цели
                    применяю широкий спектр инструментов:
                    от карандаша и кисти до AutoCAD и 3ds Max
                </p>
            </div>
        </section>

        <div class="title-black">
            <h2>Портфолио</h2>
        </div>

        <!--  -->

        <section class="portfolio-item-section">
            <header class="portfolio-item-section__header">
                <h3 class="portfolio-item-section__title">
                    Сувенирка
                </h3>
                <p class="portfolio-item-section__subtitle">
                    Принты на текстиль, брендированные аксессуары
                </p>
            </header>
        
            <?php

            $photos_1 = [
                '/public/images/slider-1/1.webp',
                '/public/images/slider-1/2.webp',
            ];

            echo slider($photos_1, 'slider-1');

            ?>
        </section>

        <!--  -->

        <section class="portfolio-item-section">
            <header class="portfolio-item-section__header">
                <h3 class="portfolio-item-section__title">
                    Транспорт
                </h3>
                <p class="portfolio-item-section__subtitle">
                    Выклейка на коммерческие авто
                </p>
            </header>
        
            <?php

            $photos_2 = [
                '/public/images/slider-2/1.webp',
                '/public/images/slider-2/2.webp',
            ];

            echo slider($photos_2, 'slider-2');

            ?>
        </section>

        <!--  -->

        <section class="portfolio-item-section">
            <header class="portfolio-item-section__header">
                <h3 class="portfolio-item-section__title">
                    Лого
                </h3>
                <p class="portfolio-item-section__subtitle">
                    Логотипы, бренды
                </p>
            </header>
        
            <?php

            $photos_3 = [
                '/public/images/slider-3/1.webp',
                '/public/images/slider-3/2.webp',
            ];

            echo slider($photos_3, 'slider-3');

            ?>
        </section>

        <!--  -->

        <section class="portfolio-item-section">
            <header class="portfolio-item-section__header">
                <h3 class="portfolio-item-section__title">
                    Кухня
                </h3>
                <p class="portfolio-item-section__subtitle">
                    Меню и не только
                </p>
            </header>
        
            <?php

            $photos_4 = [
                '/public/images/slider-4/1.webp',
                '/public/images/slider-4/2.jfif',
            ];

            echo slider($photos_4, 'slider-4');

            ?>
        </section>

        <!--  -->

        <section class="portfolio-item-section">
            <header class="portfolio-item-section__header">
                <h3 class="portfolio-item-section__title">
                    Этикетки
                </h3>
                <p class="portfolio-item-section__subtitle">
                    Упаковки, наклейки, постеры
                </p>
            </header>
        
            <?php

            $photos_5 = [
                '/public/images/slider-5/1.webp',
                '/public/images/slider-5/2.webp',
            ];

            echo slider($photos_5, 'slider-5');

            ?>
        </section>

        <!--  -->

        <section class="portfolio-item-section">
            <header class="portfolio-item-section__header">
                <h3 class="portfolio-item-section__title">
                    Стикерпак
                </h3>
                <p class="portfolio-item-section__subtitle">
                    Векторные стикеры, иллюстрации
                </p>
            </header>
        
            <?php

            $photos_6 = [
                '/public/images/slider-6/1.webp',
                '/public/images/slider-6/2.webp',
            ];

            echo slider($photos_6, 'slider-6');

            ?>
        </section>

        <!--  -->

        <section class="portfolio-item-section">
            <header class="portfolio-item-section__header">
                <h3 class="portfolio-item-section__title">
                    Презентации
                </h3>
            </header>
        
            <?php

            $photos_7 = [
                '/public/images/slider-7/1.webp',
                '/public/images/slider-7/2.webp',
            ];

            echo slider($photos_7, 'slider-7');

            ?>
        </section>

        <!--  -->

        <section class="portfolio-item-section">
            <header class="portfolio-item-section__header">
                <h3 class="portfolio-item-section__title">
                    Визуализация
                </h3>
                <p class="portfolio-item-section__subtitle">
                    3ds Max
                </p>
            </header>
        
            <?php

            $photos_8 = [
                '/public/images/slider-8/1.webp',
                '/public/images/slider-8/2.webp',
            ];

            echo slider($photos_8, 'slider-8');

            ?>

        </section>       
        <div class="title-black">
            <h2>Условия сотрудничества</h2>
        </div>
        
        <section class="work-section">
            <header class="work-section__header">
                <h3>Этапы проекта</h3>
            </header>

            <div class="work-section__content">
                <div class="work-section__item">
                    <span class="work-section__number">1</span>
                    <h4 class="work-section__name">
                        Обсуждение
                    </h4>
                    <p class="work-section__paragraph">
                        Обсуждение проекта посредствам различных способов 
                        коммуникации на выбор: телефон, Telegram, WhatsApp, 
                        Zoom, Skype, Teams, FaceTime.
                    </p>
                </div>

                <div class="work-section__item">
                    <span class="work-section__number">2</span>
                    <h4 class="work-section__name">
                        Оформление
                    </h4>
                    <p class="work-section__paragraph">
                        Возможно различное оформление сотрудничества в том 
                        числе заключение договора от юридического лица (ООО без НДС)
                    </p>
                </div>

                <div class="work-section__item">
                    <span class="work-section__number">3</span>
                    <h4 class="work-section__name">
                        Финал
                    </h4>
                    <p class="work-section__paragraph">
                        После согласования готового проекта 
                        и внесения финальных корректировок предоставление 
                        закрывающих документов.
                    </p>
                </div>
            </div>

        </section>

        <section class="pluses-section">
            <header class="pluses-section__header">
                <h3>Преимущества</h3>
                <span class="pluses-section__subtitle">Цена, качество, дедлайн</span>
            </header>

            <div class="pluses-section__content">
                <div class="pluses-section__item">
                    <img class="pluses-section__icon" src="/public/images/pluses-section/1.webp">
                    <h4 class="pluses-section__name">
                        Опыт работы
                    </h4>
                    <p class="pluses-section__paragraph">
                        Работаю в индустрии более 18 лет, разработал и воплотил 
                        в жизнь множество проектов различной сложности и направленности
                    </p>
                </div>

                <div class="pluses-section__item">
                    <img class="pluses-section__icon" src="/public/images/pluses-section/2.webp">
                    <h4 class="pluses-section__name">
                        Фиксированные цены
                    </h4>
                    <p class="pluses-section__paragraph">
                        Предлагаю своим клиентам фиксированные объективные цены, 
                        которые указываются в контракте до начала работы
                    </p>
                </div>

                <div class="pluses-section__item">
                    <img class="pluses-section__icon" src="/public/images/pluses-section/3.webp">
                    <h4 class="pluses-section__name">
                        Актуальность
                    </h4>
                    <p class="pluses-section__paragraph">
                        Постоянно отслеживаю тренды и обеспечиваю брендам осмысленную и 
                        актуальную айдентику, которая будет выделяться среди конкурентов
                    </p>
                </div>
            </div>

        </section>

        <section class="comments-section">
            <header class="comments-section__header">
                <h3>Отзывы клиентов</h3>
            </header>
        
            <div class="comments-slider swiper-container" id="comments-slider">
                <div class="comments-slider__wrapper swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="comment">
                            <p class="comment__paragraph">
                                Обращалась к Андрею дважды. В первый раз с очень сложной просьбой создать 
                                и визуализировать мою идею из головы «воздушной и невесомой лестницы на 
                                монокосоуре без опоры» в двухэтажной квартире. Поместить ее в интерьер в 3D. 
                                Да так, чтобы по этой картинке изготовители смогли все технологически 
                                просчитать и изготовить лестницу моей мечты. Очень довольна результатом! 
                                Все, как я хотела. Не лестница, а мечта!
                            </p>
                            <p class="comment__paragraph">
                                Во второй раз обратилась к Андрею с просьбой переделать согласно моим 
                                желаниям исходный дизайн-проект загородного дома, так как изменился 
                                материал несущих стен, расположение комнат, окон, размер и свесы крыши. 
                                Все было разработано довольно быстро, было несколько корректировок, 
                                но все время были на связи друг с другом, мои идеи были 
                                услышаны и воплощены в проект. 
                                Смело и по-честному могу рекомендовать Андрея, как человека 
                                креативного и ответственного.
                            </p>
                            <div class="comment__footer">
                                <span>Анна</span> /
                                <span>Санкт-Петербург</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="comment">
                            <p class="comment__paragraph">
                                Андрей, ты многогранный специалист, творческий и функциональный одновременно. 
                                Это очень ценно для меня. 
                                Обращалась и буду обращаться. Спасибо за твой профессионализм и понимание сути!
                            </p>
                            <div class="comment__footer">
                                <span>Ирина</span> /
                                <span>Санкт-Петербург</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="comment">
                            <p class="comment__paragraph">
                                Выражаем большую благодарность дизайнеру Андрею Щенникову 
                                за разработку нашего логотипа. 
                                Андрей отнёсся к задаче очень внимательно, вник во все нюансы, 
                                учёл все наши пожелания. Выполнил работу оперативно, 
                                предоставил оптимальный выбор вариантов. Логотип получился стильным, 
                                креативным, непохожим ни на один другой, очень запоминающимся, 
                                а также удобным для использования на различных носителях. 
                                Мы остались очень довольны результатом нашего сотрудничества.
                            </p>
                            <div class="comment__footer">
                                <span>Анна</span> /
                                <span>Санкт-Петербург</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="comment">
                            <p class="comment__paragraph">
                                Профессионал. Не стандартное мышление! Скорость работы.
                            </p>
                            <div class="comment__footer">
                                <span>DV</span> /
                                <span>Москва</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="comments-slider__footer">
                    <button class="slider-button slider-button_left"></button>
                    
                    <div class="slider__pagination"></div>
                    
                    <button class="slider-button slider-button_right"></button>
                </div>
            </div>
        </section>

        <section class="feedback-section">
            <header class="feedback-section__header">
                <h3>Обратная связь</h3>
            </header>

            <div class="feedback-section__content">
                <div class="feedback-section__info">
                    <p>
                        Я всегда открыт новым возможностям, коллаборациям и 
                        интересным проектам, пишите, готов 
                        обсудить и реализовать все ваши идеи!
                    </p>
                    <a class="feedback-section__phone" href="">
                        +7 911 777-01-51
                    </a>
                    <a class="feedback-section__email" href="">
                        schennikov.andrey@gmail.com
                    </a>
                </div>
                <form class="feedback-section__form">

                </form>
            </div>
        </section>
    </main>
    
    <footer class="footer">
        
        <img class="footer__logo" src="/public/images/logo.png" width="72" height="72">

        <a class="footer__link" href="">
            Сотрудничество
        </a>
        <a class="footer__link" href="">
            Отзывы
        </a>
    </footer>

    <script src="/public/app-bundle.js"></script>

</body>
</html>