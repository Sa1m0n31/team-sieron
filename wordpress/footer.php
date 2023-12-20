<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package team-sieron
 */

?>

<footer class="footer center">
    <div class="footer__links">
        <a class="footer__links__item"
           href="<?php echo get_page_link(get_page_by_title('Datenschutzerklärung')->ID); ?>">
            Datenschutzerklärung
        </a>
        <a class="footer__links__item"
           href="<?php echo get_page_link(get_page_by_title('Impressum')->ID); ?>">
            Impressum
        </a>
    </div>

    <h6 class="footer__header">
        Team Sieron
    </h6>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
