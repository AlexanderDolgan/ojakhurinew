<!-- FOOTER -->
	<div id="footer">
<?php get_sidebar ('footer') ; ?> 
	<div class="clear"></div>
	</div> <!-- footer -->		
     <div class="copyright">
		<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'diversity' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'diversity' ), 'WordPress' ); ?></a>
		<span class="sep"> | </span>
<?php printf( __( 'Theme: %1$s by %2$s', 'diversity' ), 'Diversity', '<a href="http://www.wpmole.com/" rel="designer">WPMole</a>' ); ?>
	</div>    
    </div>
<?php wp_footer(); ?>

</body>
</html>