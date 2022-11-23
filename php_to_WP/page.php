<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wptest
 */

get_header();
?>

    <section class="start">
        <div class="start__over">
        </div>
        <div class="wrapper start__wrapper">
            <div class="start__content">
                <div class="start__subcontent">
                    <h1 class="start__title"><?php the_field('start__title'); ?></h1>
                    <h2 class="start__subtitle"><?php the_field('start__subtitle'); ?></p>
                </div>
                <div class="start__subcontent">
                    <h5 class="start__economy"><?php the_field('start__economy'); ?></h5>
                    <p class="start__text start__materials"><?php the_field('start__materials'); ?></p>
                    <p class="start__text"><?php the_field('start__text'); ?></p>
                </div>
            </div>
            <div class="start__picture">
                <div class="start__image">
                    <img src="<?php the_field('start__img'); ?>" alt="start-img" class="start__img">
                </div>
                <a class="start__link" href="#price">
                    <img class="start__component" src="<?php echo get_template_directory_uri(); ?>/main/assets/start-component.png" alt="start-component">
                </a>
            </div>
        </div>
    </section>

    <section class="section company" id="company">
        <div class="wrapper">
            <div class="section__page">
                <div class="section__logo">О</div>
                <div class="section__block">
                    <div class="section__title"></div>
                    <hr>
                    <div class="section__title">О компании</div>
                </div>
            </div>
            <div class="company__content">
                <div class="company__subcontent">
                    <div class="title company__title"><?php the_field('company__title'); ?></div>
                    <p class="company__text"><?php the_field('company__text'); ?></p>
                </div>
                <img class="company__img" src="<?php the_field('company__img'); ?>" alt="company">
            </div>
        </div>
    </section>

    <section class="section cert">
        <div class="wrapper">
            <div class="section__page">
                <div class="section__logo">С</div>
                <div class="section__block">
                    <div class="section__title"></div>
                    <hr>
                    <div class="section__title">Сертификаты</div>
                </div>
            </div>

            <div class="cert__content cert__slider">                
                <div class="cert__slide">
                    <?php $cert__card = 'cert__card_1';
                        if( have_rows($cert__card) ): 
                        while( have_rows($cert__card) ): the_row(); 
                        $cert__img = get_sub_field('cert__img');
                        ?>
                        <div class="cert__slide">
                            <div class="cert__card">
                                <img class="cert__img" src="<?php echo $cert__img; ?>" alt="certificate">
                                <div class="cert__name">
                                    <?php the_sub_field('cert__name'); ?>
                                </div>
                                <div class="cert__desc">
                                    <?php the_sub_field('cert__desc'); ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>    
                <div class="cert__slide">
                    <?php $cert__card = 'cert__card_2';
                        if( have_rows($cert__card) ): 
                        while( have_rows($cert__card) ): the_row(); 
                        $cert__img = get_sub_field('cert__img');
                        ?>
                        <div class="cert__slide">
                            <div class="cert__card">
                                <img class="cert__img" src="<?php echo $cert__img; ?>" alt="certificate">
                                <div class="cert__name">
                                    <?php the_sub_field('cert__name'); ?>
                                </div>
                                <div class="cert__desc">
                                    <?php the_sub_field('cert__desc'); ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="cert__slide">
                    <?php $cert__card = 'cert__card_3';
                        if( have_rows($cert__card) ): 
                        while( have_rows($cert__card) ): the_row(); 
                        $cert__img = get_sub_field('cert__img');
                        ?>
                        <div class="cert__slide">
                            <div class="cert__card">
                                <img class="cert__img" src="<?php echo $cert__img; ?>" alt="certificate">
                                <div class="cert__name">
                                    <?php the_sub_field('cert__name'); ?>
                                </div>
                                <div class="cert__desc">
                                    <?php the_sub_field('cert__desc'); ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="cert__slide">
                    <?php $cert__card = 'cert__card_4';
                        if( have_rows($cert__card) ): 
                        while( have_rows($cert__card) ): the_row(); 
                        $cert__img = get_sub_field('cert__img');
                        ?>
                        <div class="cert__slide">
                            <div class="cert__card">
                                <img class="cert__img" src="<?php echo $cert__img; ?>" alt="certificate">
                                <div class="cert__name">
                                    <?php the_sub_field('cert__name'); ?>
                                </div>
                                <div class="cert__desc">
                                    <?php the_sub_field('cert__desc'); ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="cert__slide">
                    <?php $cert__card = 'cert__card_5';
                        if( have_rows($cert__card) ): 
                        while( have_rows($cert__card) ): the_row(); 
                        $cert__img = get_sub_field('cert__img');
                        ?>
                        <div class="cert__slide">
                            <div class="cert__card">
                                <img class="cert__img" src="<?php echo $cert__img; ?>" alt="certificate">
                                <div class="cert__name">
                                    <?php the_sub_field('cert__name'); ?>
                                </div>
                                <div class="cert__desc">
                                    <?php the_sub_field('cert__desc'); ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="cert__controls controls">                
                <div class="cert__arrows controls__arrows">
                    <a class="cert__left controls__left">
                        <img class="controls__img_left" src="<?php echo get_template_directory_uri(); ?>/main/assets/arrow-lg.svg" alt="arrow-lg">
                    </a>
                    <a class="cert__right controls__right">
                        <img class="controls__img_right" src="<?php echo get_template_directory_uri(); ?>/main/assets/arrow-ry.svg" alt="arrow-ry">
                    </a>
                </div>
            </div>
        </div>        
    </section>

    <section class="section service" id="service">
        <div class="wrapper">
            <div class="section__page">
                <div class="section__logo">У</div>
                <div class="section__block">
                    <div class="section__title"></div>
                    <hr>
                    <div class="section__title">Услуги</div>
                </div>
            </div>
            <div class="service__block">
                <div class="service__box">
                    <!-- извлечение шпунта ларсена -->
                    <?php $service__box = 'service__box_1';
                        if( have_rows($service__box) ): 
                        while( have_rows($service__box) ): the_row();
                        ?>
                            <div class="service__boxhead">
                                <div class="service__subtitle active"><?php the_sub_field('service__title'); ?></div>
                                <div class="service__boxarrow active_arrow">&#129130;</div>
                            </div>
                            <div class="service__page">
                                <div class="service__content">
                                    <img class="service__img" src="<?php the_sub_field('service__img'); ?>" alt="service">
                                    <div class="service__subcontent">
                                        <div class="service__title title"><?php the_sub_field('service__title'); ?></div>
                                        <p class="service__text"><?php the_sub_field('service__text'); ?></p>
                                    </div>
                                    <a href="#" class="service__button">
                                        <span>узнать цену</span><img src="<?php echo get_template_directory_uri(); ?>/main/assets/arrow-r.svg" alt="arrow-r">
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <div class="service__box">
                    <!-- проектирование шпунтового ограждения -->
                    <?php $service__box = 'service__box_2';
                        if( have_rows($service__box) ): 
                        while( have_rows($service__box) ): the_row();
                        ?>
                            <div class="service__boxhead">
                                <div class="service__subtitle"><?php the_sub_field('service__title'); ?></div>
                                <div class="service__boxarrow">&#129130;</div>
                            </div>
                            <div class="service__page hidden">
                                <div class="service__content">
                                    <img class="service__img" src="<?php the_sub_field('service__img'); ?>" alt="service">
                                    <div class="service__subcontent">
                                        <div class="service__title title"><?php the_sub_field('service__title'); ?></div>
                                        <p class="service__text"><?php the_sub_field('service__text'); ?></p>
                                    </div>
                                    <a href="#" class="service__button">
                                        <span>узнать цену</span><img src="<?php echo get_template_directory_uri(); ?>/main/assets/arrow-r.svg" alt="arrow-r">
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="service__box">
                    <!-- погружение шпунта ларсена -->
                    <?php $service__box = 'service__box_3';
                        if( have_rows($service__box) ): 
                        while( have_rows($service__box) ): the_row();
                        ?>
                            <div class="service__boxhead">
                                <div class="service__subtitle"><?php the_sub_field('service__title'); ?></div>
                                <div class="service__boxarrow">&#129130;</div>
                            </div>
                            <div class="service__page hidden">
                                <div class="service__content">
                                    <img class="service__img" src="<?php the_sub_field('service__img'); ?>" alt="service">
                                    <div class="service__subcontent">
                                        <div class="service__title title"><?php the_sub_field('service__title'); ?></div>
                                        <p class="service__text"><?php the_sub_field('service__text'); ?></p>
                                    </div>
                                    <a href="#" class="service__button">
                                        <span>узнать цену</span><img src="<?php echo get_template_directory_uri(); ?>/main/assets/arrow-r.svg" alt="arrow-r">
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>   
        </div>
    </section>

    <section class="section price" id="price">
        <div class="wrapper">
            <div class="section__page">
                <div class="section__logo">Р</div>
                <div class="section__block">
                    <div class="section__title"></div>
                    <hr>
                    <div class="section__title">Расчет стоимости</div>
                </div>
            </div>
            <div class="price__content">
                <div class="price__subcontent">
                    <div class="price__title title"><span><?php the_field('price__title'); ?></span>
                    </div>
                    <p class="price__text"><?php the_field('price__text_1'); ?></p>
                    <p class="price__text price__text_bold"><?php the_field('price__text_2'); ?></p>
                    <p class="price__text"><?php the_field('price__text_3'); ?></p>
                    <img class="price__img" src="<?php the_field('price__img'); ?>" alt="price">
                </div>
                <div class="price__form">
                    <form class="form" action="#">
                        <p class="form__title">Заполните форму</p>
                        <input class="form__input" type="text" placeholder="Марка">
                        <input class="form__input" type="text" placeholder="Кол-во">
                        <input class="form__input" type="text" placeholder="Имя">
                        <input class="form__input" type="text" placeholder="Номер телефона">
                        <input class="form__input" type="text" placeholder="Комментарии">
                        <div class="form__input form__checkbox">
                            <input class="form__checkbox_input" type="checkbox" name="" id="">
                            <p>Я согласен(а) на обработку персональных данных</p>
                        </div>
                        <a href="#" class="form__input form__button" type="submit">
                            <span>Отправить заявку</span><img src="<?php echo get_template_directory_uri(); ?>/main/assets/upload.svg" alt="upload">
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="section jobs" id="jobs">
        <div class="wrapper">
            <div class="section__page">
                <div class="section__logo">Н</div>
                <div class="section__block">
                    <div class="section__title"></div>
                    <hr>
                    <div class="section__title">Наши работы</div>
                </div>
            </div>
            <div class="jobs__content">
                <div class="jobs__subcontent">
                    <div class="jobs__title title"><?php the_field('jobs__title'); ?></div> <!-- объекты сданные нами -->
                    <div class="jobs__box">
                        <div class="jobs__boxhead">
                            <div class="jobs__subtitle active">СТРОИТЕЛЬСТВО 2-Х ШПУНТОВЫХ КОТЛОВАНОВ</div>
                            <div class="jobs__boxarrow active_arrow">&#129130;</div>
                        </div>
                        <div class="jobs__page">
                            <div class="jobs__row">
                                <div class="jobs__column">
                                    <p class="jobs__p">Город</p>
                                </div>
                                <div class="jobs__column">
                                    <p class="jobs__p">г.Москва</p>
                                </div>
                            </div>
                            <div class="jobs__row">
                                <div class="jobs__column">
                                    <p class="jobs__p">Выполненные работы</p>
                                </div>
                                <div class="jobs__column">
                                    <p class="jobs__p">Погружение > 600 тонн шпунта
                                        Наращивание шпунта до 18 метров
                                        Установка распорной системы
                                        Обратный выкуп шпунта</p>
                                </div>
                            </div>
                            <div class="jobs__row">
                                <div class="jobs__column">
                                    <p class="jobs__p">Шпунт</p>
                                </div>
                                <div class="jobs__column">
                                    <p class="jobs__p">Шпунт Ларсена VL</p>
                                </div>
                            </div>
                            <div class="jobs__row">
                                <div class="jobs__column">
                                    <p class="jobs__p">Оборудование</p>
                                </div>
                                <div class="jobs__column">
                                    <p class="jobs__p">Вибропогружатель MULLER</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="jobs__box">
                        <div class="jobs__boxhead">
                            <div class="jobs__subtitle">СОЗДАНИЕ ШПУНТОВОГО КОТЛОВАНА</div>
                            <div class="jobs__boxarrow">&#129130;</div>
                        </div>
                        <div class="jobs__page hidden">
                            <div class="jobs__row">
                                <div class="jobs__column">
                                    <p class="jobs__p">Город</p>
                                </div>
                                <div class="jobs__column">
                                    <p class="jobs__p">г.Москва</p>
                                </div>
                            </div>
                            <div class="jobs__row">
                                <div class="jobs__column">
                                    <p class="jobs__p">Выполненные работы</p>
                                </div>
                                <div class="jobs__column">
                                    <p class="jobs__p">Погружение > 600 тонн шпунта
                                        Наращивание шпунта до 18 метров
                                        Установка распорной системы
                                        Обратный выкуп шпунта</p>
                                </div>
                            </div>
                            <div class="jobs__row">
                                <div class="jobs__column">
                                    <p class="jobs__p">Шпунт</p>
                                </div>
                                <div class="jobs__column">
                                    <p class="jobs__p">Шпунт Ларсена VL</p>
                                </div>
                            </div>
                            <div class="jobs__row">
                                <div class="jobs__column">
                                    <p class="jobs__p">Оборудование</p>
                                </div>
                                <div class="jobs__column">
                                    <p class="jobs__p">Вибропогружатель MULLER</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="jobs__box">
                        <div class="jobs__boxhead">
                            <div class="jobs__subtitle">ПОГРУЖЕНИЕ ШПУНТА ЛАРСЕНА 21 МЕТР</div>
                            <div class="jobs__boxarrow">&#129130;</div>
                        </div>
                        <div class="jobs__page hidden">
                            <div class="jobs__row">
                                <div class="jobs__column">
                                    <p class="jobs__p">Город</p>
                                </div>
                                <div class="jobs__column">
                                    <p class="jobs__p">г.Москва</p>
                                </div>
                            </div>
                            <div class="jobs__row">
                                <div class="jobs__column">
                                    <p class="jobs__p">Выполненные работы</p>
                                </div>
                                <div class="jobs__column">
                                    <p class="jobs__p">Погружение > 600 тонн шпунта
                                        Наращивание шпунта до 18 метров
                                        Установка распорной системы
                                        Обратный выкуп шпунта</p>
                                </div>
                            </div>
                            <div class="jobs__row">
                                <div class="jobs__column">
                                    <p class="jobs__p">Шпунт</p>
                                </div>
                                <div class="jobs__column">
                                    <p class="jobs__p">Шпунт Ларсена VL</p>
                                </div>
                            </div>
                            <div class="jobs__row">
                                <div class="jobs__column">
                                    <p class="jobs__p">Оборудование</p>
                                </div>
                                <div class="jobs__column">
                                    <p class="jobs__p">Вибропогружатель MULLER</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jobs__picture">
                    <div class="jobs__slider">
                        <div class="jobs__slide">
                            <img class="jobs__img" src="<?php the_field('jobs__img_1'); ?>" alt="jobs"> <!-- /assets/jobs-1.png -->
                        </div>
                        <div class="jobs__slide">
                            <img class="jobs__img" src="<?php the_field('jobs__img_2'); ?>" alt="jobs"> <!-- /assets/jobs-2.png -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="jobs__controls controls">
                <a href="#" class="jobs__button">
                    <span>Смотреть еще</span><img src="<?php echo get_template_directory_uri(); ?>/main/assets/arrow-r.svg" alt="arrow-r">
                </a>
                <div class="jobs__arrows controls__arrows">
                    <a class="jobs__left controls__left">
                        <img class="controls__img_left" src="<?php echo get_template_directory_uri(); ?>/main/assets/arrow-lg.svg" alt="arrow-lg">
                    </a>
                    <a class="jobs__right controls__right">
                        <img class="controls__img_right" src="<?php echo get_template_directory_uri(); ?>/main/assets/arrow-ry.svg" alt="arrow-ry">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="stats">
        <div class="wrapper">
            <div class="stats__values">
                <p class="stats__val_1"><?php the_field('stats__val_1'); ?></p> <!-- 138 -->
                <p class="stats__val_2"><?php the_field('stats__val_2'); ?></p> <!-- 110 000 т. -->
                <p class="stats__val_3"><?php the_field('stats__val_3'); ?></p> <!-- 100+ -->
            </div>
            <div class="stats__descriptions">
                <p class="stats__desc_1"><?php the_field('stats__desc_1'); ?></p> <!-- выполненных работ -->
                <p class="stats__desc_2"><?php the_field('stats__desc_2'); ?></p> <!-- шпунта поставленно -->
                <p class="stats__desc_3"><?php the_field('stats__desc_3'); ?></p> <!-- отгруженных машин -->
            </div>
        </div>
    </div>

    <section class="section questions">
        <div class="wrapper">
            <div class="section__page">
                <div class="section__logo">В</div>
                <div class="section__block">
                    <div class="section__title"></div>
                    <hr>
                    <div class="section__title">Вопросы</div>
                </div>
            </div>
            <div class="questions__content">
                <div class="questions__subcontent">
                    <div class="questions__title title"><span>ОСТАЛИСЬ ВОПРОСЫ ?</span>
                    </div>
                    <p class="questions__text">Или нужна консультация?</p>
                    <p class="questions__text">Заполните форму или позвоните нам </p>
                    <div class="questions__phone">
                        <a class="questions__link" href="tel: +7<?php the_field('phone'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/main/assets/calling-gold.svg" alt="calling-gold">
                            <span>+7 (<?php echo substr(get_field('phone'), 0, 3); ?>) - <?php echo substr(get_field('phone'), 3, 3); ?> - <?php echo substr(get_field('phone'), 6, 2) ; ?> - <?php echo substr(get_field('phone'), 8, 2) ; ?></span>
                        </a>
                    </div>
                </div>
                <div class="questions__form">
                    <form class="form" action="#">
                        <p class="form__title">Заполните форму</p>
                        <input class="form__input" type="text" placeholder="Имя">
                        <input class="form__input" type="text" placeholder="Номер телефона">
                        <input class="form__input" type="text" placeholder="Комментарии">
                        <div class="form__input form__checkbox">
                            <input class="form__checkbox_input" type="checkbox" name="" id="">
                            <p>Я согласен(а) на обработку персональных данных</p>
                        </div>
                        <a href="#" class="form__input form__button" type="submit">
                            <span>Отправить заявку</span><img src="<?php echo get_template_directory_uri(); ?>/main/assets/upload.svg" alt="upload">
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
// get_sidebar();
get_footer();
