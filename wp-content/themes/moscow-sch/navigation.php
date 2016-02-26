<div class="container">
	<nav class="header-nav / row">
		<!--logo-->
		<div class="logo col-md-3">
			<!--inline logo svg-->
			<a href="<?php echo network_home_url(); ?>"><img
					src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxOC4xLjEsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCIgWw0KCTwhRU5USVRZIHN0MCAiZmlsbDojMDEwMTAxOyI+DQpdPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDIyMCAzMS43IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAyMjAgMzEuNzsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPHBhdGggc3R5bGU9IiZzdDA7IiBkPSJNMTQyLjYsMTUuMmMtMi43LDUtNy45LTAuMy03LjQtNC40YzAuMi0xLjUsMS4xLTMuMSwxLjktNC40YzAuNC0wLjYsMS0xLjcsMS43LTIuMWMwLjUtMC4yLDAuMS0wLjMsMC42LDAuNw0KCQljMS4xLDIuMiw0LjUsMC4zLDMuNC0yYy0zLTYtNy44LTEuMS0xMC4xLDMuNmMtMS41LTQuMi01LTcuMi0xMC44LTUuOWMtMi40LDAuNi0xLjQsNC4zLDEsMy44YzkuNC0yLjIsOC44LDE2LjIsMC41LDEyLjUNCgkJYy0yLjMtMS00LjMsMi4zLTIsMy40YzUuOSwyLjYsOS43LTAuMiwxMS4zLTQuNGMyLjgsNS4yLDkuOSw3LjksMTMuNSwxLjJDMTQ3LjEsMTUsMTQzLjgsMTMsMTQyLjYsMTUuMnoiLz4NCgk8cGF0aCBzdHlsZT0iJnN0MDsiIGQ9Ik0xNjUuMiwyLjFjLTEuNCwzLjYtMy4xLDcuMS01LDEwLjRjLTIuOS0zLTQuNS03LTYuMy0xMC43Yy0xLjEtMi4yLTQuNS0wLjMtMy40LDJjMi4xLDQuMyw0LDksNy43LDEyLjINCgkJYy0wLjksMS41LTEuOSwyLjktMi45LDQuNGMtMC43LDEtMy42LDYuMS01LjQsNy4xYy0wLjMtMC43LTEtMC42LTEuOC0wLjZjLTAuNCwwLTAuNywwLTEuMSwwYy0xLjUsMC0yLjQsMS4xLTEuNywyLjQNCgkJYzYuNCwxMS44LDIyLjMtMjIuNiwyMy42LTI1LjhDMTY5LjksMS4xLDE2Ni4xLTAuMiwxNjUuMiwyLjF6Ii8+DQoJPHBhdGggc3R5bGU9IiZzdDA7IiBkPSJNNy43LDAuN0M3LjMsMC40LDYuOCwwLjMsNi4yLDAuNEM2LDAuNSw1LjgsMC41LDUuNywwLjZjLTAuNiwwLTEuMiwwLTEuOCwwLjFjLTEuNCwwLjItMiwxLjYtMS44LDIuNw0KCQlDLTAuNCw3LTAuNywxMi45LDEuNCwxNi4xYzMuMyw1LjMsMTAuOCw1LjMsMTUuNywyLjVjNC43LTIuNyw2LjUtOC40LDIuNS0xMi41QzE2LjgsMy4yLDEyLjEsMS4yLDcuNywwLjd6IE0xNywxMy44DQoJCWMtMi4xLDIuNS02LjksMy42LTkuOCwyLjRjLTIuMy0wLjktMy4zLTIuOS0zLjMtNS4zYzAtMS44LDAuNy01LDIuNC02LjJDMTEuNyw1LjIsMjEuMiw4LjYsMTcsMTMuOHoiLz4NCgk8cGF0aCBzdHlsZT0iJnN0MDsiIGQ9Ik05MS44LDE2LjVjLTMuMiwwLjItNy43LDAuMS05LjQtMy4xYy0yLTMuNiwwLjItOS42LDQuOC04LjhjMi40LDAuNCwzLjUtMy40LDEtMy44DQoJCWMtNi4yLTEtMTAuMywzLjYtMTAuNCw5LjNjLTAuMSwwLjEtMC4yLDAuMS0wLjQsMC4yYy0wLjcsMC41LTEuNCwxLjEtMi4xLDEuNmMwLjEtMi44LDAuNS01LjYsMC43LTguNGMwLjItMi41LTMuNy0yLjUtMy45LDANCgkJYy0wLjIsMi0xLjQsMy44LTIuOSw1LjFjLTEuNi01LTguNC0xMC41LTEzLjItNy40Yy0yLjEsMS40LTAuMSw0LjcsMiwzLjRjMi45LTEuOSw3LjYsMy40LDcuNyw2LjFjMC4zLDQuNy01LjUsNi41LTkuMyw2DQoJCWMtMi40LTAuNC0zLjUsMy40LTEsMy44YzUuNSwwLjgsMTIuNS0xLjYsMTMuOS03LjJjMC4xLDAsMC4zLTAuMSwwLjQtMC4yYzAuNi0wLjQsMS4yLTAuOCwxLjgtMS4yYy0wLjEsMS45LTAuMSwzLjcsMCw1LjYNCgkJYzAuMSwxLjgsMi43LDIuOSwzLjYsMWMwLjgtMS43LDItMywzLjQtNC4xYzIsNSw4LjEsNi40LDEzLjIsNi4xQzk0LjMsMjAuMyw5NC4zLDE2LjQsOTEuOCwxNi41eiIvPg0KCTxwYXRoIHN0eWxlPSImc3QwOyIgZD0iTTQ3LjUsMTJjLTAuOSwwLTEuNywwLTIuNiwwYy0wLjMtMywwLjQtNiwwLjQtOWMwLTEuMS0wLjktMS44LTEuOS0xLjljLTMuOS0wLjQtNy41LTEuNi0xMC44LDAuNg0KCQljLTAuOCwwLjItMS41LDAuOC0xLjUsMS44YzAsMy4xLDAsNi4yLTAuNCw5LjJjLTEuMSwwLTIuMiwwLTMuMywwYy0xLjQsMC0yLjEsMS4zLTEuOSwyLjVjMC40LDIuNCwwLjQsNC45LDAuNyw3LjMNCgkJYzAuMywyLjUsNC4yLDIuNSwzLjksMGMtMC4yLTItMC4zLTMuOS0wLjUtNS44YzUuNC0wLjEsMTAuNy0wLjgsMTYuMS0wLjhjMC4xLDEuNywwLjIsMy40LTAuNSw0LjdjLTEuMiwyLjIsMi4xLDQuMiwzLjQsMg0KCQljMS41LTIuNywwLjktNS43LDAuOS04LjZDNDkuNCwxMi45LDQ4LjUsMTIuMSw0Ny41LDEyeiBNNDEsMTIuMmMtMi4yLDAuMS00LjMsMC4zLTYuNSwwLjRjMC4zLTIuNiwwLjQtNS4yLDAuNC03LjgNCgkJYzEuOC0xLjEsNC4yLTAuNiw2LjQtMC4xQzQxLjIsNy4yLDQwLjksOS43LDQxLDEyLjJ6Ii8+DQoJPHBhdGggc3R5bGU9IiZzdDA7IiBkPSJNMTExLjEsMS45Yy0zLjctMy42LTkuMi0xLjgtMTEuNCwyLjRjLTEuMiwyLjIsMi4yLDQuMiwzLjQsMmMyLjEtMy44LDUuOC0yLjcsNi45LDEuMg0KCQljMC4zLDEuMSwwLjQsMi4yLDAuNSwzLjNjLTQuMy0xLjQtMTAuMS0yLjQtMTEuNSwyLjljLTAuNywyLjUsMSw1LjEsMy4xLDYuM2MyLjgsMS42LDUuNiwwLjYsOC41LTAuMmMwLjksMS40LDMuNiwxLjEsMy42LTENCgkJYzAtMS4zLDAuMS0yLjcsMC4yLTQuMWMwLjItMC41LDAuMy0xLjIsMC4xLTEuN0MxMTQuNCw4LjksMTE0LDQuOCwxMTEuMSwxLjl6IE0xMTAuNCwxNS44QzExMC4zLDE1LjgsMTEwLjMsMTUuOCwxMTAuNCwxNS44DQoJCWMtMS43LDAuNC0zLjgsMS42LTUuNiwxLjFjLTEuMy0wLjMtMy0yLTEuNC0zLjFjMS44LTEuMSw0LjcsMCw3LDFDMTEwLjQsMTUuMSwxMTAuNCwxNS41LDExMC40LDE1Ljh6Ii8+DQoJPHBhdGggc3R5bGU9IiZzdDA7IiBkPSJNMTc4LjIsMS42Yy0wLjYtMS45LTMuOS0xLjgtMy44LDAuNWMwLjEsNS4xLDAuMSwxMC4yLTAuMywxNS4yYy0wLjMsNC0wLjcsNy45LTAuMiwxMS45DQoJCWMwLjMsMi41LDQuMSwxLjQsMy44LTFjLTAuNC0yLjctMC4yLTUuNCwwLjEtOC4yYzMuOCwwLjksNy44LDEuMSwxMC41LTIuM2MyLjQtMy4xLDMuMS04LjEsMS4xLTExLjUNCgkJQzE4Ny4zLDIuNywxODEuOSwwLjMsMTc4LjIsMS42eiBNMTg1LjMsMTUuM2MtMS44LDIuNC00LjgsMS42LTcuMiwwLjljMC4yLTMuMSwwLjItNi4yLDAuMi05LjNjMS4xLTMuNyw2LjMtMSw3LjcsMS40DQoJCUMxODcuMSwxMC4zLDE4Ni43LDEzLjUsMTg1LjMsMTUuM3oiLz4NCgk8cGF0aCBzdHlsZT0iJnN0MDsiIGQ9Ik0yMTcsMTYuNGMtMy42LDEuNy0zLjctMi42LTMuOC01LjJjLTAuMi0zLjEsMC4xLTYuMy0wLjItOS40Yy0wLjMtMi41LTQuMi0yLjUtMy45LDANCgkJYzAuMywyLjUsMC4xLDcsMC41LDEwLjljLTAuMSwwLTAuMiwwLjEtMC4zLDAuMWMtMiwxLjMtNi42LDUuMy05LjEsMy44Yy0yLjEtMS4zLTEuOC01LTEuNi03LjFjMC4zLTIuOCwwLjctNS4zLTAuMS04LjENCgkJYy0wLjctMi40LTQuNC0xLjQtMy44LDFjMS42LDUuNC0yLjksMTQuMywzLjksMTcuN2M0LDIsOC40LTEuMiwxMS44LTMuNGMxLjIsMy40LDMuNiw1LjMsOC41LDIuOUMyMjEuMywxOC43LDIxOS4zLDE1LjMsMjE3LDE2LjR6DQoJCSIvPg0KPC9nPg0KPC9zdmc+DQo="
					alt="ojakhuri logo"></a>
		</div>

		<!--various restaurant dropdown navigation-->
			<ul class="rest-name">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
					   aria-haspopup="true" aria-expanded="false">Москва<span
							class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/korolev">Королев</a></li>
						<li><a href="/khimki">Химки</a></li>
					</ul>
				</li>
			</ul>


		<!--main site navigation-->
		<div class="main-menu">
			<?php
				$defaults = array( 'menu_class' => 'main-nav' );
				wp_nav_menu( $defaults );
			?>
		</div>
	</nav>
</div>