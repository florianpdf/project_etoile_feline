<?php
    /*
    Template Name: Page d'accueil
    */

    get_header();
    include 'includes/slider.php';
?>
<div class="container">
	<section id="homepage">
		<div class="row">
			<div class="side_actu col-md-3">
				<div class="row">
					<h3 class="title_actu_side_nav">ACTUALITÉS</h3>
					<ul>
						<?php
						$args = array(
							'category_name'    => 'actualitee',
							'posts_per_page' => 3
						);
						$posts_array = get_posts($args);
						foreach ($posts_array as $post){
							setup_postdata($post);
							$description = $post->post_content;
							$apercu_description = substr($description, 0, 60);
							echo '<li><p>' . $apercu_description . '...</p><a href="#">Lire la suite &rarr;</a></li>';
						}
						?>
					</ul>			
				</div>
				<div class="row">
					<h4 class="title_video_side_nav">Dernières vidéo !</h4>
					<?php dynamic_sidebar('sidebar_widget');?>
				</div>
				<div class="row">
					<h4 class="title_chaine_youtube">
						<a href="#">Notre chaîne youtube </a> &rarr;
					</h4>
				</div>
			</div>
			<div class="col-xs-9">
				<div class="block_text row">
					<div class="col-xs-12">
						<?php
						while ( have_posts() ) : the_post(); ?>
                            <h1 class="title"><?php the_title() ?></h1>
                            <div class="content">
	                            <?php the_content(); ?>
                            </div>
							<?php
						endwhile;
						?>
					</div>
					<div class="row mtop50">
						<div class="col-md-3">
							<img class="ranger_image_homepage" src="<?php echo get_template_directory_uri(); ?>/assets/images/pictos/Picto_action.png">
							<p class="text-center text_picto">Nos action sur le terrain</p>
						</div>
						<div class="col-md-3">
							<img class="ranger_image_homepage" src="<?php echo get_template_directory_uri(); ?>/assets/images/pictos/Picto_dons.png">
							<p class="text-center text_picto">Devoir...</p>
						</div>
						<div class="col-md-3">
							<img class="ranger_image_homepage" src="<?php echo get_template_directory_uri(); ?>/assets/images/pictos/Picto_fa.png"">
							<p class="text-center text_picto">Parainer un loulou</p>
						</div>
						<div class="col-md-3">
							<img class="ranger_image_homepage" src="<?php echo get_template_directory_uri(); ?>/assets/images/pictos/Picto_parrainage.png">
							<p class="text-center text_picto">Faire un don</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php
	get_footer();
?>