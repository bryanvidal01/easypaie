<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>



<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="title">
                    Contactez-nous
                </div>
                <div class="adress">
                    Easypaie<br/>
                    21 Boulevard Poissonnière, 75002 Paris<br/>
                    01 53 40 53 40<br/>
                    <a href="mailto:contact@easypaie.com">contact@easypaie.com</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="title">
                    Navigation
                </div>

                <ul class="navigation">
                    <li>
                        <a href="#">Accueil</a>
                    </li>
                    <li>
                        <a href="#">Nos Atouts</a>
                    </li>
                    <li>
                        <a href="#">Notre mission </a>
                    </li>
                    <li>
                        <a href="#">Tarifs </a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4 text-right">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="" class="logo">
            </div>
        </div>
    </div>
</footer>


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/event.js"></script>

<?php wp_footer(); ?>

</body>
</html>
