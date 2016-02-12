
<!--social links-->

<aside class="contacts-page-social animatedParent">
	<div class="container text-center">
		<div class="call-to-action">
			<?php if ( have_posts() ) : query_posts('cat=6');
				while (have_posts()) : the_post(); ?>
					<a href="<?php echo get_post_meta($post->ID, 'soc_link', true); ?>" title="<?php the_title(); ?>"><i
							class="fa fa-1x <?php echo get_post_meta($post->ID, 'fa_icon', true); ?> animated tada" <?php echo get_post_meta($post->ID, 'data-id', true); ?>></i></a>

				<? endwhile; endif; wp_reset_query(); ?>
		</div>
	</div>
</aside>