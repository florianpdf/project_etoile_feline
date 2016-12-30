<?php
/*
Template Name: Qui sommes nous ?
*/
get_header();

?>

<div class="container">
	<section id="notre_histoire">
		<div class="row">
			<?php get_sidebar(); ?>
			<div class="block_text col-md-9">
				<div class="row">
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
			</div>
		</div>
	</section>
</div>

<?php
get_footer();
?>

<script>
    height_notre_histoire();
</script>
