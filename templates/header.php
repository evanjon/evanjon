<?php
date_default_timezone_set('America/Detroit');
// "G" means hour
$time = date("G");
// echo $time;

// random background color

$bgClass = array("bg-neoncoral", "bg-green", "bg-yellow", "bg-aquateal", "bg-orange", "bg-dkblue", "bg-purp");
$n = array_rand($bgClass);
$bgColor = $bgClass[$n];


echo "<section class=\"right m2\">";
	if ($fName == "index.php") {
		echo "<a href=\"index-deutsch.php\" class=\"fff\">Deutsch</a></section>";
		} else {
			if ($fName == "resume.php") {
				echo "<a href=\"resume-deutsch.php\" class=\"fff\">Deutsch</a></section>";
			} else {
				if ($fName == "index-deutsch.php") {
					echo "<a href=\"index.php\" class=\"fff\">English</a></section>";
				} else {
					if ($fName == "resume-deutsch.php") {
						echo "<a href=\"resume.php\" class=\"fff\">English</a></section>";
					}}}}



echo "<header class=\"header $bgColor clearfix\">
					<div class=\"sm-col-12 md-col-10 lg-col-8 mx-auto center\">
						
						<div class=\"half-width mx-auto py4\">
						<h1 class=\"fff\">";
						
						if ($fName == "index.php" && $time < "12"){
						        echo "Good morning. I'm Evan Jon";
						    		} else {
						    			if ($fName == "index.php" && $time < "19") {
						    				echo "Good afternoon. I'm Evan Jon";
						    			} else {
						    				if ($fName == "index.php" && $time >= "19") {
						    				echo "Good Evening. I'm Evan Jon.";
						    			} else {
						    				if ($fName == "resume.php"){
											echo "Evan Jon Gennrich</h1>
													<p class=\"fff\">Ann Arbor, MI</p>";
										}}}}
					
		
				echo "</div><nav class=\"nav\"><ul class=\"list-reset center\">";
					if ($fName == "index.php"){
						echo "<li class=\"button inline\"><a href=\"index.php\" class=\"current fff\">Home</a></li>";
						} else {
							echo "<li class=\"button inline\"><a href=\"index.php\" class=\"fff\">Home</a></li>";
						};

					if ($fName == "resume.php"){
						echo "<li class=\"button inline\"><a href=\"resume.php\" class=\"current fff\">Resume</a></li>";
						} else {
							echo "<li class=\"button inline\"><a href=\"resume.php\" class=\"fff\">Resume</a></li>";
						};
					
				echo "</ul>
				<hr>
					</nav></div>			
			</header>";

			?>