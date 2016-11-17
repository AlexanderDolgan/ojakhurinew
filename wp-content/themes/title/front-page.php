<? get_header(); ?> <!--include header.php-->
<!--restaurant navigation with preview-->
<section class="title-content-container row clearfix">

	<!--centered logo with nav and news button-->
	<section class="title-content">

		<!--start query-->
		<?php

		// The Query
		$args      = array( 'post_type' => 'structure_page', 'p' => 1149 );
		$the_query = new WP_Query( $args );

		//The Loop
		if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
		$the_query->the_post();
		?>


		<img
			src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4PSIwIiB5PSIwIiB2aWV3Qm94PSIwIDI3OC41IDU5NS4zIDI4OCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDI3OC41IDU5NS4zIDI4OCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHBhdGggZmlsbD0iIzdGODE4NCIgZD0iTTEyMS44IDQxOS4yYzE3LjYtMi4xIDM1LjItMy45IDUyLjktNS4zIDAuMSAwLjcgMC4yIDEuMyAwLjMgMS45IDAuNSA0LjIgNy4zIDQuMyA2LjggMCAtMC4xLTAuOC0wLjItMS42LTAuMy0yLjQgMzcuNi0yLjkgNzUuMy00LjQgMTEzLTQuNiA2Mi0wLjUgMTIzLjYgNi4xIDE4NS40IDEwLjQgNC40IDAuMyA0LjMtNi40IDAtNi44IC02MS43LTQuNC0xMjMuMy0xMC44LTE4NS40LTEwLjQgLTM4IDAuMi03Ni4yIDEuNy0xMTQuMSA0LjcgLTMuOS0yMy43LTkuNy01Ny40IDE4LjgtNjMuNiAyNi4xLTUuNiAyOS44IDM4LjYgMzIuNSA1NS4xIDAuNiAzLjggNi42IDIuOCA2LjYtMC45IC0wLjEtMTIuNi01LjItMzQuNyAxMS4xLTM5IDIxLjUtNS44IDMyIDE3LjEgMzcuMiAzMy41IDEuMSAzLjYgNi44IDMgNi42LTAuOSAtMC41LTEwLjcgMi41LTI2LjMgMTYuMS0yNi4zIDEzLjQtMC4xIDE2LjIgMTYuMiAxNC45IDI2LjMgLTAuNSA0IDUuNCA0LjIgNi42IDAuOSA0LjItMTAuOSAzLjktMjguMyAxOS0yOC44IDE2LTAuNSAyNCAxOC42IDI0LjMgMzIgMC4xIDMuOSA1LjUgNC41IDYuNiAwLjkgMi43LTguNCAzLjktMTcuMiA2LjItMjUuOCAyLjItOC4yIDYtMjAuMiAxNi0yMS4yIDExLjgtMS4yIDE5LjMgOC4xIDIxLjIgMTguNiAxLjcgOS43LTAuMiAxOS45LTEuNSAyOS40IC0wLjYgNC4zIDYuMiA0LjIgNi44IDAgMS4xLTguNiAyLjUtMTcuNCAxLjgtMjYuMSAwLjMgMCAwLjktMC4zIDEuOC0wLjkgMS4xLTAuMyAyLjMtMC41IDMuNC0wLjkgMS45LTAuNSAzLjgtMS4xIDUuNi0xLjggMi44LTEuMSA1LjUtMi41IDcuOS00LjQgNS44LTQuNSA5LjQtMTEuNCAxMi45LTE3LjYgMi4yLTMuOC0zLjYtNy4yLTUuOC0zLjQgLTMuOCA2LjYtNy40IDEzLjctMTQuMyAxNy42IC0yLjggMS41LTguNCAyLjItMTIuNiAzLjggLTAuMS0wLjYtMC4zLTEuMi0wLjQtMS43IC0zLjEtMTEuOS0xMy41LTE5LTI1LjYtMTkuNiAtMTcuOC0wLjctMjIuOSAxOS43LTI2LjMgMzYuNyAtNC4xLTExLjEtMTIuMy0yMC45LTI0LjMtMjIuMyAtOC40LTAuOS0xNS44IDEuNS0yMC42IDguNiAtMS42IDIuNC0yLjcgNS4xLTMuNyA3LjggLTMtOC05LjEtMTQuMi0xOC45LTE1LjIgLTEyLjQtMS4zLTE5LjMgOC4yLTIyLjIgMTguOSAtNy4zLTE1LjYtMTktMjgtMzguOC0yNS4yIC0xMC4yIDEuNC0xNC44IDcuOC0xNi44IDE1LjggLTUtMTcuOC0xNC4xLTM0LjItMzMuNy0zMC45IC0xNy4yIDIuOS0yNC40IDEzLjctMjYuOCAyNy40IC0xMy44LTQuNC0yMy45LTE0LjUtMzQuNy0yMy45IC0zLjMtMi44LTggMS45LTQuOCA0LjggMTEuOSAxMC40IDIzLjEgMjEuNCAzOC42IDI2IC0wLjkgMTIuMSAxIDI1LjMgMi43IDM2LjcgLTE3LjQgMS40LTM0LjcgMy4yLTUyIDUuMkMxMTcuNSA0MTMgMTE3LjUgNDE5LjcgMTIxLjggNDE5LjJ6TTE3My45IDMxMS45Yy0wLjEgMS41IDAuMSAzIDAuNyA0LjYgMi4zIDYuNiA5IDcuOCAxNS4xIDcuOCA4LjUgMC4xIDE1LTUuNiAxNC40LTE0LjMgLTAuNS03LjMtNS0xNS0xMS4zLTE4LjcgLTguMy00LjgtMTUuNyAxLjQtMTkgOSAtMS4xIDIuNC0xLjkgNS0yLjUgNy42QzE3MC42IDMxMCAxNzIuMSAzMTEuNSAxNzMuOSAzMTEuOXpNMTgxLjQgMzAwYzAuMy0wLjUgMC43LTEuMSAxLjItMS42IDAuNy0wLjkgMS44LTEuNiAyLjUtMS45IDAuOS0wLjMgMS43LTAuMyAyLjMtMC4yIDQuMiAwLjkgNy42IDUuOCA5IDEwLjEgMC43IDIuMiAxLjEgNC43IDAuNyA2LjUgLTAuNCAyLTEuMyAzLjMtMy40IDQgLTMuMSAxLjEtOCAxLjEtMTAuOS0wLjQgLTQuNC0yLjMtMS43LTguMiAxLjMtMTAuM0MxODcuNSAzMDMuOCAxODQuNiAyOTguNSAxODEuNCAzMDB6TTI0NS45IDMzOGM2LjQgNC43IDE4LjIgMC4zIDIyLjQtNS42IDMuOS01LjYgMC4zLTEyLjctNC45LTE1LjggLTQuMi0yLjUtOC44LTIuMS0xMi45LTAuMiAtMC43LTAuMy0xLjUtMC4zLTIuMy0wLjUgLTEuMi0wLjEtMi4zIDAuNy0yLjkgMS43QzI0MS4xIDMyMy45IDIzOSAzMzMgMjQ1LjkgMzM4ek0yNDguNSAzMjYuNWMwLjUtMC41IDAuOS0xLjEgMS41LTEuNSAwLjYgMC41IDEuMyAxIDEuOSAxLjQgMy4yIDEuOSA2LTEuOSA0LjYtNC42IDAuOSAwIDEuOSAwLjEgMi45IDAuNSAyLjEgMC43IDQuNSAzLjcgMy42IDYgLTEuNyA0LjEtOS4xIDUuNi0xMi45IDQuNEMyNDcuNSAzMzEuOCAyNDcuNiAzMjkuMiAyNDguNSAzMjYuNXpNMjk1LjEgMzQwLjZjMS41IDMgNC4yIDUuOCA3LjQgNi42IDUuNCAxLjUgMTAuMy0yLjggMTMuMS03IDIuOS00LjQgNC4yLTEwLjMgMi0xNS4yIC0zLjEtNi44LTEyLjMtNS40LTE3LjktMy42IC0yLjEgMC43LTIuNyAyLjctMi4yIDQuM0MyOTMuNyAzMzAuMiAyOTIuNCAzMzUuMSAyOTUuMSAzNDAuNnpNMzAzIDMyOS44YzAuNy0wLjggMS0xLjcgMC45LTIuNSAxLjYtMC40IDMuMy0wLjcgNS0wLjYgMC42IDAgMS40IDAuMyAxLjcgMC41IDAuNyAwLjMgMC43IDAuNCAwLjkgMC43IDAuNSAwLjkgMC42IDEuNSAwLjUgMy4xIC0wLjEgMC45LTAuNyAzLTEuMyA0LjIgLTEuMyAyLjgtMy40IDUuMi01LjggNS43IC0wLjQgMC4xLTEuMy0wLjEtMi4yLTAuOUMyOTkuMyAzMzYuNSAyOTkuOSAzMzMuMSAzMDMgMzI5Ljh6TTM2MC4xIDM0My44YzUuNS0yLjUgOC40LTguNiA2LjgtMTQuNSAtMS42LTUuOC03LjItNy43LTEyLjUtNyAtMC43LTAuNy0xLjQtMS4zLTIuMy0xLjkgLTEuNi0wLjktMy42LTAuMy00LjYgMS4yIC0zIDQuOC01IDExLjEtMy4xIDE2LjdDMzQ2LjUgMzQ0LjkgMzU0LjQgMzQ2LjUgMzYwLjEgMzQzLjh6TTM1MS40IDMyOS4xYzAuMiAwLjMgMC40IDAuNSAwLjYgMC43IDEuOCAyLjEgNC4zIDAuOSA1LjMtMC45IDEuNSAwLjEgMi44IDAuOCAzLjQgMi43IDAuNyAyLjctMS41IDUuNi00IDYuMkMzNDkuNyAzMzkuOCAzNDkuOCAzMzMuOSAzNTEuNCAzMjkuMXpNNDExLjIgMzM0LjRjNC4zIDEuOCA5LTEuNSAxMS45LTQuNCAzLjQtMy41IDYtOCA3LjQtMTIuNyAxLjMtNC4yIDEuMy05LTIuNS0xMS44IC0zLjctMi42LTktMC43LTEzLjEgMS4zIC0yLTAuNy00LjEtMC44LTYuMS0wLjEgLTQuNiAxLjctNS41IDYuNy01LjUgMTEuMUM0MDMuMiAzMjMuOSA0MDUgMzMxLjggNDExLjIgMzM0LjR6TTQyNC4zIDMxMS4zTDQyNC4zIDMxMS4zIDQyNC4zIDMxMS4zYy0wLjEgMC0wLjEtMC4xLTAuMS0wLjFDNDI0LjIgMzExLjIgNDI0LjMgMzExLjIgNDI0LjMgMzExLjN6TTQxMC44IDMxMy4yTDQxMC44IDMxMy4yIDQxMC44IDMxMy4yYzAuOSAxLjMgMi41IDIgNC4yIDEuMSAwLjcgMC40IDEuNCAwLjkgMi4xIDEuMyAyLjkgMS45IDUuOC0xLjUgNC44LTQuMiAwLjEtMC4xIDAuMy0wLjEgMC41LTAuMSAwLjItMC4xIDAuMy0wLjEgMC4zLTAuMSAwIDAgMC4xIDAgMC4xIDAgMC4zIDAgMC42LTAuMSAwLjkgMCAwIDAgMC4zIDAuMSAwLjUgMC4xIDAgMCAwLjEgMC4xIDAuMSAwbDAgMCAwIDAgMCAwYzAuMSAwLjEgMC4xIDAuMyAwLjEgMC41IDAgMC4xIDAgMC4xIDAgMC4xIDAgMC4xIDAgMC4xIDAgMC4zIDAgMC40IDAgMC44LTAuMSAxLjJsMCAwYy0wLjEgMC4zLTAuMSAwLjYtMC4yIDAuOSAtMC42IDIuNi0xIDMuNC0yLjIgNS42IC0wLjUgMS0xLjEgMS45LTEuNyAyLjkgLTAuNyAwLjktMC44IDEuMS0xLjkgMi4zIC0wLjMgMC40LTAuNyAwLjctMS4xIDEuMSAtMC4xIDAuMS0wLjcgMC41LTAuOCAwLjcgLTAuMyAwLjItMC42IDAuNS0wLjkgMC42IC0wLjIgMC4xLTAuNCAwLjItMC42IDAuMyAtMC4xIDAtMC4xIDAuMS0wLjEgMC4xbDAgMGMtMC4zIDAuMS0wLjUgMC4xLTAuNyAwLjIgLTAuMSAwLTAuMyAwLTAuNCAwIC0wLjEgMC0wLjMtMC4xLTAuNS0wLjEgMC4xIDAtMC43LTAuNS0wLjMtMC4xIC0wLjEtMC4xLTAuMy0wLjMtMC41LTAuNSAtMC4xLTAuMS0wLjEtMC4xLTAuMS0wLjEgLTAuMy0wLjQtMC42LTAuOS0wLjgtMS40IC0wLjMtMC43LTAuOS0yLjUtMS4yLTMuOSAtMC40LTEuOC0wLjUtMy42LTAuNS01LjVDNDA5LjkgMzE1LjMgNDEwLjMgMzEzLjggNDEwLjggMzEzLjJ6Ii8+PHBhdGggZmlsbD0iIzdGODE4NCIgZD0iTTM5Ni42IDUxNi41YzMuMi01LjktNS44LTExLjEtOS01LjIgLTcuMyAxMy43LTE5LjktMC45LTE5LjktMTEuMiAwLTQuMSAzLTguOCA1LTEyLjIgMS4yLTIuMSAyLjctNCA0LjQtNS42IDEuMS0xIDAuNi0wLjIgMS41IDEuNyAyLjkgNiAxMS45IDAuNyA5LTUuMiAtNy45LTE2LTIwLjktMi45LTI2LjkgOS41IC00LTExLTEzLjUtMTkuMS0yOC45LTE1LjUgLTYuNSAxLjUtMy44IDExLjUgMi43IDEwIDI1LjItNS44IDIzLjYgNDMuMiAxLjMgMzMuMyAtNi0yLjctMTEuMyA2LjItNS4yIDkgMTUuOCA3IDI2LTAuNSAzMC4yLTEyQzM2OC4zIDUyNy4yIDM4Ni45IDUzNC44IDM5Ni42IDUxNi41ek00NDggNDc2LjJjLTMuOCA5LjctOC4zIDE5LTEzLjQgMjcuOSAtNy44LTgtMTIuMS0xOC44LTE3LTI4LjcgLTIuOS02LTExLjktMC43LTkgNS4yIDUuNyAxMS41IDEwLjcgMjQgMjAuNCAzMi42IC0yLjEgMy40LTQuMyA2LjgtNi42IDEwLjEgLTIgMi45LTEwLjYgMTYuMi0xNS42IDE4LjkgLTAuOS0xLjctMi42LTIuOS00LjYtMi45IC0wLjkgMC0xLjkgMC0yLjggMCAtNCAwLTYuNCA0LjQtNC41IDcuOCAxNy4yIDMxLjUgNTkuNS01OS42IDYyLjktNjguMkM0NjAuNCA0NzIuOCA0NTAuNCA0NzAuMSA0NDggNDc2LjJ6TTU5LjMgNDg3Yy03LjEtOC0yMC0xMy4zLTMxLjgtMTQuNSAtMS4xLTAuNy0yLjMtMS0zLjktMC43IC0wLjUgMC4xLTEgMC4yLTEuNSAwLjQgLTEuNyAwLTMuMyAwLjEtNC44IDAuMyAtMy44IDAuNS01LjQgNC4yLTQuOCA3LjEgLTYuMiA5LjMtNi42IDI0LjMtMi40IDMzLjIgNy41IDE1LjggMjkuNyAxNC4yIDQyLjYgNy42QzY2IDUxMy42IDY5LjEgNDk4LjEgNTkuMyA0ODd6TTUyLjQgNTA3LjRjLTUuOCA3LjItMTggOC45LTI2LjMgNi4zIC02LjMtMi04LjctOC4yLTguOC0xNC4xIC0wLjEtNC45IDEuNy0xMy40IDYuNC0xNi42QzM4LjIgNDg0LjYgNjMuNiA0OTMuNSA1Mi40IDUwNy40ek0yNTIuMSA1MjUuMmM2LjYtMC41IDYuNy0xMC45IDAtMTAuNCAtOC45IDAuNi0xOS45IDAuMS0yNS4xLTguNCAtNS44LTkuNSAxLTI1LjUgMTIuOS0yMy41IDYuNiAxLjEgOS40LTkgMi43LTEwIC0xNi40LTIuNi0yNy44IDkuNi0yNy45IDI0LjkgLTAuMyAwLjEtMC42IDAuMy0wLjkgMC41IC0xLjkgMS40LTMuOCAyLjgtNS42IDQuNCAwLjQtNy40IDEuMi0xNC45IDEuOC0yMi40IDAuNS02LjctOS45LTYuNi0xMC40IDAgLTAuNCA1LjItMy42IDEwLTcuNiAxMy41IC0zLjktMTMuNS0yMy4xLTI3LjYtMzUuNS0xOS41IC01LjYgMy42LTAuNCAxMi42IDUuMiA5IDcuMS00LjYgMTkuNyA4LjMgMjAuNiAxNS4xIDEuNiAxMy4xLTE0LjQgMTguNi0yNC43IDE3IC02LjYtMC45LTkuNCA5LTIuNyAxMCAxNS41IDIuMyAzMi40LTQuMiAzNi44LTE5IDAuNS0wLjEgMC45LTAuMyAxLjQtMC41IDEuNy0wLjkgMy4yLTIuMSA0LjgtMy4zIC0wLjMgNS0wLjMgMTAgMCAxNC45IDAuMyA0LjggNy4yIDcuNiA5LjcgMi42IDIuMS00LjUgNS40LTggOS4yLTExLjFDMjIyLjUgNTIyLjMgMjM4LjIgNTI2LjEgMjUyLjEgNTI1LjJ6TTEzOC45IDUwOGMtMC4xLTIuOS0yLjMtNS4xLTUuMi01LjIgLTIuMy0wLjEtNC42LTAuMS02LjktMC4xIC0wLjgtOCAwLjktMTYuMSAxLjEtMjQgMC4xLTMtMi40LTUtNS4yLTUuMiAtMTAuNS0xLTE5LjktNC4zLTI4LjggMS43IC0yLjEgMC40LTQgMi4xLTQgNC45IDAgOC4yIDAgMTYuNC0xIDI0LjYgLTIuOSAwLjEtNiAwLjEtOC45IDAgLTMuNi0wLjEtNS42IDMuNC01IDYuNiAxLjIgNi40IDEuMSAxMyAxLjkgMTkuNCAwLjggNi42IDExLjIgNi42IDEwLjQgMCAtMC42LTUuMi0wLjktMTAuNC0xLjQtMTUuNiAxNC4zLTAuMSAyOC42LTIgNDMtMi4xIDAuNCA0LjQgMC43IDkuMS0xLjMgMTIuNyAtMy4yIDUuOCA1LjcgMTEuMSA5IDUuMkMxNDAuNSA1MjQgMTM5LjEgNTE1LjggMTM4LjkgNTA4ek0xMTYuNSA1MDMuMmMtNS44IDAuMy0xMS41IDAuOC0xNy4yIDEuMSAwLjctNi45IDAuOS0xMy45IDEtMjAuOCA0LjgtMi45IDExLjItMS41IDE3LTAuNEMxMTYuOSA0ODkuOCAxMTYuMSA0OTYuNCAxMTYuNSA1MDMuMnpNMzAyIDUyMy40YzIuMyAzLjggOS42IDIuOCA5LjctMi43IDAuMS0zLjUgMC4yLTcuMSAwLjMtMTAuNyAwLjctMS41IDAuOS0zLjQgMC4xLTUgMC4xLTEwLjItMS0yMC4yLTcuOC0yOC41IC05LjItMTEuMi0yNS4zLTUuMS0zMS4yIDUuOCAtMy4yIDUuOSA1LjggMTEuMSA5IDUuMiA1LjItOS43IDE0LjctNy41IDE4LjEgMi4zIDEuMSAzLjEgMS42IDYuNCAxLjggOS43IC0xMS42LTMuOS0yNS45LTYuMi0zMC45IDcuNiAtMi40IDYuNyAzLjIgMTMuNCA4LjMgMTYuOEMyODYuNCA1MjguNyAyOTQuNiA1MjUuNiAzMDIgNTIzLjR6TTI4My4xIDUwNy43YzQuNC0zLjIgMTIuNiAwIDE4LjcgMi41IC0wLjEgMC45LTAuMSAxLjctMC4xIDIuNWgtMC4xYy00LjYgMS4yLTkgMy4yLTEzLjkgMy4yQzI4My40IDUxNi4xIDI3OC45IDUxMC44IDI4My4xIDUwNy43ek00ODIuNiA0NzUuMmMtMS40LTUuMy0xMC40LTQuOS0xMC4yIDEuMyAwLjQgMTMgMC4xIDI2LjEtMC42IDM5IC0wLjYgMTEuMy0yLjEgMjIuMi0wLjUgMzMuNSAwLjkgNi42IDEwLjkgMy44IDEwLTIuNyAtMS03LjItMC41LTE0LjUgMC4xLTIxLjggMTAuMSAyLjQgMjAuNyAyLjggMjgtNi4yIDYuNy04LjMgNy42LTIwLjYgMy40LTMwLjFDNTA4IDQ3Ny41IDQ5MyA0NzEuNCA0ODIuNiA0NzUuMnpNNTAyLjEgNTEwLjhjLTQuMiA3LjItMTMuMiA1LTE5LjggMy4yIDAuNS04LjMgMC43LTE2LjYgMC43LTI1IDIuOS05LjUgMTYuMS0yLjcgMjAgMy4yQzUwNi44IDQ5Ny42IDUwNS4xIDUwNS41IDUwMi4xIDUxMC44ek01ODYuNCA1MTQuNWMtOS42IDQuNi05LjgtNi44LTEwLjItMTMuOCAtMC41LTguMyAwLjQtMTYuOC0wLjYtMjUuMSAtMC43LTYuNi0xMS4xLTYuNi0xMC40IDAgMC44IDYuNyAwLjIgMTguNiAxLjQgMjkuMiAtMC4zIDAuMS0wLjUgMC4yLTAuNyAwLjMgLTUuNiAzLjYtMTcuMiAxMy45LTI0LjQgMTAuMSAtNi0zLjMtNC43LTE0LjYtNC4xLTIwIDAuNy03IDEuNS0xMy41LTAuNC0yMC4zIC0xLjgtNi40LTExLjktMy43LTEwIDIuNyA0LjMgMTQuOS03LjYgMzcuNSAxMC41IDQ3LjIgMTAuMyA1LjYgMjIuNi0zLjMgMzEuNC05LjEgMy4yIDkuMSA5LjUgMTQuMiAyMi43IDcuOEM1OTcuNyA1MjAuNSA1OTIuNCA1MTEuNiA1ODYuNCA1MTQuNXoiLz48cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNMTE5LjUgNDE4LjJjMTcuNi0yLjEgMzUuMi0zLjkgNTIuOS01LjMgMC4xIDAuNyAwLjIgMS4zIDAuMyAxLjkgMC41IDQuMiA3LjMgNC4zIDYuOCAwIC0wLjEtMC44LTAuMi0xLjYtMC4zLTIuNCAzNy42LTIuOSA3NS4zLTQuNCAxMTMtNC42IDYyLTAuNSAxMjMuNiA2LjEgMTg1LjQgMTAuNCA0LjQgMC4zIDQuMy02LjQgMC02LjggLTYxLjctNC40LTEyMy4zLTEwLjgtMTg1LjQtMTAuNCAtMzggMC4yLTc2LjIgMS43LTExNC4xIDQuNyAtMy45LTIzLjctOS43LTU3LjQgMTguOC02My42IDI2LjEtNS42IDI5LjggMzguNiAzMi41IDU1LjEgMC42IDMuOCA2LjYgMi44IDYuNi0wLjkgLTAuMS0xMi42LTUuMi0zNC43IDExLjEtMzkgMjEuNS01LjggMzIgMTcuMSAzNy4yIDMzLjUgMS4xIDMuNiA2LjggMyA2LjYtMC45IC0wLjUtMTAuNyAyLjUtMjYuMyAxNi4xLTI2LjMgMTMuNC0wLjEgMTYuMiAxNi4yIDE0LjkgMjYuMyAtMC41IDQgNS40IDQuMiA2LjYgMC45IDQuMi0xMC45IDMuOS0yOC4zIDE5LTI4LjggMTYtMC41IDI0IDE4LjYgMjQuMyAzMiAwLjEgMy45IDUuNSA0LjUgNi42IDAuOSAyLjctOC40IDMuOS0xNy4yIDYuMi0yNS44IDIuMi04LjIgNi0yMC4yIDE2LTIxLjIgMTEuOC0xLjIgMTkuMyA4LjEgMjEuMiAxOC42IDEuNyA5LjctMC4yIDE5LjktMS41IDI5LjQgLTAuNiA0LjMgNi4yIDQuMiA2LjggMCAxLjEtOC42IDIuNS0xNy40IDEuOC0yNi4xIDAuMyAwIDAuOS0wLjMgMS44LTAuOSAxLjEtMC4zIDIuMy0wLjUgMy40LTAuOSAxLjktMC41IDMuOC0xLjEgNS42LTEuOCAyLjgtMS4xIDUuNS0yLjUgNy45LTQuNCA1LjgtNC41IDkuNC0xMS40IDEyLjktMTcuNiAyLjItMy44LTMuNi03LjItNS44LTMuNCAtMy44IDYuNi03LjQgMTMuNy0xNC4zIDE3LjYgLTIuOCAxLjUtOC40IDIuMi0xMi42IDMuOCAtMC4xLTAuNi0wLjMtMS4yLTAuNC0xLjcgLTMuMS0xMS45LTEzLjUtMTktMjUuNi0xOS42IC0xNy44LTAuNy0yMi45IDE5LjctMjYuMyAzNi43IC00LjEtMTEuMS0xMi4zLTIwLjktMjQuMy0yMi4zIC04LjQtMC45LTE1LjggMS41LTIwLjYgOC42IC0xLjYgMi40LTIuNyA1LjEtMy43IDcuOCAtMy04LTkuMS0xNC4yLTE4LjktMTUuMiAtMTIuNC0xLjMtMTkuMyA4LjItMjIuMiAxOC45IC03LjMtMTUuNi0xOS0yOC0zOC44LTI1LjIgLTEwLjIgMS40LTE0LjggNy44LTE2LjggMTUuOCAtNS0xNy44LTE0LjEtMzQuMi0zMy43LTMwLjkgLTE3LjIgMi45LTI0LjQgMTMuNy0yNi44IDI3LjQgLTEzLjgtNC40LTIzLjktMTQuNS0zNC43LTIzLjkgLTMuMy0yLjgtOCAxLjktNC44IDQuOCAxMS45IDEwLjQgMjMuMSAyMS40IDM4LjYgMjYgLTAuOSAxMi4xIDEgMjUuMyAyLjcgMzYuNyAtMTcuNCAxLjQtMzQuNyAzLjItNTIgNS4yQzExNS4yIDQxMiAxMTUuMiA0MTguNyAxMTkuNSA0MTguMnpNMTcxLjcgMzEwLjljLTAuMSAxLjUgMC4xIDMgMC43IDQuNiAyLjMgNi42IDkgNy44IDE1LjEgNy44IDguNSAwLjEgMTUtNS42IDE0LjQtMTQuMyAtMC41LTcuMy01LTE1LTExLjMtMTguNyAtOC4zLTQuOC0xNS43IDEuNC0xOSA5IC0xLjEgMi40LTEuOSA1LTIuNSA3LjZDMTY4LjMgMzA5IDE2OS45IDMxMC41IDE3MS43IDMxMC45ek0xNzkuMSAyOTljMC4zLTAuNSAwLjctMS4xIDEuMi0xLjYgMC43LTAuOSAxLjgtMS42IDIuNS0xLjkgMC45LTAuMyAxLjctMC4zIDIuMy0wLjIgNC4yIDAuOSA3LjYgNS44IDkgMTAuMSAwLjcgMi4yIDEuMSA0LjcgMC43IDYuNSAtMC40IDItMS4zIDMuMy0zLjQgNCAtMy4xIDEuMS04IDEuMS0xMC45LTAuNCAtNC40LTIuMy0xLjctOC4yIDEuMy0xMC4zQzE4NS4yIDMwMi44IDE4Mi40IDI5Ny41IDE3OS4xIDI5OXpNMjQzLjcgMzM3YzYuNCA0LjcgMTguMiAwLjMgMjIuNC01LjYgMy45LTUuNiAwLjMtMTIuNy00LjktMTUuOCAtNC4yLTIuNS04LjgtMi4xLTEyLjktMC4yIC0wLjctMC4zLTEuNS0wLjMtMi4zLTAuNSAtMS4yLTAuMS0yLjMgMC43LTIuOSAxLjdDMjM4LjggMzIyLjkgMjM2LjggMzMyIDI0My43IDMzN3pNMjQ2LjIgMzI1LjVjMC41LTAuNSAwLjktMS4xIDEuNS0xLjUgMC42IDAuNSAxLjMgMSAxLjkgMS40IDMuMiAxLjkgNi0xLjkgNC42LTQuNiAwLjkgMCAxLjkgMC4xIDIuOSAwLjUgMi4xIDAuNyA0LjUgMy43IDMuNiA2IC0xLjcgNC4xLTkuMSA1LjYtMTIuOSA0LjRDMjQ1LjIgMzMwLjggMjQ1LjQgMzI4LjIgMjQ2LjIgMzI1LjV6TTI5Mi45IDMzOS42YzEuNSAzIDQuMiA1LjggNy40IDYuNiA1LjQgMS41IDEwLjMtMi44IDEzLjEtNyAyLjktNC40IDQuMi0xMC4zIDItMTUuMiAtMy4xLTYuOC0xMi4zLTUuNC0xNy45LTMuNiAtMi4xIDAuNy0yLjcgMi43LTIuMiA0LjNDMjkxLjUgMzI5LjIgMjkwLjIgMzM0LjEgMjkyLjkgMzM5LjZ6TTMwMC44IDMyOC44YzAuNy0wLjggMS0xLjcgMC45LTIuNSAxLjYtMC40IDMuMy0wLjcgNS0wLjYgMC42IDAgMS40IDAuMyAxLjcgMC41IDAuNyAwLjMgMC43IDAuNCAwLjkgMC43IDAuNSAwLjkgMC42IDEuNSAwLjUgMy4xIC0wLjEgMC45LTAuNyAzLTEuMyA0LjIgLTEuMyAyLjgtMy40IDUuMi01LjggNS43IC0wLjQgMC4xLTEuMy0wLjEtMi4yLTAuOUMyOTcgMzM1LjUgMjk3LjcgMzMyLjEgMzAwLjggMzI4Ljh6TTM1Ny44IDM0Mi44YzUuNS0yLjUgOC40LTguNiA2LjgtMTQuNSAtMS42LTUuOC03LjItNy43LTEyLjUtNyAtMC43LTAuNy0xLjQtMS4zLTIuMy0xLjkgLTEuNi0wLjktMy42LTAuMy00LjYgMS4yIC0zIDQuOC01IDExLjEtMy4xIDE2LjdDMzQ0LjIgMzQzLjkgMzUyLjEgMzQ1LjUgMzU3LjggMzQyLjh6TTM0OS4xIDMyOC4xYzAuMiAwLjMgMC40IDAuNSAwLjYgMC43IDEuOCAyLjEgNC4zIDAuOSA1LjMtMC45IDEuNSAwLjEgMi44IDAuOCAzLjQgMi43IDAuNyAyLjctMS41IDUuNi00IDYuMkMzNDcuNCAzMzguOCAzNDcuNSAzMzIuOSAzNDkuMSAzMjguMXpNNDA4LjkgMzMzLjRjNC4zIDEuOCA5LTEuNSAxMS45LTQuNCAzLjQtMy41IDYtOCA3LjQtMTIuNyAxLjMtNC4yIDEuMy05LTIuNS0xMS44IC0zLjctMi42LTktMC43LTEzLjEgMS4zIC0yLTAuNy00LjEtMC44LTYuMS0wLjEgLTQuNiAxLjctNS41IDYuNy01LjUgMTEuMUM0MDEgMzIyLjkgNDAyLjggMzMwLjggNDA4LjkgMzMzLjR6TTQyMi4xIDMxMC4zTDQyMi4xIDMxMC4zIDQyMi4xIDMxMC4zYy0wLjEgMC0wLjEtMC4xLTAuMS0wLjFDNDIyIDMxMC4yIDQyMi4xIDMxMC4yIDQyMi4xIDMxMC4zek00MDguNiAzMTIuMkw0MDguNiAzMTIuMiA0MDguNiAzMTIuMmMwLjkgMS4zIDIuNSAyIDQuMiAxLjEgMC43IDAuNCAxLjQgMC45IDIuMSAxLjMgMi45IDEuOSA1LjgtMS41IDQuOC00LjIgMC4xLTAuMSAwLjMtMC4xIDAuNS0wLjEgMC4yLTAuMSAwLjMtMC4xIDAuMy0wLjEgMCAwIDAuMSAwIDAuMSAwIDAuMyAwIDAuNi0wLjEgMC45IDAgMCAwIDAuMyAwLjEgMC41IDAuMSAwIDAgMC4xIDAuMSAwLjEgMGwwIDAgMCAwIDAgMGMwLjEgMC4xIDAuMSAwLjMgMC4xIDAuNSAwIDAuMSAwIDAuMSAwIDAuMSAwIDAuMSAwIDAuMSAwIDAuMyAwIDAuNCAwIDAuOC0wLjEgMS4ybDAgMGMtMC4xIDAuMy0wLjEgMC42LTAuMiAwLjkgLTAuNiAyLjYtMSAzLjQtMi4yIDUuNiAtMC41IDEtMS4xIDEuOS0xLjcgMi45IC0wLjcgMC45LTAuOCAxLjEtMS45IDIuMyAtMC4zIDAuNC0wLjcgMC43LTEuMSAxLjEgLTAuMSAwLjEtMC43IDAuNS0wLjggMC43IC0wLjMgMC4yLTAuNiAwLjUtMC45IDAuNiAtMC4yIDAuMS0wLjQgMC4yLTAuNiAwLjMgLTAuMSAwLTAuMSAwLjEtMC4xIDAuMWwwIDBjLTAuMyAwLjEtMC41IDAuMS0wLjcgMC4yIC0wLjEgMC0wLjMgMC0wLjQgMHMtMC4zLTAuMS0wLjUtMC4xYzAuMSAwLTAuNy0wLjUtMC4zLTAuMSAtMC4xLTAuMS0wLjMtMC4zLTAuNS0wLjUgLTAuMS0wLjEtMC4xLTAuMS0wLjEtMC4xIC0wLjMtMC40LTAuNi0wLjktMC44LTEuNCAtMC4zLTAuNy0wLjktMi41LTEuMi0zLjkgLTAuNC0xLjgtMC41LTMuNi0wLjUtNS41QzQwNy43IDMxNC4zIDQwOCAzMTIuOCA0MDguNiAzMTIuMnoiLz48cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNMzk0LjQgNTE1LjVjMy4yLTUuOS01LjgtMTEuMS05LTUuMiAtNy4zIDEzLjctMTkuOS0wLjktMTkuOS0xMS4yIDAtNC4xIDMtOC44IDUtMTIuMiAxLjItMi4xIDIuNy00IDQuNC01LjYgMS4xLTEgMC42LTAuMiAxLjUgMS43IDIuOSA2IDExLjkgMC43IDktNS4yIC03LjktMTYtMjAuOS0yLjktMjYuOSA5LjUgLTQtMTEtMTMuNS0xOS4xLTI4LjktMTUuNSAtNi41IDEuNS0zLjggMTEuNSAyLjcgMTAgMjUuMi01LjggMjMuNiA0My4yIDEuMyAzMy4zIC02LTIuNy0xMS4zIDYuMi01LjIgOSAxNS44IDcgMjYtMC41IDMwLjItMTJDMzY2LjEgNTI2LjIgMzg0LjcgNTMzLjggMzk0LjQgNTE1LjV6TTQ0NS43IDQ3NS4yYy0zLjggOS43LTguMyAxOS0xMy40IDI3LjkgLTcuOC04LTEyLjEtMTguOC0xNy0yOC43IC0yLjktNi0xMS45LTAuNy05IDUuMiA1LjcgMTEuNSAxMC43IDI0IDIwLjQgMzIuNiAtMi4xIDMuNC00LjMgNi44LTYuNiAxMC4xIC0yIDIuOS0xMC42IDE2LjItMTUuNiAxOC45IC0wLjktMS43LTIuNi0yLjktNC42LTIuOSAtMC45IDAtMS45IDAtMi44IDAgLTQgMC02LjQgNC40LTQuNSA3LjggMTcuMiAzMS41IDU5LjUtNTkuNiA2Mi45LTY4LjJDNDU4LjIgNDcxLjggNDQ4LjEgNDY5LjEgNDQ1LjcgNDc1LjJ6TTU3IDQ4NmMtNy4xLTgtMjAtMTMuMy0zMS44LTE0LjUgLTEuMS0wLjctMi4zLTEtMy45LTAuNyAtMC41IDAuMS0xIDAuMi0xLjUgMC40IC0xLjcgMC0zLjMgMC4xLTQuOCAwLjMgLTMuOCAwLjUtNS40IDQuMi00LjggNy4xIC02LjIgOS4zLTYuNiAyNC4zLTIuNCAzMy4yIDcuNSAxNS44IDI5LjcgMTQuMiA0Mi42IDcuNkM2My44IDUxMi42IDY2LjggNDk3LjEgNTcgNDg2ek01MC4yIDUwNi40Yy01LjggNy4yLTE4IDguOS0yNi4zIDYuMyAtNi4zLTItOC43LTguMi04LjgtMTQuMSAtMC4xLTQuOSAxLjctMTMuNCA2LjQtMTYuNkMzNS45IDQ4My42IDYxLjMgNDkyLjUgNTAuMiA1MDYuNHpNMjQ5LjkgNTI0LjJjNi42LTAuNSA2LjctMTAuOSAwLTEwLjQgLTguOSAwLjYtMTkuOSAwLjEtMjUuMS04LjQgLTUuOC05LjUgMS0yNS41IDEyLjktMjMuNSA2LjYgMS4xIDkuNC05IDIuNy0xMCAtMTYuNC0yLjYtMjcuOCA5LjYtMjcuOSAyNC45IC0wLjMgMC4xLTAuNiAwLjMtMC45IDAuNSAtMS45IDEuNC0zLjggMi44LTUuNiA0LjQgMC40LTcuNCAxLjItMTQuOSAxLjgtMjIuNCAwLjUtNi43LTkuOS02LjYtMTAuNCAwIC0wLjQgNS4yLTMuNiAxMC03LjYgMTMuNSAtMy45LTEzLjUtMjMuMS0yNy42LTM1LjUtMTkuNSAtNS42IDMuNi0wLjQgMTIuNiA1LjIgOSA3LjEtNC42IDE5LjcgOC4zIDIwLjYgMTUuMSAxLjYgMTMuMS0xNC40IDE4LjYtMjQuNyAxNyAtNi42LTAuOS05LjQgOS0yLjcgMTAgMTUuNSAyLjMgMzIuNC00LjIgMzYuOC0xOSAwLjUtMC4xIDAuOS0wLjMgMS40LTAuNSAxLjctMC45IDMuMi0yLjEgNC44LTMuMyAtMC4zIDUtMC4zIDEwIDAgMTQuOSAwLjMgNC44IDcuMiA3LjYgOS43IDIuNiAyLjEtNC41IDUuNC04IDkuMi0xMS4xQzIyMC4yIDUyMS4zIDIzNiA1MjUuMSAyNDkuOSA1MjQuMnpNMTM2LjYgNTA3Yy0wLjEtMi45LTIuMy01LjEtNS4yLTUuMiAtMi4zLTAuMS00LjYtMC4xLTYuOS0wLjEgLTAuOC04IDAuOS0xNi4xIDEuMS0yNCAwLjEtMy0yLjQtNS01LjItNS4yIC0xMC41LTEtMTkuOS00LjMtMjguOCAxLjcgLTIuMSAwLjQtNCAyLjEtNCA0LjkgMCA4LjIgMCAxNi40LTEgMjQuNiAtMi45IDAuMS02IDAuMS04LjkgMCAtMy42LTAuMS01LjYgMy40LTUgNi42IDEuMiA2LjQgMS4xIDEzIDEuOSAxOS40IDAuOCA2LjYgMTEuMiA2LjYgMTAuNCAwIC0wLjYtNS4yLTAuOS0xMC40LTEuNC0xNS42IDE0LjMtMC4xIDI4LjYtMiA0My0yLjEgMC40IDQuNCAwLjcgOS4xLTEuMyAxMi43IC0zLjIgNS44IDUuNyAxMS4xIDkgNS4yQzEzOC4yIDUyMyAxMzYuOCA1MTQuOCAxMzYuNiA1MDd6TTExNC4zIDUwMi4yYy01LjggMC4zLTExLjUgMC44LTE3LjIgMS4xIDAuNy02LjkgMC45LTEzLjkgMS0yMC44IDQuOC0yLjkgMTEuMi0xLjUgMTctMC40QzExNC43IDQ4OC44IDExMy45IDQ5NS40IDExNC4zIDUwMi4yek0yOTkuOCA1MjIuNGMyLjMgMy44IDkuNiAyLjggOS43LTIuNyAwLjEtMy41IDAuMi03LjEgMC4zLTEwLjcgMC43LTEuNSAwLjktMy40IDAuMS01IDAuMS0xMC4yLTEtMjAuMi03LjgtMjguNSAtOS4yLTExLjItMjUuMy01LjEtMzEuMiA1LjggLTMuMiA1LjkgNS44IDExLjEgOSA1LjIgNS4yLTkuNyAxNC43LTcuNSAxOC4xIDIuMyAxLjEgMy4xIDEuNiA2LjQgMS44IDkuNyAtMTEuNi0zLjktMjUuOS02LjItMzAuOSA3LjYgLTIuNCA2LjcgMy4yIDEzLjQgOC4zIDE2LjhDMjg0LjIgNTI3LjcgMjkyLjMgNTI0LjYgMjk5LjggNTIyLjR6TTI4MC44IDUwNi43YzQuNC0zLjIgMTIuNiAwIDE4LjcgMi41IC0wLjEgMC45LTAuMSAxLjctMC4xIDIuNWgtMC4xYy00LjYgMS4yLTkgMy4yLTEzLjkgMy4yQzI4MS4xIDUxNS4xIDI3Ni43IDUwOS44IDI4MC44IDUwNi43ek00ODAuNCA0NzQuMmMtMS40LTUuMy0xMC40LTQuOS0xMC4yIDEuMyAwLjQgMTMgMC4xIDI2LjEtMC42IDM5IC0wLjYgMTEuMy0yLjEgMjIuMi0wLjUgMzMuNSAwLjkgNi42IDEwLjkgMy44IDEwLTIuNyAtMS03LjItMC41LTE0LjUgMC4xLTIxLjggMTAuMSAyLjQgMjAuNyAyLjggMjgtNi4yIDYuNy04LjMgNy42LTIwLjYgMy40LTMwLjFDNTA1LjcgNDc2LjUgNDkwLjggNDcwLjQgNDgwLjQgNDc0LjJ6TTQ5OS44IDUwOS44Yy00LjIgNy4yLTEzLjIgNS0xOS44IDMuMiAwLjUtOC4zIDAuNy0xNi42IDAuNy0yNSAyLjktOS41IDE2LjEtMi43IDIwIDMuMkM1MDQuNSA0OTYuNiA1MDIuOCA1MDQuNSA0OTkuOCA1MDkuOHpNNTg0LjIgNTEzLjVjLTkuNiA0LjYtOS44LTYuOC0xMC4yLTEzLjggLTAuNS04LjMgMC40LTE2LjgtMC42LTI1LjEgLTAuNy02LjYtMTEuMS02LjYtMTAuNCAwIDAuOCA2LjcgMC4yIDE4LjYgMS40IDI5LjIgLTAuMyAwLjEtMC41IDAuMi0wLjcgMC4zIC01LjYgMy42LTE3LjIgMTMuOS0yNC40IDEwLjEgLTYtMy4zLTQuNy0xNC42LTQuMS0yMCAwLjctNyAxLjUtMTMuNS0wLjQtMjAuMyAtMS44LTYuNC0xMS45LTMuNy0xMCAyLjcgNC4zIDE0LjktNy42IDM3LjUgMTAuNSA0Ny4yIDEwLjMgNS42IDIyLjYtMy4zIDMxLjQtOS4xIDMuMiA5LjEgOS41IDE0LjIgMjIuNyA3LjhDNTk1LjQgNTE5LjUgNTkwLjEgNTEwLjYgNTg0LjIgNTEzLjV6Ii8+PC9zdmc+"
			alt="ojakhuri logo">
		<p class="logo-desc">Сеть ресторанов грузинской кухни</p>

		<nav class="rest-adresses">
			<div>
				<a href="<?php echo bloginfo( 'url' ) . '/moscow' ?>"><h3
						class="rest-name"><?php echo get_post_meta( $post->ID, 'header2', true ) ?></h3></a>
				<p class="rest-adress"><?php echo get_post_meta( $post->ID, 'text_area2', true ) ?></p>
				<!--<img src="" alt="Москва, Оджахури">-->
			</div>

			<div class="rest-adresses">
				<a href="<?php echo bloginfo( 'url' ) . '/korolev' ?>""><h3
					class="rest-name"><?php echo get_post_meta( $post->ID, 'header3', true ) ?></h3></a>
				<p class="rest-adress"><?php echo get_post_meta( $post->ID, 'text_area3', true ) ?></p>
				<!--<img src="" alt="Химки, Оджахури">-->
			</div>

			<div class="rest-adresses">
				<a href="<?php echo bloginfo( 'url' ) . '/khimki' ?>""><h3
					class="rest-name"><?php echo get_post_meta( $post->ID, 'header4', true ) ?></h3></a>
				<p class="rest-adress"><?php echo get_post_meta( $post->ID, 'text_area4', true ) ?></p>
				<!--<img src="" alt="Химки, Оджахури">-->
			</div>

			<div class="rest-adresses">
				<a href="<?php echo bloginfo( 'url' ) . '/kulinaria' ?>""><h3
					class="rest-name"><?php echo get_post_meta( $post->ID, 'header5', true ) ?></h3></a>
				<p class="rest-adress"><?php echo get_post_meta( $post->ID, 'text_area5', true ) ?></p>
				<!--<img src="" alt="кулинария">-->
			</div>
			<div class="rest-adresses">
				<a href="#" class="slow-ride"><h4
						class="rest-name"><?php echo get_post_meta( $post->ID, 'header6', true ) ?></h4></a>
			</div>
		</nav>

	</section>
