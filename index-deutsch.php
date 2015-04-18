<!DOCTYPE html>
	<html lang="de">
		<head>
			<meta charset="UTF-8">
			<title>EvanJonGennrich-Deutsch</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="style/basscss.min.css" type="text/css" rel="stylesheet">
			<link type="text/css" rel="stylesheet" href="style/style.css">

			<script type="text/javascript">
				function Greeting() {
					    if (new Date().getHours() < 12) {
					        document.getElementsByTagName("h1")[0].innerphp = "Guten Morgen. Ich heiße Evan Jon";
					    } else {
					    	if (new Date().getHours() < 19) {
					    		document.getElementsByTagName("h1")[0].innerphp = "Guten Tag. Ich heiße Evan Jon";
					    	} else {
					    		document.getElementsByTagName("h1")[0].innerphp = "Guten Abend. Ich heiße Evan Jon."
					    	}}}
			</script>

			<?php
  			$fName = basename(__FILE__);
  			?>			

		</head>

		<body onload="Greeting()">	
			<section class="right m2">
				<p><a href="index.php" class="Tetra3">English</a>
			</section>		

			<?php
			include("templates/header-deutsch.php");
			?>


			<section class="container">
				<div class="clearfix">

					<h2 class="center Tetra2 h3 mb3">In der 18 Monaten, die ich Deutsch gelernt habe, habe ich noch nicht auf Deutsch kreative Geschichten oder Gedichten geschrieben. Wenn Sie Englisch lesen können, lesen Sie bitte meine etwas von meinem Bestand.</h2>
					<div class="col-8 mx-auto">
						<ul class="inline-block">
							<li class="button box"><a href="snowbirds.php" class="Tetra3 dialogue">Snowbirds on Huron</a></li>
							<li class="button box"><a href="ekridaat.php" class="Tetra3 dialogue">Ekridaat</a></li>
							<li class="button box"><a href="onespidercrack.php" class="Tetra3 dialogue">One Spider-crack on the Stern</a></li>
							<li class="button box"><a href="sylvette.php" class="Tetra3 dialogue">Sylvette</a></li>
						</ul>
						<!--<h2 class="center Tetra2 h3 mb3">Ich schreibe auch über Stoff, dafür ich mich interessiert bin:</h2>-->


						<hr>

					</div>
					
				</div>
				</section>



					
			<section class="container">
				<div class="clearfix center">
					<h2 class="">Bitte schicken Sie mir einen <a href="mailto:ejgennrich@gmail.com" class="Tetra3">Email</a></h2>
					
				</div>
			</section>

			<?php
			include("templates/footer.php");
			?>	
			
		</body>
	</html>