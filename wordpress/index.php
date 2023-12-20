<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package team-sieron
 */

get_header();
?>
        <div class="hero">
            <video class="hero__video"
                   loop
                   muted
                   autoplay
                   playsinline
                   src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/video.mp4"; ?>">

            </video>

            <div class="w flex hero__top">
                <a href="<?php echo home_url(); ?>"
                   class="hero__top__logo">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/logo.svg"; ?>" alt="logo" />
                </a>

                <div class="hero__top__menu flex d-desktop">
                    <a class="hero__top__menu__item" href="#service">Service</a>
                    <a class="hero__top__menu__item" href="#portfolio">Portfolio</a>
                    <a class="hero__top__menu__item hero__top__menu__item--contact" href="#kontakt">Kontakt</a>
                </div>

                <button class="btn--menu d-mobile" onclick="openMenu()">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/menu.svg"; ?>" alt="menu" />
                </button>
            </div>
        </div>

        <div class="main">
            <div class="main__box center w--narrow">
                <img class="main__box__logo" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/logo-yellow.png"; ?>" alt="logo" />
                <div class="main__box__text">
                    <p>
                        <?php echo get_field('paragraph_1', 14); ?>
                    </p>
                    <p>
                        <?php echo get_field('paragraph_2', 14); ?>
                    </p>
                </div>
                <div class="main__box__boxes center">
                    <div class="main__box__boxes__item center">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/icon1.svg"; ?>" alt="icon" />
                        <p class="main__box__boxes__item__text">
                            <?php echo get_field('block_1_text', 14); ?>
                        </p>
                    </div>
                    <div class="main__box__boxes__item center">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/icon2.svg"; ?>" alt="icon" />
                        <p class="main__box__boxes__item__text">
                            <?php echo get_field('block_2_text', 14); ?>
                        </p>
                    </div>
                </div>
            </div>

            <a href="#portfolio" class="btn btn--portfolio">
                Portfolio
            </a>
        </div>

        <div class="services" id="service">
            <img class="services__background" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/background.png"; ?>" alt="background" />

            <div class="w--narrow">
                <div class="services__item flex">
                    <img class="services__item__img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/1.gif"; ?>" alt="item" />
                    <div class="services__item__content">
                        <h2 class="services__item__content__title">
                            <?php echo get_field('service_title_1', 14); ?>
                        </h2>
                        <p class="services__item__content__text">
                            <?php echo get_field('service_text_1', 14); ?>
                        </p>
                    </div>
                </div>
                <div class="services__item flex">
                    <img class="services__item__img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/2.gif"; ?>" alt="item" />
                    <div class="services__item__content">
                        <h2 class="services__item__content__title">
                            <?php echo get_field('service_title_2', 14); ?>
                        </h2>
                        <p class="services__item__content__text">
                            <?php echo get_field('service_text_2', 14); ?>
                        </p>
                    </div>
                </div>
                <div class="services__item flex">
                    <img class="services__item__img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/3.gif"; ?>" alt="item" />
                    <div class="services__item__content">
                        <h2 class="services__item__content__title">
                            <?php echo get_field('service_title_3', 14); ?>
                        </h2>
                        <p class="services__item__content__text">
                            <?php echo get_field('service_text_3', 14); ?>
                        </p>
                    </div>
                </div>
                <div class="services__item flex">
                    <img class="services__item__img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/4.gif"; ?>" alt="item" />
                    <div class="services__item__content">
                        <h2 class="services__item__content__title">
                            <?php echo get_field('service_title_4', 14); ?>
                        </h2>
                        <p class="services__item__content__text">
                            <?php echo get_field('service_text_4', 14); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio w" id="portfolio">
            <h3 class="header">
                Portfolio
            </h3>

            <div class="portfolio__top">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 2
                    );

                    $post_query = new WP_Query($args);

                    if($post_query->have_posts() ) {
                        while($post_query->have_posts() ) {
                            $post_query->the_post();
                            $post_id = get_the_ID();
                            $category_object = get_the_category($post_id);
                            $category_name = $category_object[0]->name;
                            ?>
                            <div class="portfolio__item flex">
                                <figure class="portfolio__item__img">
                                    <img class="img" src="<?php echo get_field('image'); ?>" alt="portfolio" />
                                </figure>

                                <div class="portfolio__item__content">
                                    <h4 class="portfolio__item__content__title">
                                        <?php echo get_field('title'); ?>
                                    </h4>
                                    <h5 class="portfolio__item__content__subtitle">
                                        <?php echo get_field('meters'); ?> m<sup>2</sup>
                                    </h5>
                                </div>
                            </div>
                            <?php
                        }
                    }
                ?>

                <button class="btn btn--showMore" onclick="showMorePortfolio()">
                    Mehr sehen...
                </button>
            </div>

            <div class="portfolio__all">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 100
                );

                $post_query = new WP_Query($args);

                if($post_query->have_posts() ) {
                    while($post_query->have_posts() ) {
                        $post_query->the_post();
                        $post_id = get_the_ID();
                        $category_object = get_the_category($post_id);
                        $category_name = $category_object[0]->name;
                        ?>
                        <div class="portfolio__item flex">
                            <figure class="portfolio__item__img">
                                <img class="img" src="<?php echo get_field('image'); ?>" alt="portfolio" />
                            </figure>

                            <div class="portfolio__item__content">
                                <h4 class="portfolio__item__content__title">
                                    <?php echo get_field('title'); ?>
                                </h4>
                                <h5 class="portfolio__item__content__subtitle">
                                    <?php echo get_field('meters'); ?> m<sup>2</sup>
                                </h5>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>

        <div class="contact w" id="kontakt">
            <div class="contact__header">
                <img class="contact__header__background" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/contact-background.jpg"; ?>" alt="kontakt" />
            </div>
            <div class="contact__main flex">
                <div class="contact__main__left">
                    <img class="contact__main__left__logo" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/logo-contact.svg"; ?>" alt="logo" />
                    <a href="tel:+49<?php echo get_field('phone_number', 14); ?>" class="contact__main__left__item flex flex--start">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/telephone.svg"; ?>" alt="phone-number" />
                        <?php echo get_field('phone_number', 14); ?>
                    </a>
                    <a href="mailto:<?php echo get_field('email', 14); ?>" class="contact__main__left__item flex flex--start">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/email.svg"; ?>" alt="email" />
                        <?php echo get_field('email', 14); ?>
                    </a>
                    <div class="contact__main__left__item flex flex--start">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/location-pin.svg"; ?>" alt="location" />
                        <?php echo get_field('address', 14); ?>
                    </div>
                </div>
                <div class="contact__main__right">
                    <?php
                        echo do_shortcode('[contact-form-7 id="a2ac9af" title="Formularz 1"]');
                    ?>
                </div>
            </div>
        </div>


<?php
get_footer();
