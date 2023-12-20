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
                        Unser Unternehmen bietet hochqualifizierte Arbeitskräfte
                        für den Bau von Messeständen an.
                    </p>
                    <p>
                        Mit flexiblen Abrechnungsoptionen ermöglichen wir Kunden die Auswahl zwischen stundenbasierter Abrechnung oder einer Pauschalgebühr, um ihren individuellen Anforderungen gerecht zu werden.
                    </p>
                </div>
                <div class="main__box__boxes center">
                    <div class="main__box__boxes__item center">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/icon1.svg"; ?>" alt="icon" />
                        <p class="main__box__boxes__item__text">
                            Stündliche
                            Abrechnung
                        </p>
                    </div>
                    <div class="main__box__boxes__item center">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/icon2.svg"; ?>" alt="icon" />
                        <p class="main__box__boxes__item__text">
                            Pauschalgebühr
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
                            Montagen
                        </h2>
                        <p class="services__item__content__text">
                            Unsere Experten führen fachgerechte Montagen von
                            Messeständen durch, gewährleisten höchste Qualität
                            und pünktliche Fertigstellung. Verlassen Sie sich auf
                            unsere Kompetenz für eine reibungslose Umsetzung
                            Ihrer Projekte.
                        </p>
                    </div>
                </div>
                <div class="services__item flex">
                    <img class="services__item__img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/2.gif"; ?>" alt="item" />
                    <div class="services__item__content">
                        <h2 class="services__item__content__title">
                            Demontagen
                        </h2>
                        <p class="services__item__content__text">
                            Unsere erfahrenen Teams bieten zuverlässige
                            Demontage-Dienstleistungen für Messestände an,
                            um einen effizienten Rückbau nach Veranstaltungen
                            zu gewährleisten.
                        </p>
                    </div>
                </div>
                <div class="services__item flex">
                    <img class="services__item__img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/3.gif"; ?>" alt="item" />
                    <div class="services__item__content">
                        <h2 class="services__item__content__title">
                            Schnelle Crew
                        </h2>
                        <p class="services__item__content__text">
                            Unser erfahrenes Personal steht Ihnen zur Verfügung,
                            um Ihre Messestand-Projekte effizient umzusetzen.
                            Wir bieten flexible Arbeitskräfte mit Expertise,
                            um Ihre Anforderungen bestmöglich zu erfüllen.
                        </p>
                    </div>
                </div>
                <div class="services__item flex">
                    <img class="services__item__img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/4.gif"; ?>" alt="item" />
                    <div class="services__item__content">
                        <h2 class="services__item__content__title">
                            Sicherheit
                        </h2>
                        <p class="services__item__content__text">
                            Unsere höchste Priorität ist die Sicherheit. Wir setzen
                            auf strenge Sicherheitsstandards, um einen geschützten
                            Arbeitsplatz für unser Personal und eine risikofreie
                            Umgebung für unsere Kunden zu gewährleisten.
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
                <div class="portfolio__item flex">
                    <figure class="portfolio__item__img">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/portfolio1.jpg"; ?>" alt="portfolio" />
                    </figure>

                    <div class="portfolio__item__content">
                        <h4 class="portfolio__item__content__title">
                            Ein Beispiel für einen
                            Messestand
                        </h4>
                        <h5 class="portfolio__item__content__subtitle">
                            25 m<sup>2</sup>
                        </h5>
                    </div>
                </div>
                <div class="portfolio__item flex">
                    <figure class="portfolio__item__img">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/portfolio1.jpg"; ?>" alt="portfolio" />
                    </figure>

                    <div class="portfolio__item__content">
                        <h4 class="portfolio__item__content__title">
                            Ein Beispiel für einen
                            Messestand
                        </h4>
                        <h5 class="portfolio__item__content__subtitle">
                            140 m<sup>2</sup>
                        </h5>
                    </div>
                </div>

                <button class="btn btn--showMore" onclick="showMorePortfolio()">
                    Mehr sehen...
                </button>
            </div>

            <div class="portfolio__all">
                <div class="portfolio__item flex">
                    <figure class="portfolio__item__img">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/portfolio1.jpg"; ?>" alt="portfolio" />
                    </figure>

                    <div class="portfolio__item__content">
                        <h4 class="portfolio__item__content__title">
                            Ein Beispiel für einen
                            Messestand
                        </h4>
                        <h5 class="portfolio__item__content__subtitle">
                            25 m<sup>2</sup>
                        </h5>
                    </div>
                </div>
                <div class="portfolio__item flex">
                    <figure class="portfolio__item__img">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/portfolio1.jpg"; ?>" alt="portfolio" />
                    </figure>

                    <div class="portfolio__item__content">
                        <h4 class="portfolio__item__content__title">
                            Ein Beispiel für einen
                            Messestand
                        </h4>
                        <h5 class="portfolio__item__content__subtitle">
                            140 m<sup>2</sup>
                        </h5>
                    </div>
                </div>
                <div class="portfolio__item flex">
                    <figure class="portfolio__item__img">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/portfolio1.jpg"; ?>" alt="portfolio" />
                    </figure>

                    <div class="portfolio__item__content">
                        <h4 class="portfolio__item__content__title">
                            Ein Beispiel für einen
                            Messestand
                        </h4>
                        <h5 class="portfolio__item__content__subtitle">
                            25 m<sup>2</sup>
                        </h5>
                    </div>
                </div>
                <div class="portfolio__item flex">
                    <figure class="portfolio__item__img">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/portfolio1.jpg"; ?>" alt="portfolio" />
                    </figure>

                    <div class="portfolio__item__content">
                        <h4 class="portfolio__item__content__title">
                            Ein Beispiel für einen
                            Messestand
                        </h4>
                        <h5 class="portfolio__item__content__subtitle">
                            140 m<sup>2</sup>
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact w" id="kontakt">
            <div class="contact__header">
                <img class="contact__header__background" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/contact-background.jpg"; ?>" alt="kontakt" />
            </div>
            <div class="contact__main flex">
                <div class="contact__main__left">
                    <img class="contact__main__left__logo" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/logo-contact.svg"; ?>" alt="logo" />
                    <a href="tel:+4901723477621" class="contact__main__left__item flex flex--start">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/telephone.svg"; ?>" alt="phone-number" />
                        01723477621
                    </a>
                    <a href="mailto:kontakt@team-sieron.de" class="contact__main__left__item flex flex--start">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/email.svg"; ?>" alt="email" />
                        kontakt@team-sieron.de
                    </a>
                    <div class="contact__main__left__item flex flex--start">
                        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/assets/location-pin.svg"; ?>" alt="location" />
                        Langenberger Str. 141,<br/>
                        42551 Velbert
                    </div>
                </div>
                <div class="contact__main__right">
                    <form>
                        <label class="label">
                            Vorname und Nachname:
                            <input class="input" name="name" />
                        </label>
                        <label class="label">
                            E-Mail-Adresse:
                            <input class="input" name="email" />
                        </label>
                        <label class="label">
                            Nachricht:
                            <textarea class="input input--textarea" name="message">

                        </textarea>
                        </label>
                        <button class="btn btn--submit">
                            Send
                        </button>
                    </form>
                </div>
            </div>
        </div>


<?php
get_footer();
