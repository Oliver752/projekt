
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<?php
include_once "parts/header.php";
?>

    <body>
    	<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>

        <?php
        include_once "parts/navbar.php";
        ?>

		
		<div class="main-container">
			<header class="fullscreen-element no-pad centered-text">
				<div class="background-image-holder parallax-background overlay">
					<img class="background-image" alt="Background Image" src="img/main.jpg">
				</div>
				
				<div class="container align-vertical">
					<div class="row">
						<div class="col-md-7 col-sm-8" style="text-shadow: -1px -1px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;">
							
							<h1 class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</h1>
							<p class="lead text-white">Excepteur sint occaecat cupidatat sunt culpa officia.</p>
							<a target="_self" href="wines.php" class="btn btn-primary btn-white inner-link">Learn more</a>
							<a href="crud/reservation_form.php" class="btn btn-primary btn-filled btn-success inner-link" target="_self">Sign up for tasting</a>
						</div>
					</div>
				</div>
				
				
			</header>
		</div>

        <?php
        include_once "parts/footer.php";
        ?>
    </body>
</html>
				