<?php global $s;?>
	<label for="s"></label>   
		<div id="search-popup-wrapper">
		<form method="get" name="searchform" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="container-2">
		<span class="icon"><i class="fa fa-search"></i></span>
		<input type="search" name="s" id="search" value=" " onfocus="if (this.value == ' ') this.value = '';" onblur="if (this.value == '') this.value = ' ';"/>
		</div>
		</form>
	</div> <!-- searchform end -->	


