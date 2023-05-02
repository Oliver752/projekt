
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
		<section class="map">
				<div class="map-holder">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25198.35985697838!2d144.979258257672!3d-37.86508725777717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6686626d1c9bf%3A0x24b207169447a3a5!2sClyde+St%2C+St+Kilda+VIC+3182!5e0!3m2!1sen!2sau!4v1405983906843"></iframe>
				</div>
			</section>
			
			<section class="contact-center">
				<div class="container">
					<div class="row">
						
					<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
							<h1>Have questions? <br>Maybe you want just to try our wines?<br></h1>
							<p class="lead">contact@winery.com
		<br>+80 984 349 492<br>
		<br>Best Winery<br>200 Provence-Alpes,&nbsp;France</p>
						</div><div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
							<div class="form-wrapper clearfix">
                                <form action="add.php" method="post">
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message:</label>
                                        <textarea id="message" name="message" rows="5" class="form-control" required></textarea>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
							</div>
						</div></div>
					
					
				</div>
			</section>
		</div>

        <?php
        include_once "parts/footer.php";
        ?>
    </body>
</html>
				