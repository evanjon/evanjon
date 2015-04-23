<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>EvanJonGennrich</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="http://d2v52k3cl9vedd.cloudfront.net/basscss/4.2.2/basscss.min.css" rel="stylesheet">
			<link type="text/css" href="css/basscss.css" rel="stylesheet">

			<link type="text/css" rel="stylesheet" href="css/style.css">


			
			<?php
  			$fName = basename(__FILE__);

  			?>


		</head>

		<body>	
			

			<?php
			include("templates/header.php");

			?>	

<!-- ________AboutME_______		 -->

			<section class="clearfix bg-grey">

				<div class="sm-col-12 md-col-10 lg-col-8 mx-auto">

					<div class="m2 sm-col-12 md-col-8 dk-grey">

					<h2 <?php
					if ($bgColor == "bg-neoncoral") {
						echo "class=\"h1 neoncoral\"";
						} else {
							if ($bgColor == "bg-orange") {
						echo "class=\"h1 orange \"";
						} else { 
							if ($bgColor == "bg-yellow") {
						echo "class=\"h1 yellow \"";
						} else { 
							if ($bgColor == "bg-aquateal") {
						echo "class=\"h1 aquateal \"";
						} else { 
							if ($bgColor == "bg-green") {
						echo "class=\"h1 green \"";
						} else { 
							if ($bgColor == "bg-dkblue") {
						echo "class=\"h1 dkblue \"";
					} else { 
							if ($bgColor == "bg-purp") {
						echo "class=\"h1 purp \"";
						}}}}}}}
						?>>Millenials making waves.</h2>

					<p class="h3">We're harding-working, have been raised alongside technology, prioritize sustainability, and want to make the world a better place.</p>


	
			
	

	<!-- ______Contact________		 -->
		
					<p class="h4">Feel free to get in <a href="mailto:ejgennrich@gmail.com"
					<?php
					if ($bgColor == "bg-neoncoral") {
						echo "class=\"neoncoral h4 \"";
						} else {
							if ($bgColor == "bg-orange") {
						echo "class=\"orange h4\"";
						} else { 
							if ($bgColor == "bg-yellow") {
						echo "class=\"yellow h4\"";
						} else { 
							if ($bgColor == "bg-aquateal") {
						echo "class=\"aquateal h4\"";
						} else { 
							if ($bgColor == "bg-green") {
						echo "class=\"green h4\"";
						} else { 
							if ($bgColor == "bg-dkblue") {
						echo "class=\"dkblue h4\"";
					} else { 
							if ($bgColor == "bg-purp") {
						echo "class=\"purp h4\"";
						}}}}}}}
						?>>touch</a></p> 

								
					</div>
				</div>
			</section>

			<?php
			include("templates/footer.php");
			?>	
			
		</body>
	</html>