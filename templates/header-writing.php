<header class="header container Hinterkopf">
					<div class="clearfix center ">
						<h1 class="Tetra2">
						<?php
							if ($fName == "portfolio.php"){
								echo "Language is a funny thing, is it not?</h1>";
							} else {
								if ($fName == "ekridaat.php"){
									echo "Ekridaat</h1>";
								} else {
									if ($fName == "onespidercrack.php"){
										echo "One Spider Crack On The Stern</h1>";
											} else {
												if ($fName == "sylvette.php") {
													echo "Sylvette</h1>";
												} else { 
													if ($fName == "snowbirds.php") {
														echo "Snowbirds of Huron</h1>";
												} else { 
													if ($fName == "decision.opinion.php") {
													echo "Decision and Opinion in the Conceptual Age</h1>";
												} 
											}}}}}
								?>
				
						<ul class="list-reset">
							<li class="button inline"><a href="index.php"
							<?php
								if ($fName == "index.php"){
									echo "class = \"current Tetra3\"";
								} else {
									echo "class = \"Tetra3\"";
								}
								?>
							>Home</a></li>
							<li class="button inline"><a href="portfolio.php"
							<?php
								if ($fName == "portfolio.php" || $fName == "ekridaat.php" || $fName == "snowbirds.php" || $fName == "onespidercrack.php" || $fName == "sylvette.php"){
									echo "class = \"current Tetra3\"";
								} else {
									echo "class = \"Tetra3\"";
								}
								?>
							>Portfolio</a></li>
							<li class="button inline"><a href="resume.php" 
							<?php
								if ($fName == "resume.php"){
									echo "class = \"current Tetra3\"";
								} else {
									echo "class = \"Tetra3\"";
								}
								?>
							>Resume</a></li>
						</ul>
						<hr class="">
					</div>			
			</header>