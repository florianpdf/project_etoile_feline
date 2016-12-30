<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Etoile Feline</title>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a class="" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_letoile_feline.jpg" class="img-circle logo_etoile_feline"></a>
                    </div>

                    <div class="col-md-7">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'Top',
                            'container'=> false,
                            'menu_class'=> false,
                        )); ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>