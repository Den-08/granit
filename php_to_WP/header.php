<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wptest
 */

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СК Гранит</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">  
    <?php if( have_rows('main_color') ): 
        while( have_rows('main_color') ): the_row(); ?>            
            <style>
                :root {
                    --main-color-1: <?php the_sub_field('main_color_1'); ?>; 
                    --main-color-2: <?php the_sub_field('main_color_2'); ?>;
                    --main-color-3: <?php the_sub_field('main_color_3'); ?>;
                    --main-color-4: <?php the_sub_field('main_color_4'); ?>;
                    --main-color-5: <?php the_sub_field('main_color_5'); ?>;
                    --main-color-6: <?php the_sub_field('main_color_6'); ?>;
                }
            </style>                
        <?php endwhile; ?>
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main/main-color.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css">
</head>

<body>
    <header class="header">
        <div class="wrapper header__wrapper">
            <div class="header__logo">
                <img src="<?php the_field('header__logo'); ?>" alt="logo">
            </div>
            <nav class="header__menu">
                <ul>
                    <li><a href="#service">услуги</a></li>
                    <li><a href="#">каталог</a></li>
                    <li><a href="#">спец.техника</a></li>
                    <li><a href="#jobs">наши работы</a></li>
                    <li><a href="#company">о компании</a></li>
                    <li><a href="#footer">контакты</a></li>
                </ul>
            </nav>
            <div class="header__phone">
                <a href="tel: +7<?php the_field('phone'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/main/assets/calling.svg" alt="calling">
                    <span>+7 (<?php echo substr(get_field('phone'), 0, 3); ?>) - <?php echo substr(get_field('phone'), 3, 3); ?> - <?php echo substr(get_field('phone'), 6, 2) ; ?> - <?php echo substr(get_field('phone'), 8, 2) ; ?></span>                    
                </a>
            </div>
        </div>
    </header>
