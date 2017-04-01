<?php
/*
Template Name: Homepage
*/
get_header(); ?>
<div class="slider-home clearfix">
    <div class="slide">
        <div class="container">
            <div class="row container-slide">
                <div class="col-sm-12">
                    <div class="text-slide">
                        <div class="title">
                            Easypaie
                        </div>
                        <div class="description">
                            Simplifiez vous la paie
                        </div>
                        <a href="#" class="link button">En savoir plus</a>
                    </div>
                </div>
                <div class="img-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/slide-1.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="slide">
        <div class="container">
            <div class="row container-slide">
                <div class="col-sm-12">
                    <div class="text-slide">
                        <div class="title">
                            100% dematerialisé
                        </div>
                        <div class="description">
                            voluptatem accusantium doloremque
                        </div>
                        <a href="#" class="link button">En savoir plus</a>
                    </div>
                </div>
                <div class="img-slide slide-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/slide-2.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="slide">
        <div class="container">
            <div class="row container-slide">
                <div class="col-sm-6">
                    <div class="text-slide">
                        <div class="title">
                            Easypaie
                        </div>
                        <div class="description">
                            Simplifiez vous la paie
                        </div>
                        <a href="#" class="link button">En savoir plus</a>
                    </div>
                </div>
                <div class="img-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/slide-1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

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

    <div class="push-contact">
        <div class="row">
            <div class="col-sm-8">
                <div class="text">
                    Natus error sit voluptatem accusantium doloremque laudantium.
                </div>
            </div>
            <div class="col-sm-4 text-right">
                <a href="" class="button">
                    S'inscrire
                </a>
            </div>
        </div>
    </div>
</div>
<?php get_footer();  ?>