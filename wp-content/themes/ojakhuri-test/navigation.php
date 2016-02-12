<!--navigation-->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
			        data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php get_template_part('images/inline', 'logo.svg'); ?></a>
			<ul class="rest-name">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ХИМКИ <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="/korolev">КОРОЛЕВ</a></li>
					<li><a href="/sch">САДОВАЯ-ЧЕРНОГРЯЗСКАЯ</a></li>
				</ul>
				</li>
			</ul>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			<nav class="nav navbar-nav navbar-right">
		<!--add main menu from WP-->
				<?php
					$defaults = array( 'menu_class' => 'nav navbar-nav navbar-right' );
					wp_nav_menu( $defaults );
				?>

			</nav>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>