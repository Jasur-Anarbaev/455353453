<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Bermuda
*/

?>



<footer class="footer">
    <div class="container">
        <div class="footer__body">
            <div class="footer__title">
                <h1><?php the_field('footer_title');?></h1>
                <p>
                    <?php the_field('footer_left_desc');?>
                </p>
                <a href="<?php the_field('link-footer');?>">
                    <h2>
                        ООО "Семья"
                        ОГРН 1167746188972
                        ИНН 7743141445
                        КПП 774301001
                        Банк МОСКОВСКИЙ ФИЛИАЛ АО КБ "МОДУЛЬБАНК"
                        БИК 044525092
                        Р/с 40702810970010227731
                        К/c 30101810645250000092
                    </h2>
                     
                </a>
            </div>
            <div>
                <div class="footer__borders">
                    <img class="footer__border first"
                        src=" <?php echo get_template_directory_uri(); ?>/assets/svg/border.svg">
                    <img class="footer__border secand"
                        src="<?php echo get_template_directory_uri(); ?>/assets/svg/border.svg">
                    <img class="footer__border third"
                        src=" <?php echo get_template_directory_uri(); ?>/assets/svg/border__top.svg">
                    <img class="footer__border fourth"
                        src="<?php echo get_template_directory_uri(); ?>/assets/svg/border__top.svg">
                    <div class="footer__blocks">
                        <h1>

                            <?php the_field('footer_flagman'); ?>
                        </h1>

                        <div class="footer__menu">
                            <?php the_field('footer_flagman_texts'); ?>
                        </div>
                        <img class="footer__border fifth"
                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/border.svg">
                    </div>
                    <div class="footer__blocks">
                        <h1>Социальные сети </h1>
                        <div class="footer__sotset">
                            <div class="header__networks">
                                <a href="<?php the_field('link-youtube'); ?>">
                                    <img src="<?php echo  get_template_directory_uri() ?>/assets/svg/youtube.svg"></a>
                                <a href="<?php the_field('link-telegram'); ?>">
                                    <img src="<?php echo  get_template_directory_uri() ?>/assets/svg/telegram.svg"> </a>
                                <a href="<?php the_field('link-vk'); ?>">
                                    <img src="<?php echo  get_template_directory_uri() ?>/assets/svg/wk.svg"> </a>
                                <a href="<?php the_field('link-instagram'); ?>">
                                    <img src="<?php echo  get_template_directory_uri() ?>/assets/svg/instagram.svg">
                                </a>
                                <a href="<?php the_field('link-tiktok'); ?>">
                                    <img src="<?php echo  get_template_directory_uri() ?>/assets/svg/tiktock.svg">
                                </a>
                            </div>
                        </div>
                        <img class="footer__border sixes"
                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/border.svg">
                    </div>
                    <div class="footer__blocks">
                        <a href="tel:+8 888 888 88 88"><?php the_field('header_number');?></a>
                    </div>

                </div>
                <div class="footer__subtext">
                    <a href="<?php the_field('link-contract');?>">Договор оферты и соглашение </a>
                    <a href="<?php the_field('link-policy');?>">Политика конфиденциальности </a>
                    <a href="<?php the_field('link-agreement');?>">Согласие с офертой </a>
                    <a href="<?php the_field('link-agreement2');?>">Согласие на обработку ПД </a>
                    <a href="<?php the_field('link-agreement3');?>">Согласие на рекламную рассылку </a>
                    <a href="<?php the_field('link-cookie');?>">Политика в отношении куки</a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<script src=" https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
</body>

</html>