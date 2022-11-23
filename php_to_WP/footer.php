<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wptest
 */

?>

    <footer class="footer" id="footer">
        <div class="wrapper">
            <div class="footer__content">
                <div class="footer__subcontent">
                    <p class="footer__text"><?php the_field('footer__text_1'); ?></p> <!-- Политика конфиденциальности -->
                    <p class="footer__text"><?php the_field('footer__text_2'); ?></p> <!-- ООО "СК Гранит" -->
                    <p class="footer__text"><?php the_field('footer__text_3'); ?></p> <!-- ИНН 5257207221 -->
                    <p class="footer__text"><?php the_field('footer__text_4'); ?></p> <!-- Copyright 2022 г. -->
                </div>
                <div class="footer__logo">
                    <img src="<?php the_field('footer__logo'); ?>" alt="logo-white"> <!-- /assets/logo-white.svg -->
                </div>
                <div class="footer__contacts">
                    <a href="mailto:<?php the_field('mail'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/main/assets/mail.svg" alt="mail"></a>
                    <a href="https://api.whatsapp.com/send/?phone=7<?php the_field('phone'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/main/assets/whatsapp.svg"
                            alt="whatsapp"></a>
                    <a href="https://t.me/<?php the_field('telegram'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/main/assets/telegram.svg" alt="telegram"></a>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/main/main.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick-conf.js"></script>
</body>

</html>
