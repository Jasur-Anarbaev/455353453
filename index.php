<?php get_header(); ?>

<div class="popin">
    <div class="popin__close">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/close__btn.svg" alt="">
    </div>
    <div class="preFooter__phone active">
        <h1>Оставьте заявку</h1>
        <form class="preFooter__form" id="send">
            <div class="preFooter__box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/userName.svg">
                <input name="userName" type="text" placeholder="Ваше имя">
            </div>
            <div class="preFooter__box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/userPhone.svg">
                <input name="userPhone" type="number" placeholder="+7 ( 999 ) 999 – 99 – 99">
            </div>
            <div class="preFooter__box">
                <input name="userHour" type="number" placeholder="Ваш часовой пояс">
            </div>
            <div class="preFooter__box">
                <textarea name="userText" placeholder="Короткое сообщение"></textarea>
            </div>
            <button class="buy" type="submit">
                Получить
            </button>
            <div class="preFooter__check">
                <label class="checkbox style-c">
                    <input type="checkbox" checked />
                    <div class="checkbox__checkmark"></div>
                </label>
                <p>
                    Я даю свое согласие на обработку
                    персональных данных и соглашаюсь
                    с политикой конфиденциальности
                    <span></span>
                </p>
            </div>
        </form>
    </div>
</div>
<div class="title">
    <div class="container">
        <div class="tit__humen">
            <div class="title__man">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/man.webp" alt="man">
            </div>
        </div>
    </div>
    <div class="title--revius">
        <div class="container">
            <div class="title__body">
                <div class="title__left">
                    <div class="title__infos">
                        <h1><?php the_field('main_name'); ?></h1>
                        <p><?php the_field('lider_marketing'); ?></p>
                    </div>
                </div>
                <div class="title__top">
                    <h1 class="text"><?php the_field('main_title'); ?>
                        <span><?php the_field('main_subtitle'); ?></span>
                    </h1>
                    <div class="title__top--subtext">
                        <p><?php the_field('main_subtitle_inside'); ?></p>
                        <button>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/strange__arrow.svg"
                                alt="arrow">
                        </button>
                    </div>
                </div>
                <div class="title__bottom">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/card__bubonchik.webp"
                        alt="bubonchick">
                    <div class="title__card">
                        <h1>10 кейсов</h1>
                        <h2><span>предпринимателей</span> после обучения у В. Бермуды</h2>
                    </div>
                    <img class="title__bottom--img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/card__gift.png" alt="gift">
                    <button class="buy active">
                        Получить
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/upload.svg" alt="">
                    </button>
                </div>
            </div>
        </div>
        <div class="title__liner"></div>
    </div>
    <div class="mountain">
        <div class="">
            <div class="mountain__grafon">
                <img class="mountain__cloud"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/cloudes__mountain.webp">
                <img class="mountain__bottom"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom__moutain.webp">
                <img class="mountain__rightLeft"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/sides__mountain.webp">
                <img class="gold__mountain"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/gold__mountain.webp">
                <div class="mountain__fon"></div>
                <div class="mountain__circle1"></div>
                <div class="mountain__circle2"></div>
                <div class="mountain__circle3">
                    <div class="mn__circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/dotes.svg">
                    </div>
                </div>
                <div class="mountain__circle4"></div>
            </div>
            <div class="mountain__parent">
                <div class="container">
                    <div class="mountain__texts">
                        <h1><?php the_field('hard_facts'); ?></h1>
                        <?php the_field('fact_texts'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<main class="main">
    <div class="infos">
        <div class="info__circel">
            <img class="info__fon" src="<?php echo get_template_directory_uri(); ?>/assets/img/fon.webp">
        </div>
        <img class="inf__back" src="<?php echo get_template_directory_uri(); ?>/assets/img/blure__fon.webp">
        <div class="container">
            <div class="nature">
                <div class="nature__card">
                    <div class="nature__title">
                        <h1>01</h1>
                    </div>
                    <div class="nature__body">
                        <h1>
                            <?php the_field('performances_content'); ?>
                        </h1>
                        <!-- <h2><?php the_field('legendary_desc'); ?></h2> -->
                        <button>
                            <a href="#">Подробнее</a>
                        </button>
                    </div>
                    <div class="right__gradiend"></div>
                </div>
                <div class="nature__card active">
                    <div class="nature__title">
                        <h1>02</h1>
                    </div>
                    <div class="nature__body">

                        <h1>
                            <span>
                                <?php the_field('legendary_content'); ?>
                            </span>
                        </h1>
                        <!-- <h2><?php the_field('performances_des'); ?>
</h2> -->
                        <button>
                            <a href="#">Подробнее</a>
                        </button>
                    </div>
                    <div class="right__gradiend"></div>
                </div>
                <div class="nature__card">
                    <div class="nature__title">
                        <h1>03</h1>
                    </div>
                    <div class="nature__body">
                        <h1>
                            <?php the_field('trainings_content'); ?>
                        </h1>
                        <!-- <h2>
<?php the_field('trainings_des'); ?>

</h2> -->
                        <button>
                            <a href="#">Подробнее</a>
                        </button>
                    </div>
                    <div class="right__gradiend"></div>
                </div>
                <div class="nature__card">
                    <div class="nature__title">
                        <h1>04</h1>
                    </div>
                    <div class="nature__body">
                        <h1>
                            <?php the_field('strategic_content'); ?>

                        </h1>
                        <!-- <h2>
<?php the_field('strategic_des'); ?>

</h2> -->
                        <button>
                            <a href="#">Подробнее</a>
                        </button>
                    </div>
                    <div class="right__gradiend active"></div>
                </div>
                <div class="nature__card active">
                    <div class="nature__title">
                        <h1>05</h1>
                    </div>
                    <div class="nature__body">
                        <h1>
                            <?php the_field('franchise_content'); ?>

                        </h1>
                        <!-- <h2>
<?php the_field('franchise_des'); ?>

</h2> -->
                        <button>
                            <a href="#">Подробнее</a>
                        </button>
                    </div>
                    <div class="right__gradiend active"></div>
                </div>
                <div class="nature__card">
                    <div class="nature__title">
                        <h1>06</h1>
                    </div>
                    <div class="nature__body last">
                        <a href="https://vladislavbermuda.ru/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/hover__arrow.svg">
                        </a>
                        <h1>
                            <?php the_field('all_products'); ?>

                        </h1>
                        <div class="nature__shadow bottom"></div>
                        <div class="nature__shadow right"></div>
                        <div class="nature__shadow top"></div>
                    </div>
                    <div class="right__gradiend active"></div>
                </div>
                <div class="nature__man">
                    <div class="nature__pre">
                        <div class="nature__star">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <h1>
                            <?php the_field('flagship_products'); ?>

                        </h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man__future.webp">
                    </div>
                </div>
            </div>
            <div class="nature__line">
                <div class="nature__length">
                    <span></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/yellow__dotes.svg">
                </div>
                <div class="nature__length">
                    <span></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/yellow__dotes.svg">
                </div>
            </div>
        </div>
        <div class="planet">
            <div class="container">
                <div class="planet__body">
                    <div class="planet__title">
                        <h1 class="text">
                            <?php the_field('base_main_title'); ?>
                            <span>
                                <?php the_field('base_main_subtitle'); ?>

                            </span>
                        </h1>
                        <?php the_field('base_main_content'); ?>

                        <button class="buy">Подробнее</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="investers">
        <div class="container">
            <div class="investers__body">
                <div class="investers__title">
                    <div class="investers__subtitle">
                        <h1><span><?php the_field('investers__title'); ?></span>
                            <?php the_field('investers__span'); ?>
                        </h1>
                        <p>
                            <?php the_field('investers__subtitle'); ?>
                        </p>
                    </div>
                    <div class="investers__btns">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="invester__case">
                        <button class="buy active case">Все кейсы</button>
                    </div>
                </div>
                <div class="invester__parent">
                    <div class="swiper mySwiper investerSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div>
                                    <div class="slider__card">
                                        <img src="<?php the_field('slider__card_img'); ?>">
                                        <div class="slider__body">
                                            <div class="slider__gradient"></div>
                                            <div class="swiper__numeratic"></div>
                                            <span class="slider__line--first"></span>
                                            <span class="slider__line--last"></span>
                                            <img class="slider__hover"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__book.svg">
                                            <div class="slider__info">
                                                <p>
                                                    <?php the_field('slider__info'); ?>
                                                </p>
                                                <div class="slider__name">
                                                    <h1>
                                                        <?php the_field('slider__name'); ?>
                                                    </h1>
                                                    <p>
                                                        <?php the_field('slider_des'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider__bottom">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/slider__bottom.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="slider__card">
                                        <img src="<?php the_field('slider__card_img2'); ?>">

                                        <div class="slider__body">
                                            <div class="slider__gradient"></div>
                                            <div class="swiper__numeratic"></div>
                                            <span class="slider__line--first"></span>
                                            <span class="slider__line--last"></span>
                                            <img class="slider__hover"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__book.svg">
                                            <div class="slider__info">
                                                <p><?php the_field('slider__info2'); ?></p>
                                                <div class="slider__name">
                                                    <h1><?php the_field('slider__name2'); ?></h1>
                                                    <p><?php the_field('slider__des2'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider__bottom">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/slider__bottom.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="slider__card">
                                        <img src="<?php the_field('slider__card_img3'); ?>">

                                        <div class="slider__body">
                                            <div class="slider__gradient"></div>
                                            <div class="swiper__numeratic"></div>
                                            <span class="slider__line--first"></span>
                                            <span class="slider__line--last"></span>
                                            <img class="slider__hover"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__book.svg">
                                            <div class="slider__info">
                                                <p><?php the_field('slider__info3'); ?></p>
                                                <div class="slider__name">
                                                    <h1><?php the_field('slider__name3'); ?></h1>
                                                    <p><?php the_field('slider_des3'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider__bottom">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/slider__bottom.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="slider__card">
                                        <img src="<?php the_field('slider__card_img4'); ?>">

                                        <div class="slider__body">
                                            <div class="slider__gradient"></div>
                                            <div class="swiper__numeratic"></div>
                                            <span class="slider__line--first"></span>
                                            <span class="slider__line--last"></span>
                                            <img class="slider__hover"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__book.svg">
                                            <div class="slider__info">
                                                <p><?php the_field('slider__info4'); ?></p>
                                                <div class="slider__name">
                                                    <h1><?php the_field('slider__name4'); ?></h1>
                                                    <p><?php the_field('slider_des4'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider__bottom">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/slider__bottom.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="slider__card">
                                        <img src="<?php the_field('slider__card_img5'); ?>">

                                        <div class="slider__body">
                                            <div class="slider__gradient"></div>
                                            <div class="swiper__numeratic"></div>
                                            <span class="slider__line--first"></span>
                                            <span class="slider__line--last"></span>
                                            <img class="slider__hover"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__book.svg">
                                            <div class="slider__info">
                                                <p><?php the_field('slider__info6'); ?></p>
                                                <div class="slider__name">
                                                    <h1><?php the_field('slider__name5'); ?></h1>
                                                    <p><?php the_field('slider_des5'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider__bottom">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/slider__bottom.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="slider__card">
                                        <img src="<?php the_field('slider__card_img6'); ?>">

                                        <div class="slider__body">
                                            <div class="slider__gradient"></div>
                                            <div class="swiper__numeratic"></div>
                                            <span class="slider__line--first"></span>
                                            <span class="slider__line--last"></span>
                                            <img class="slider__hover"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__book.svg">
                                            <div class="slider__info">
                                                <p><?php the_field('slider__info6'); ?></p>
                                                <div class="slider__name">
                                                    <h1><?php the_field('slider__name6'); ?></h1>
                                                    <p><?php the_field('slider_des6'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider__bottom">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/slider__bottom.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="slider__card">
                                        <img src="<?php the_field('slider__card_img7'); ?>">

                                        <div class="slider__body">
                                            <div class="slider__gradient"></div>
                                            <div class="swiper__numeratic"></div>
                                            <span class="slider__line--first"></span>
                                            <span class="slider__line--last"></span>
                                            <img class="slider__hover"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__book.svg">
                                            <div class="slider__info">
                                                <p><?php the_field('slider__info7'); ?></p>
                                                <div class="slider__name">
                                                    <h1><?php the_field('slider__name7'); ?></h1>
                                                    <p><?php the_field('slider_des7'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider__bottom">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/slider__bottom.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="slider__card">
                                        <img src="<?php the_field('slider__card_img8'); ?>">

                                        <div class="slider__body">
                                            <div class="slider__gradient"></div>
                                            <div class="swiper__numeratic"></div>
                                            <span class="slider__line--first"></span>
                                            <span class="slider__line--last"></span>
                                            <img class="slider__hover"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__book.svg">
                                            <div class="slider__info">
                                                <p><?php the_field('slider__info8'); ?></p>
                                                <div class="slider__name">
                                                    <h1><?php the_field('slider__name8'); ?></h1>
                                                    <p><?php the_field('slider_des8'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider__bottom">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/slider__bottom.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="slider__card">
                                        <img src="<?php the_field('slider__card_img9'); ?>">

                                        <div class="slider__body">
                                            <div class="slider__gradient"></div>
                                            <div class="swiper__numeratic"></div>
                                            <span class="slider__line--first"></span>
                                            <span class="slider__line--last"></span>
                                            <img class="slider__hover"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__book.svg">
                                            <div class="slider__info">
                                                <p><?php the_field('slider__info9'); ?></p>
                                                <div class="slider__name">
                                                    <h1><?php the_field('slider__name9'); ?></h1>
                                                    <p><?php the_field('slider_des9'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider__bottom">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/slider__bottom.svg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="expert">
        <div class="expert__title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/expert.webp">
            <img class="expert__book" src="<?php echo get_template_directory_uri(); ?>/assets/img/book__open.webp">
        </div>
        <div class="container">
            <div class="expert__body">
                <div class="expert__main">
                    <div class="expert__cards">
                        <div class="expert__card">
                            <div class="expert__card--body">
                                <?php the_field('expert_li'); ?>
                                <button class="experts__loading">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/svg/loading__yellow.svg">
                                </button>
                            </div>
                        </div>
                        <div class="expert__card">
                            <div class="expert__card--body active">
                                <?php the_field('expert_li2'); ?>
                                <button class="experts__loading">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/svg/loading__yellow.svg">
                                </button>
                            </div>
                        </div>
                        <div class="expert__card">
                            <div class="expert__card--body">
                                <?php the_field('expert_li3'); ?>

                                <button class="experts__loading">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/svg/loading__yellow.svg">
                                </button>
                            </div>
                        </div>
                        <div class="expert__card">
                            <div class="expert__card--body active">
                                <?php the_field('expert_li4'); ?>

                                <button class="experts__loading">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/svg/loading__yellow.svg">
                                </button>
                            </div>
                        </div>
                        <div class="expert__card">
                            <div class="expert__card--body active">
                                <?php the_field('expert_li5'); ?>

                                <button class="experts__loading">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/svg/loading__yellow.svg">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="expert__subtitle">
                    <h1><span> <?php the_field('expert_li_title'); ?></span> <?php the_field('expert_li_subtitle'); ?>
                    </h1>



                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/slesh.svg">
                </div>
            </div>
        </div>
    </div>
    <div class="video">
        <div class="container">
            <div class="video__body">
                <div class="video__title">
                    <div class="video__sub">


                        <h1 class="text">Отзывы <span><?php the_field('reviews_text'); ?></span></h1>
                        <div class="video__btns">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div>
                        <div class="swiper mySwiper videoSlide">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <iframe width="560" height="315" src="<?php the_field('youtube-link'); ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>

                                </div>
                                <div class="swiper-slide">
                                    <iframe width="560" height="315" src="<?php the_field('youtube-link2'); ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="swiper-slide">
                                    <iframe width="560" height="315" src="<?php the_field('youtube-link3'); ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="swiper-slide">
                                    <iframe width="560" height="315" src="<?php the_field('youtube-link4'); ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="swiper-slide">
                                    <iframe width="560" height="315" src="<?php the_field('youtube-link5'); ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="swiper-slide">
                                    <iframe width="560" height="315" src="<?php the_field('youtube-link6'); ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="swiper-slide">
                                    <iframe width="560" height="315" src="<?php the_field('youtube-link7'); ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="swiper-slide">
                                    <iframe width="560" height="315" src="<?php the_field('youtube-link8'); ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="swiper-slide">
                                    <iframe width="560" height="315" src="<?php the_field('youtube-link9'); ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="swiper-slide">
                                    <iframe width="560" height="315" src="<?php the_field('youtube-link10'); ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="swiper-slide">
                                    <iframe width="560" height="315" src="<?php the_field('youtube-link11'); ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="swiper-slide">
                                    <iframe width="560" height="315" src="<?php the_field('youtube-link12'); ?>"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="messages">
        <div class="container">
            <div class="messages__body">
                <div class="books__title">
                    <div class="message__subtitle">
                        <div class="message__btns">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div>
                        <div class="swiper mySwiper messageSlide">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="messages__dep">
                                        <img src="<?php the_field('comment_img1'); ?>">
                                        <img src="<?php the_field('profile_1'); ?>">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="messages__dep">
                                        <img src="<?php the_field('comment_img2'); ?>">
                                        <img src="<?php the_field('profile_2'); ?>">

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="messages__dep">
                                        <img src="<?php the_field('comment_img3'); ?>">
                                        <img src="<?php the_field('profile_3'); ?>">

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="messages__dep">
                                        <img src="<?php the_field('comment_img4'); ?>">
                                        <img src="<?php the_field('profile_4'); ?>">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="messages__dep">
                                        <img src="<?php the_field('comment_img5'); ?>">
                                        <img src="<?php the_field('profile_5'); ?>">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="messages__dep">
                                        <img src="<?php the_field('comment_img6'); ?>">
                                        <img src="<?php the_field('profile_6'); ?>">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="messages__dep">
                                        <img src="<?php the_field('comment_img7'); ?>">
                                        <img src="<?php the_field('profile_7'); ?>">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="messages__dep">
                                        <img src="<?php the_field('comment_img8'); ?>">
                                        <img src="<?php the_field('profile_8'); ?>">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="messages__dep">
                                        <img src="<?php the_field('comment_img9'); ?>">
                                        <img src="<?php the_field('profile_9'); ?>">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="messages__dep">
                                        <img src="<?php the_field('comment_img10'); ?>">
                                        <img src="<?php the_field('profile_10'); ?>">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="messages__dep">
                                        <img src="<?php the_field('comment_img11'); ?>">
                                        <img src="<?php the_field('profile_11'); ?>">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="messages__dep">
                                        <img src="<?php the_field('comment_img12'); ?>">
                                        <img src="<?php the_field('profile_12'); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="company">
        <div class="container">
            <div class="company__body">


                <h1 class="text"><?php the_field('client_title'); ?></h1>
                <?php the_field('client_icons'); ?>

            </div>
        </div>
    </div>
    <div class="books">
        <div class="container">
            <div class="books__body">
                <div class="books__title">
                    <div class="books__sub">
                        <h1 class="text">Книги <span>для предпринимателей, экспертов и маркетологов</span>
                        </h1>
                        <div class="books__btns">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div>
                        <div class="swiper mySwiper bookSlider">
                            <div class="swiper-wrapper">
                                <!-- <div class="swiper-slide">
<div class="book__card">
<?php the_field('book_box'); ?>
</div>
</div> -->
                                <div class="swiper-slide">
                                    <div class="book__card">
                                        <div class="book__fon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/card1.png">
                                        </div>
                                        <div class="book__details">
                                            <h1>25 креативных идей на миллион</h1>
                                            <a
                                                href="https://www.litres.ru/audiobook/aleksandr-lavrov-164/sbornik-luchshih-keysov-rosta-pribyli-bez-zatrat-na-r-69669994/">
                                                <button class="buy activate">Получить бесплатно <img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/svg/upload.svg"
                                                        alt=""></button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="book__card">
                                        <?php the_field('book_box2'); ?>


                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="book__card">
                                        <?php the_field('book_box3'); ?>


                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="book__card">
                                        <?php the_field('book_box4'); ?>


                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="book__card">
                                        <?php the_field('book_box5'); ?>


                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="book__card">
                                        <?php the_field('book_box6'); ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="smi">
        <div class="container">
            <div class="smi__realetive">
                <div class="smi__body">
                    <div class="smi__title">
                        <h1 class="text"> <?php the_field('public_text'); ?></h1>
                        <div class="smi__btns">
                            <div class="swiper-button-next active"></div>
                            <div class="swiper-button-prev active"></div>
                            <div class="swiper-pagination active"></div>
                        </div>
                    </div>
                    <div class="smi__absolute">
                        <div class="swiper mySwiper smmSlider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href=" <?php the_field('smi_img1'); ?>" data-fancybox="gallery">
                                        <img src="<?php the_field('smi_img1'); ?>" />
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href=" <?php the_field('smi_img2'); ?>" data-fancybox="gallery">
                                        <img src="<?php the_field('smi_img2'); ?>" />
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href=" <?php the_field('smi_img3'); ?>" data-fancybox="gallery">
                                        <img src="<?php the_field('smi_img3'); ?>" />
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href=" <?php the_field('smi_img4'); ?>" data-fancybox="gallery">
                                        <img src="<?php the_field('smi_img4'); ?>" />
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href=" <?php the_field('smi_img5'); ?>" data-fancybox="gallery">
                                        <img src="<?php the_field('smi_img5'); ?>" />
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="preFooter">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/man__preFooter.webp">
            <div class="preFooter__body">
                <div class="preFooter__title">
                    <h1 class="text"><?php the_field('section_title'); ?></h1>
                    <h1 class="text"><span><?php the_field('section_subtitle'); ?></span></h1>
                </div>
                <div class="preFooter__phone">
                    <h1>Оставьте заявку</h1>
                    <form class="preFooter__form" id="send">
                        <div class="preFooter__box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/userName.svg">
                            <input name="userName" type="text" placeholder="Ваше имя">
                        </div>
                        <div class="preFooter__box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/userPhone.svg">
                            <input name="userPhone" type="number" placeholder="+7 ( 999 ) 999 – 99 – 99">
                        </div>
                        <div class="preFooter__box">
                            <input name="userHour" type="number" placeholder="Ваш часовой пояс">
                        </div>
                        <div class="preFooter__box">
                            <textarea name="userText" placeholder="Короткое сообщение"></textarea>
                        </div>
                        <button class="buy" type="submit">
                            Получить
                        </button>
                        <div class="preFooter__check">
                            <label class="checkbox style-c">
                                <input type="checkbox" checked />
                                <div class="checkbox__checkmark"></div>
                            </label>
                            <p>
                                Я даю свое согласие на обработку
                                персональных данных и соглашаюсь
                                с политикой конфиденциальности
                                <span></span>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>


<?php get_footer(); ?>