<?php
date_default_timezone_set('America/Detroit');
// "G" means hour
$time = date("G");
// echo $time;

// random background color

$bgClass = array("bg-neoncoral", "bg-green", "bg-aquateal", "bg-orange");
$n = array_rand($bgClass);
$bgColor = $bgClass[$n];


	if ($fName == "index.php") {
		echo "<section class=\"right m2 h4\">";
		echo "<a href=\"index-deutsch.php\" class=\"fff\">Deutsch</a></section>";
		} else {
			if ($fName == "resume.php") {
				echo "<section class=\"right m2 h4\">";
				echo "<a href=\"resume-deutsch.php\" class=\"fff\">Deutsch</a></section>";
			} else {
				if ($fName == "index-deutsch.php") {
					echo "<section class=\"right m2 h4\">";
					echo "<a href=\"index.php\" class=\"fff\">English</a></section>";
				} else {
					if ($fName == "resume-deutsch.php") {
						echo "<section class=\"right m2 h4\">";
						echo "<a href=\"resume.php\" class=\"fff\">English</a></section>";
					}}}}



echo "<header class=\"header $bgColor clearfix\">
					<div class=\"sm-col-12 md-col-10 lg-col-8 mx-auto center\">
						
						<div class=\"half-width mx-auto py3\">
						<h1 class=\"fff h1\">";
						
						if ($fName == "index.php" && $time < "12"){
						        echo "Good morning. I'm Evan Jon.</h1>";
						    		} else {
						    			if ($fName == "index.php" && $time < "19") {
						    				echo "Good afternoon. I'm Evan Jon.</h1>";
						    			} else {
						    				if ($fName == "index.php" && $time >= "19") {
						    				echo "Good Evening. I'm Evan Jon.</h1>";
							    			} else {
							    				if ($fName == "resume.php" || $fName == "resume-deutsch.php"){
												echo "Evan Jon Gennrich</h1>
														<p class=\"fff\">Ann Arbor, MI</p>";
												} else {
													if ($fName == "index-deutsch.php" && $time < "12"){
											        echo "Guten Morgen. Ich heiße Evan Jon.</h1>";
									    		} else {
									    			if ($fName == "index-deutsch.php" && $time < "19") {
											    				echo "Guten Tag. Ich heiße Evan Jon.</h1>";
								    			} else {
								    				if ($fName == "index-deutsch.php" && $time >= "19") {
								    				echo "Guten Abend. Ich heiße Evan Jon.</h1>";
								    			} else {
								    				if ($fName=="portfolio.php") {
								    					echo "a writer of fiction.</h1>";
								    				} else {
								    					if ($fName == "ekridaat.php") {
								    						echo "EKRIDAAT</h1>";
								    					} else {
								    						if ($fName == "snowbirds.php") {
								    							echo "SNOWBIRDS ON HURON</h1>";
								    						} else {
								    							if ($fName == "onespidercrack.php") {
								    								echo "ONE SPIDER CRACK</h1>";
								    							} else {
								    								if ($fName == "sylvette.php") {
								    									echo "SYLVETTE</h1>";
								    								}
								    							}}}}}}}}}}}
					
		
				echo "</div><nav class=\"nav\"><ul class=\"list-reset center\">";
					
				if ($fName =="index.php" || $fName=="resume.php" || $fName=="portfolio.php" || $fName=="ekridaat.php" || $fName=="snowbirds.php" || $fName=="sylvette.php" || $fName=="onespidercrack.php") {
					if ($fName == "index.php"){
						echo "<li class=\"button inline\"><a href=\"index.php\" class=\"current h4 fff\">Home</a></li>";
						} else {
							echo "<li class=\"button inline\"><a href=\"index.php\" class=\"fff h4\">Home</a></li>";
						};

					if ($fName == "portfolio.php" || $fName=="ekridaat.php" || $fName=="snowbirds.php" || $fName=="sylvette.php" || $fName=="onespidercrack.php") {
						echo "<li class=\"button inline\"><a href=\"portfolio.php\" class=\"current h4 fff\">Portfolio</a></li>";
					} else {
						echo "<li class=\"button inline\"><a href=\"portfolio.php\" class=\"fff h4\">Portfolio</a></li>";
					};

					if ($fName == "resume.php"){
						echo "<li class=\"button inline\"><a href=\"resume.php\" class=\"current fff h4\">Resume</a></li>";
						} else {
							echo "<li class=\"button inline\"><a href=\"resume.php\" class=\"fff h4\">Resume</a></li>";
						}};

			

				if ($fName =="index-deutsch.php" || $fName=="resume-deutsch.php") {


					if ($fName == "index-deutsch.php"){
						echo "<li class=\"button inline\"><a href=\"index-deutsch.php\" class=\"current fff\">Hause</a></li>";
						} else {
							echo "<li class=\"button inline\"><a href=\"index-deutsch.php\" class=\"fff\">Hause</a></li>";
						};	

					if ($fName == "portfolio.php") {
						echo "<li class=\"button inline\"><a href=\"portfolio.php\" class=\"current fff\">Portfolio</a></li>";
					} else {
						echo "<li class=\"button inline\"><a href=\"portfolio.php\" class=\"fff\">Portfolio</a></li>";
					};	

					if ($fName == "resume-deutsch.php"){
						echo "<li class=\"button inline\"><a href=\"resume-deutsch.php\" class=\"current fff\">Lebenslauf</a></li>";
						} else {
							echo "<li class=\"button inline\"><a href=\"resume-deutsch.php\" class=\"fff\">Lebenslauf</a></li>";
						}};	

					
				echo "</ul>
				<hr>
					</nav></div>			
			</header>";

			?>