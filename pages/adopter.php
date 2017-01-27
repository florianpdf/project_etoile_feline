<?php
    /*
    Template Name: Adopter
    */
    get_header();
?>

<div class="container">
	<section id="adopter">
		<div class="row">
            <?php get_sidebar(); ?>
			<div class="block_patchwork col-md-9">
				<div class="row">
					<?php
					$args = array(
						'category_name'    => 'chat',
					);
					$posts_array = get_posts($args);
					foreach ($posts_array as $post){
						setup_postdata($post);
						?>
                        <div class="col-md-4">
                            <div class="test_img">
                                <div class="hovereffect">
                                    <img class="img-responsive" style="z-index: 0;" src="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID)); ?>" alt="img_chat">
                                    <div class="overlay">
                                        <h4><?php echo $post->post_title ?></h4>
                                        <p><?php echo get_post_meta($post->ID, 'Description', true); ?></p>
                                        <a href="#">link here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
					<?php
                    }
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
	height_adopter();
</script>