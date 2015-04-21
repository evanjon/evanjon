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

		<body class="bg-grey">


			<?php
			include("templates/header.php");
			?>

<!-- _____EDUCATION______ -->
					

				<section class="clearfix">
	
					<div class="sm-col-12 md-col-10 lg-col-8 mx-auto">

						<div class="sm-col-12 md-col md-col-5 lg-col lg-col-5 px2 m1 bg-white">

							<h2 class="h5">Education</h2>
								
							<p class="h1 mb0">University of Michigan</p>

							<a href="#" onclick="return getInfo1()"<?php
							if ($bgColor == "bg-neoncoral") {
								echo "class=\"h3 mb0 neoncoral\">Decision and Opinion in the Conceptual Age</a>";
								} else {
									if ($bgColor == "bg-orange") {
								echo "class=\"h3 mb0 orange\">Decision and Opinion in the Conceptual Age</a>";
								} else { 
									if ($bgColor == "bg-yellow") {
								echo "class=\"h3 mb0 yellow\">Decision and Opinion in the Conceptual Age</a>";
								} else { 
									if ($bgColor == "bg-aquateal") {
								echo "class=\"h3 mb0 aquateal\">Decision and Opinion in the Conceptual Age</a>";
								} else { 
									if ($bgColor == "bg-green") {
								echo "class=\"h3 mb0 green\">Decision and Opinion in the Conceptual Age</a>";
								} else { 
									if ($bgColor == "bg-dkblue") {
								echo "class=\"h3 mb0 dkblue\">Decision and Opinion in the Conceptual Age</a>";
								} else { 
									if ($bgColor == "bg-purp") {
								echo "class=\"h3 mb0 purp\">Decision and Opinion in the Conceptual Age</a>";
								}}}}}}}
							?>
							<a href="#" onclick="return getInfo2()"<?php
							if ($bgColor == "bg-neoncoral") {
								echo "class=\"h3 mb0 neoncoral\">Capstone Thesis</a>";
								} else {
									if ($bgColor == "bg-orange") {
								echo "class=\"h3 mb0 orange\">Capstone Thesis</a>";
								} else { 
									if ($bgColor == "bg-yellow") {
								echo "class=\"h3 mb0 yellow\">Capstone Thesis</a>";
								} else { 
									if ($bgColor == "bg-aquateal") {
								echo "class=\"h3 mb0 aquateal\">Capstone Thesis</a>";
								} else { 
									if ($bgColor == "bg-green") {
								echo "class=\"h3 mb0 green\">Capstone Thesis</a>";
								} else { 
									if ($bgColor == "bg-dkblue") {
								echo "class=\"h3 mb0 dkblue\">Capstone Thesis</a>";
								} else { 
									if ($bgColor == "bg-purp") {
								echo "class=\"h3 mb0 purp\">Capstone Thesis</a>";
								}}}}}}}
							?>	

							<a href="#" onclick="return hideList()"<?php
							if ($bgColor == "bg-neoncoral") {
								echo "class=\"h3 mb0 neoncoral block\">Curriculum</a>";
								} else {
									if ($bgColor == "bg-orange") {
								echo "class=\"h3 mb0 orange block\">Curriculum</a>";
								} else { 
									if ($bgColor == "bg-yellow") {
								echo "class=\"h3 mb0 yellow block\">Curriculum</a>";
								} else { 
									if ($bgColor == "bg-aquateal") {
								echo "class=\"h3 mb0 aquateal block\">Curriculum</a>";
								} else { 
									if ($bgColor == "bg-green") {
								echo "class=\"h3 mb0 green block\">Curriculum</a>";
								} else { 
									if ($bgColor == "bg-dkblue") {
								echo "class=\"h3 mb0 dkblue block\">Curriculum</a>";
								} else { 
									if ($bgColor == "bg-purp") {
								echo "class=\"h3 mb0 purp block\">Curriculum</a>";
								}}}}}}}
							?>	
								<ul class="list-reset px2" id="hiddenList">
									<li><a class="block mb0 h4" href="#" onclick="return getInfo3()">Needs Assessment and Usability Evaluation</a></li>
									<li><a class="block mb0 h4" href="#" onclick="return getInfo4(), removeList()">Computer Mediated Communication</li>
									<li><a class="block mb0 h4" href="#" onclick="return getInfo5(), removeList()">Decision Processes</li>
									<li><a class="block mb0 h4" href="#" onclick="return getInfo6(), removeList()">Cultural Psychology</li>
									<li><a class="block mb0 h4" href="#" onclick="return getInfo7(), removeList()">Advanced Prose Fiction</li>	
								</ul>


						</div>

						<div class="sm-col-12 md-col md-col-6 lg-col lg-col-6">

							<div class="clearfix m1 bg-white">
								<div class="col-10 mx-auto py3">
									<p id="extraContent"></p>
								</div>
							</div>

							<div class="clearfix m1 bg-white">
								<div class="col-10 mx-auto py3">
									<p id="extraContent2"></p>
									<ul class="list-reset" id="moreContent"></ul>
								</div>
							</div>	

						</div>

						
					</div>
				</section>

