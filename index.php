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

			<section class="clearfix bg-grey py4">

				<div class="sm-col-12 md-col-10 lg-col-8 mx-auto">

					<div class="m2 sm-col-12 md-col-8 dk-grey">

					<h2 <?php
					if ($bgColor == "bg-neoncoral") {
						echo "class=\"h1 mt4 neoncoral\"";
						} else {
							if ($bgColor == "bg-orange") {
						echo "class=\"h1 mt4 orange \"";
						} else { 
							if ($bgColor == "bg-light-green") {
						echo "class=\"h1 mt4 light-green \"";
						} else { 
							if ($bgColor == "bg-blue") {
						echo "class=\"h1 mt4 myblue \"";
						} else { 
							if ($bgColor == "bg-green") {
						echo "class=\"h1 mt4 green \"";
						} else { 
							if ($bgColor == "bg-dkblue") {
						echo "class=\"h1 mt4 dkblue \"";
					} else { 
							if ($bgColor == "bg-light-blue") {
						echo "class=\"h1 mt4 light-blue \"";
						}}}}}}}
						?>>Millenials making waves.</h2>

					<p class="h3">We're harding-working, have been raised alongside technology, prioritize sustainability, and want to make the world a better place.</p>


	
			
	

	<!-- ______Contact________		 -->
		
					<p class="h4 mb4">Feel free to get in <a href="mailto:ejgennrich@gmail.com"
					<?php
					if ($bgColor == "bg-neoncoral") {
						echo "class=\"neoncoral h4 \"";
						} else {
							if ($bgColor == "bg-orange") {
						echo "class=\"orange h4\"";
						} else { 
							if ($bgColor == "bg-light-green") {
						echo "class=\"light-green h4\"";
						} else { 
							if ($bgColor == "bg-blue") {
						echo "class=\"myblue h4\"";
						} else { 
							if ($bgColor == "bg-green") {
						echo "class=\"green h4\"";
						} else { 
							if ($bgColor == "bg-dkblue") {
						echo "class=\"dkblue h4\"";
					} else { 
							if ($bgColor == "bg-light-blue") {
						echo "class=\"light-blue h4\"";
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