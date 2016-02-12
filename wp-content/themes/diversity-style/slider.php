    <div id="myCarousel" class="carousel <?php echo esc_attr(get_theme_mod( 'diversity_slider_transition', 'slide')); ?>">
    <div class="carousel-inner">		
        <?php $firstClass = 'active'; ?> 
        <?php if (have_posts()) : ?>          
		<?php $diversity_query = new WP_Query(array(
		'category_name'  => esc_attr(get_theme_mod( 'diversity_slide_cat', ' ' )),
		'posts_per_page' => esc_attr(get_theme_mod( 'diversity_slide_number', '5' ))
		)); ?>	
    	<?php while ($diversity_query->have_posts()) : $diversity_query->the_post(); ?>        
    <div class="item <?php echo $firstClass; ?>">
        <?php $firstClass = ""; ?>			
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('diversity_page-feature'); ?></a>
    <div class="carousel-caption">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </div>			
    </div>			
      	<?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>       
    </div>        
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>    
    </div><!-- #myCarousel -->