<!-- _______EXPERIENCE______ -->

				<section class="clearfix">
	
					<div class="sm-col-12 md-col-10 lg-col-8 mx-auto">

						<div class="sm-col-12 md-col md-col-5 lg-col lg-col-5 px2 m1 bg-white">

							<h2 class="h5">Experience</h2>
								
							<a class="h1" href="http://www.changeofmind.io">Change of Mind</a>
								<p class="h4 px2 mb0">Co-founder, Project Manager, Chief Storyteller</p>

								<a class="h3 mb0 block" href="#" onclick="return hideList2()">Skills:</a>	
								<ul class="list-reset px2" id="hiddenList2">
									<li ><a class="block mb0 h4" href="#" onclick="return">Customer discovery</a></li>
									<li><a class="block mb0 h4" href="#" onclick="return">Paper prototyping</li>
									<li><a class="block mb0 h4" href="#" onclick="return">Project management</li>	
								</ul>

							<p class="h1 mb0">Researcher Assisstant</p>
								<p class="mb0 px2">Sept 2012-Sept 2014</p>
								<p class="px2">NCUR (2014)</p>

								<a class="h3 mb0 block" href="#" onclick="return hideList3()">Skills:</a>	
								<ul class="list-reset px2" id="hiddenList3">
									<li ><a class="block mb0 h4" href="#" onclick="return">Eye-tracking</a></li>
									<li><a class="block mb0 h4" href="#" onclick="return">Graphical Analysis</li>
								</ul>

							
						</div>

						<div class="sm-col-12 md-col md-col-6 lg-col lg-col-6">
							<div class="clearfix">
								<div class="col-10 mx-auto py4">
									<p id="extraContent3"></p>
								</div>
							</div>	
						</div>


					</div>
				</section>

<!-- ______ADDITIONAL SKILLS______ -->

			<section class="clearfix">
	
					<div class="sm-col-12 md-col-10 lg-col-8 mx-auto">

						<div class="sm-col-12 md-col md-col-5 lg-col lg-col-5 px2">

							<h2 class="h5">Addtional Skills</h2>
							<ul class="list-reset">
								<li class="h3"><a href="resume-deutsch.php">German</a></li>
								<li class="h3">Woodworking</li>
								<li class="h3">Ambidexterity</li>
								<li class="h3">Petosky Stone Hunting</li>
							</ul>
						</div>

						<div class="sm-col-12 md-col md-col-7 lg-col lg-col-7">
							<div class="clearfix">
								<div class="col-10 mx-auto py4">
									<p id="extraContent4"></p>
								</div>
							</div>	
						</div>

					</div>
			</section>

<!-- ______FOOTER________ -->

					
			<?php
			include("templates/footer.php");
			?>	
			
		</body>
	</html>