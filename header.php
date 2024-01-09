<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./assets/css/media.css">

    <title>Document</title>
    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div>
        <div class="parent">
            <div class="container">
                <div class="parent__circles">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3">
                        <div class="circle4">
                            <div class="circle4__child">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/line__dotes.svg">
                            </div>
                        </div>
                    </div>
                    <div class="circle5">
                        <div class="circle6"></div>
                    </div>
                </div>
            </div>
            <div class="fon">
                <header class="header">
                    <div class="container">
                        <div class="header__body">
                            <div class="header__logo">
                                <a href="#">
                                    <img src="<?php the_field('header_logo'); ?>" alt="logo">
                                </a>
                            </div>
                            <div class="header__inner">
                                <nav class="header__navigation">
                                    <select>
                                        <option value="product1">Продукты</option>
                                        <option value="product1">Продукты</option>
                                        <option value="product1">Продукты</option>
                                        <option value="product1">Продукты</option>
                                        <option value="product1">Продукты</option>
                                    </select>
                                    <a href="#">Кейсы</a>
                                    <a href="#">Отзывы</a>
                                    <a href="#">Контакты</a>
                                </nav>
                                <div class="header__burger">
                                    <div class="header__networks">
                                        <a href="<?php the_field('link-youtube'); ?>">
                                            <img src="<?php echo  get_template_directory_uri() ?>/assets/svg/youtube.svg"
                                                </a>
                                            <a href="<?php the_field('link-telegram'); ?>">
                                                <img src="<?php echo  get_template_directory_uri() ?>/assets/svg/telegram.svg"
                                                    </a>
                                                <a href="<?php the_field('link-vk'); ?>">
                                                    <img src="<?php echo  get_template_directory_uri() ?>/assets/svg/wk.svg"
                                                        </a>
                                                    <a href="<?php the_field('link-instagram'); ?>">
                                                        <img src="<?php echo  get_template_directory_uri() ?>/assets/svg/instagram.svg"
                                                            alt="wk">
                                                    </a>
                                                    <a href="<?php the_field('link-tiktok'); ?>">
                                                        <img src="<?php echo  get_template_directory_uri() ?>/assets/svg/tiktock.svg"
                                                            alt="wk">
                                                    </a>
                                    </div>
                                    <div class="header__connection">
                                        <a class="header__text"
                                            href="tel:+7 926 270-84-25"><?php the_field('header_number');?></a>
                                        <button id="popapp">Обратный звонок</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>