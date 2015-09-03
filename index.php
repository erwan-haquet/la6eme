<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
   		<meta http-equiv="X-UA-Compatible" content="IE=edge">
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="stylesheets/bootstrap.min.css" rel="stylesheet">
		<link href="stylesheets/style.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  		<script src="js/bootstrap.min.js"></script>
		<title>La rentrée en 6ème - Collège Jean-Monnet </title>
	</head>

	<body>

		<div class="container">
			<div class="row margin_bottom_25">
  				<div class="col-md-12">
  						<?php
							include('frame_php/header.php');
						?>
  				</div>
			</div>
			<div class="row margin_bottom_25">
 					<?php
						include('frame_php/nav.php');
					?>
			</div>
			<div class="row">
				<div class="col-md-7">
					<?php
						include('frame_php/caroussel.php');
					?>
				</div>
				<div class="col-md-5">
					<?php
						include('frame_php/FAQ.php');
					?>		
				</div>
			</div>
		</div>	
	
	</body>

</html>