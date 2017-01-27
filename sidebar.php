<div class="side_nav col-md-3">
    <div class="spacer row">
        
    </div>
    <div class="link row">
        <?php if (is_page('Adopter')){ ?>
            <ul>
                <li>
                    <a href="#">Notre histoire</a>
                </li>
                <li>
                    <a href="#">Notre action sur le terrain</a>
                </li>
                <li>
                    <a href="#">Les trappages</a>
                </li>
                <li>
                    <a href="#">Les sauvetages</a>
                </li>
                <li>
                    <a href="#">es stérilisations</a>
                </li>
                <li>
                    <a href="#">Les soins quotidiens</a>
                </li>
                <li>
                    <a href="#">Ils font parti de l'asso'</a>
                </li>
            </ul>
        <?php } else{ ?>
	        <?php wp_nav_menu( array(
		        'theme_location' => 'side_histoire',
		        'container'=> false,
		        'menu_class'=> false,
	        )); ?>
        <?php } ?>

    </div>
    <div class="logo row">
        <div class="col-md-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pictos/Picto_action.png" alt="logo">
        </div>
        <div class="col-md-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pictos/Picto_dons.png" alt="logo">
        </div>
        <div class="col-md-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pictos/Picto_fa.png" alt="logo">
        </div>
        <div class="col-md-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pictos/Picto_parrainage.png" alt="logo">
        </div>
    </div>
</div>