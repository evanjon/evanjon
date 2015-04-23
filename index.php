<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>EvanJonGennrich</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="http://d2v52k3cl9vedd.cloudfront.net/basscss/4.2.2/basscss.min.css" rel="stylesheet">
			<link type="text/css" href="css/basscss.min.css" rel="stylesheet">
			<link type="text/css" rel="stylesheet" href="css/style.css">


			
			<?php
  			$fName = basename(__FILE__);

  			?>


		</head>

		<body>	
			

			<?php
			include("templates/header.php");

			?>	

			
	
			
	

	<!-- ______Contact________		 -->
			<section class="clearfix bg-grey py4 center">
					<h3 class="fff">Feel free to get in <a class=
					<?php
					if ($bgColor == "bg-neoncoral") {
						echo "\"neoncoral \"";
						} else {
							if ($bgColor == "bg-orange") {
						echo "\"orange \"";
						} else { 
							if ($bgColor == "bg-yellow") {
						echo "\"yellow \"";
						} else { 
							if ($bgColor == "bg-aquateal") {
						echo "\"aquateal \"";
						} else { 
							if ($bgColor == "bg-green") {
						echo "\"green \"";
						} else { 
							if ($bgColor == "bg-dkblue") {
						echo "\"dkblue \"";
					} else { 
							if ($bgColor == "bg-purp") {
						echo "\"purp \"";
						}}}}}}}
						?>href=\"mailto:ejgennrich@gmail.com\">touch</a></h2> 

								
				</div>
			</section>

			<?php
			include("templates/footer.php");
			?>	
			
		</body>
	</html>