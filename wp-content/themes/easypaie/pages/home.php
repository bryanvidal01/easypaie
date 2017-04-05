<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<?php get_template_part('includes/slider'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="bloc-intro">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/simplicity.png" alt="">
                </div>
                <div class="title">
                    Simplicité
                </div>

                <div class="description">
                    L’interface parametrée au profil de votre société.
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="bloc-intro">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/security.png" alt="">
                </div>
                <div class="title">
                    Sécurité
                </div>
                <div class="description">
                    Un controle qualité est effectué avant l’envoi de vos bulletins minimisant ainsi les risques d’erreurs
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="bloc-intro">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/reactivite.png" alt="">
                </div>
                <div class="title">
                    Réactivité
                </div>
                <div class="description">
                    Easypaie s’engage à traiter vos dossiers de paie sous un délai maximal de 48H
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row container-principe">
        <div class="col-sm-9 col-sm-offset-3">
            <div class="title">
                Principe
            </div>
        </div>
    </div>
    <div class="row item-principe">
        <div class="col-sm-3 text-center">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/all_incluseve.png" alt="">
        </div>
        <div class="col-sm-9">
            <div class="title-section">
                Votre solution paie tout compris
            </div>
            <div class="descrition-section">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
    </div>
    <div class="row item-principe">
        <div class="col-sm-3 text-center">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/easy.png" alt="">
        </div>
        <div class="col-sm-9">
            <div class="title-section">
                Simplifiez vous la paie
            </div>
            <div class="descrition-section">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
    </div>
    <div class="row item-principe">
        <div class="col-sm-3 text-center">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/check.png" alt="">
        </div>
        <div class="col-sm-9">
            <div class="title-section">
                Un tarif plus juste
            </div>
            <div class="descrition-section">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
    </div>
</div>



<?php get_footer();  ?>
