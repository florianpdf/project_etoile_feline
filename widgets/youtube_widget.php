<?php

class youtube_widget extends WP_Widget
{
	public function __construct()
	{
		parent::__construct('youtube_widget', 'Youtube video', array(
			'description' => 'Ajout d\'une video Youtube dans la sidebar'
		));
	}

	public function widget($args, $instance)
	{
		if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $instance['title'], $id)) {
			$values = $id[1];
		} else if (preg_match('/youtube\.com\/embed\/([^\&\?\/]+)/', $instance['title'], $id)) {
			$values = $id[1];
		} else if (preg_match('/youtube\.com\/v\/([^\&\?\/]+)/', $instance['title'], $id)) {
			$values = $id[1];
		} else if (preg_match('/youtu\.be\/([^\&\?\/]+)/', $instance['title'], $id)) {
			$values = $id[1];
		}
		else if (preg_match('/youtube\.com\/verify_age\?next_url=\/watch%3Fv%3D([^\&\?\/]+)/', $instance['title'], $id)) {
			$values = $id[1];
		} else {
            echo "URL Invalide";
		}

		echo $args['before_title'];
		echo 'https://www.youtube.com/embed/' . $values;
		echo $args['after_title'];
	}

	public function form($instance)
	{
		$title = isset($instance['title']) ? $instance['title'] : '';
		?>
		<div>
			<label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Url:' ); ?></label>
			<input
                    class="widefat"
                    id="<?php echo $this->get_field_id( 'title' ); ?>"
                    name="<?php echo $this->get_field_name( 'title' ); ?>"
                    type="text"
                    value="<?php echo  $title; ?>"
            />
		</div>
		<?php
	}

}

//Initialisation du widget
add_action('widgets_init', function(){
	register_widget('youtube_widget');
});