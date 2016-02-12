    <div class="content-ins">
        <div class="bottom-widget">
            <?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
	        <?php dynamic_sidebar( 'footer-left' ); ?>
            <?php endif; ?>
        </div>
	
        <div class="bottom-widget">
            <?php if ( is_active_sidebar( 'footer-middle1' ) ) : ?>
	        <?php dynamic_sidebar( 'footer-middle1' ); ?>
            <?php endif; ?>	
        </div>
	
	     <div class="bottom-widget">
            <?php if ( is_active_sidebar( 'footer-middle2' ) ) : ?>
	        <?php dynamic_sidebar( 'footer-middle2' ); ?>
            <?php endif; ?>	
        </div>
	
        <div class="bottom-widget">
            <?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
	        <?php dynamic_sidebar( 'footer-right' ); ?>
            <?php endif; ?>   
        </div>
    </div>