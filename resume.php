<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<title>EvanJon-Resume</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="http://d2v52k3cl9vedd.cloudfront.net/basscss/4.2.2/basscss.min.css" rel="stylesheet">
			<link href="css//basscss.min.css" type="text/css" rel="stylesheet">
			<link type="text/css" rel="stylesheet" href="css//style.css">
			<script type="text/javascript" src="javascript/resume.js"></script>

			<?php
  			$fName = basename(__FILE__);
  			?>

			
		</head>

		<body>
			<section class="right m2">
				<p><a href="resume-deutsch.php" class="Tetra3">German</a>
			</section>

			<?php
			include("templates/header.php");
			?>

			<section class="container">
				<h2 class="Second-heading m0">Education</h2>
				<div class="clearfix">
					
					<div class="col col-12">
						<div class="sm-col-10 lg-col lg-col-5  mb1">
							
							<p class="h1 Tetra3 mt1">University of Michigan</p>

							<p class="h3 pb0">Decision and Opinion in <span id="switching"><a class="Tetra3 mb0" href="#" onclick="getInfo1()">the Conceptual Age</a></span></p>
							

							<a class="block" id="swiching2" href="#" onclick="getInfo2()"><span class="Tetra3">Evan Jon's curriculum</span></a>
							

							<a class="block" id="swiching3" href="#" onclick="getInfo3()"><span class="Tetra3">Evan Jon's Thesis</span></a>	

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
				<h2 class="Second-heading m0">Experience</h2>
				<div class="clearfix ">

					<div class="col col-12">
						<div class="sm-col-10 lg-col lg-col-5 lg-col">
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
						<div class="sm-col-10 lg-col lg-col-5 lg-col px1">
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
				<h2 class="Second-heading mb0">Skills/Peculiarities</h2>

				<div class="clearfix">
					<div class="col col-12">
						<div class="sm-col-10 lg-col lg-col-5">
							<ul class="list-reset">
								<li class="h3"><a href="resume-deutshc.php">German</a></li>
								<li class="h3">Wood-craft (Modern furniture design)</li>
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