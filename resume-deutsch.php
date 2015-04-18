<!DOCTYPE html>
	<html lang="de">
		<head>
			<meta charset="UTF-8">
			<title>Resume-Deutsch</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!--<link href="http://d2v52k3cl9vedd.cloudfront.net/basscss/4.2.2/basscss.min.css" rel="stylesheet">-->
			<link type="text/css" href="style/basscss.min.css" rel="stylesheet">
			<link type="text/css" rel="stylesheet" href="style/style.css">
			<script type="text/javascript" src="javascript/resume-deutsch.js"></script>

			<?php
  			$fName = basename(__FILE__);
  			?> 
		</head>
		<body>

		<section class="right m2">
				<p><a href="resume.php" class="Tetra3">Englisch</a>
		</section>

		<?php
		include("templates/header-deutsch.php");
		?>


		<section class="container">
				<h2 class="Second-heading m0">Ausbildung</h2>
				<div class="clearfix resume-bord">
					<div class="col col-12">
						<div class="sm-col-10 lg-col lg-col-5 px1 mb1">
							
							<p class="h1 Tetra2 mt1">Universität Michigan</p>

							<p class="h3 pb0">Entscheidung und Meinung in <span id="switching"><a class="Tetra3 mb0" href="#" onclick="getInfo1()">der Ära des begriffliches Denkens</a></span></p>
							

							<a class="block" id="swiching2" href="#" onclick="getInfo2()"><span class="Tetra3">Evan Jons Bildungsinhalte</span></a>
							

							<a class="block" id="swiching3" href="#" onclick="getInfo3()"><span class="Tetra3">Evan Jon's Diplomarbeit</span></a>	

						</div>

						<div class="sm-col-12 lg-col lg-col-7">
							<div class="clearfix">
								<div class="col-10 mx-auto py4">
									<p id="extraContent"></p>
								</div>
							</div>	
						</div>

					</div>
				</div>
			</section>


			<section class="container">
				<h2 class="Second-heading mb0">Erfahrungen</h2>

				<div class="clearfix resume-bord">
					<div class="col col-12">
						<div class="sm-col-10 lg-col lg-col-5 lg-col-right px1">
							<p class="h1 mb0 full-width"><a class="Tetra3" href="http://www.changeofmind.io">Change of Mind</a></p>
							<p class="">"helping people engage with, embrace, and manage life's stressful moments"</p>
							<p class="h3">Co-founder, Project Manager</p>
							<hr>
						</div>

						<div class="lg-show lg-col lg-col-7">
							<div class="clearfix">
								<div class="col-10 mx-auto py4">
									<p id="extraContent2"></p>
								</div>
							</div>	
						</div>
					</div>

					<div class="col col-12">
						<div class="sm-col-10 lg-col lg-col-5 lg-col-right px1">
							<p class="h1 mb0 Tetra3">Assistant Researcher</p>
							<p class="mb0">Sept 2012-Sept 2014</p>
							<p class="h3">Eye-tracking technologist</p>
							<p class="m0">Graphical Analysist</p>
							<p class="mo">National Conference of Undergraduate Research 2014 (NCUR)</p>
						</div>

						<div class="lg-show lg-col lg-col-7">
							<div class="clearfix">
								<div class="col-10 mx-auto py4">
									<p id="extraContent3"></p>
								</div>
							</div>	
						</div>


					</div>
				</div>

			</section>

			<section class="container">
				<h2 class="Second-heading mb0">Andere Sachen</h2>

				<div class="clearfix resume-bord">
					<div class="col col-12">
						<div class="sm-col-10 lg-col lg-col-5 px1">
						<ul class="list-reset">
							<li><span class="h3">German</span> (Conversational Proficiency)</li>
							<li><span class="h3">Wood-craft</span> (Modern furniture design)</li>
							<li class="h3">Ambidexterity</li>
							<li class="h3">Petosky Stone Hunting</li>
						</ul>
						</div>
					</div>
				</div>
			</section>

			
			<?php
			include("templates/footer.php");
			?>			

			
		</body>
	</html>