</section>


<!--	about text-->
	<section class="container">
		<h1 class="about-h1"><?php echo get_post_meta( $post->ID, 'header1', true ) ?></h1>
		<div class="about-text">
			<p><?php echo get_post_meta( $post->ID, 'text_area1', true ) ?></p>
		</div>
	</section>

<!--End Query for page index.php / custom_pages -> Главная-->
<?php
}

} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>

<div class="news-bg row">
	<section class="news / container" id="news">
		<!--	if have main posts start standard wp loop-->
		<?php
		$args      = array( 'cat' => 11 );
		$the_query = new WP_Query( $args );

		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				?>
				<div class="row / news-item">

					<div class="news-img / col-md-5">
						<?php the_post_thumbnail( 'medium_large' ) ?>
					</div>

					<div class="text-block / col-md-7">
<!--						<p class="news-date">--><?php //the_date(); ?><!--</p>-->

						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1><?php the_title(); ?></h1>
						</a>

						<p class="news-text">
							<?php echo get_the_excerpt( '' ); ?>
							<a href="<?php the_permalink() ?>" class="excerpt">Далее...</a>
						</p>

					</div>
				</div>
				<?php
			endwhile;
		else :
			echo '<p>sorry no results</p>';
		endif;
		wp_reset_query(); ?>
	</section>
</div>


<? get_footer(); ?> <!--include footer.php-->