<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>EvanJonGennrich</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!--<link href="http://d2v52k3cl9vedd.cloudfront.net/basscss/4.2.2/basscss.min.css" rel="stylesheet">-->
			<link type="text/css" href="style/basscss.min.css" rel="stylesheet">
			<link type="text/css" rel="stylesheet" href="style/style.css">


			
			<?php
  			$fName = basename(__FILE__);
  			?>

		</head>

		<body onload="Greeting()">	
			<section class="right m2">
				<p><a href="index-deutsch.php" class="Tetra3">Deutsch</a>
			</section>	

			<?php
			include("templates/header-writing.php");
			?>	
			<section class="container">
				<div class="clearfix">

					<div class="col-8 mx-auto">
						<ul class="inline-block">
							<li class="button box"><a href="snowbirds.php" class="Tetra3 dialogue">Snowbirds on Huron</a></li>
							<li class="button box"><a href="ekridaat.php" class="Tetra3 dialogue">Ekridaat</a></li>
							<li class="button box"><a href="onespidercrack.php" class="Tetra3 dialogue">One Spider-crack on the Stern</a></li>
							<li class="button box"><a href="sylvette.php" class="Tetra3 dialogue">Sylvette</a></li>
						</ul>

						<hr>

					</div>
					
				</div>
				</section>

				<?php
				include("templates/footer.php");
				?>			

			
		</body>
	</html>
