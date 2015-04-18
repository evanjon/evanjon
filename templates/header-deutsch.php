<header class="header container Hinterkopf">
					<div class="clearfix center ">
						<h1 class="Tetra2">
						<?php
									if ($fName == "index-deutsch.php"){
										echo "Hallo. Ich heiße Evan Jon.</h1>";
									} else {
												if ($fName == "resume-deutsch.php"){
													echo "Evan Jon Gennrich.</h1>
														<p class=\"mid-gray\">21 Jahre alt. Ann Arbor, Michigan, U.S.A.</p>
														<div class=\"center\">
															<p class=\"h4 mb0 mid-gray\">315 N. State St.</p>
															<p class=\"h4 mid-gray\">Ann Arbor, MI 48104</p>
														</div>";
													
														} else {
														if ($fName == "portfolio.php"){
															echo "Language is a funny thing, isn't it?</h1>";
														}}}
								?>
				
						<ul class="list-reset">
							<li class="button inline"><a href="index-deutsch.php"
							<?php
								if ($fName == "index.php" || $fName == "index-deutsch.php"){
									echo "class = \"current Tetra3\"";
								} else {
									echo "class = \"Tetra3\"";
								}
								?>
							>Hause</a></li>
							<li class="button inline"><a href="portfolio.php"
							<?php
								if ($fName == "portfolio.php"){
									echo "class = \"current Tetra3\"";
								} else {
									echo "class = \"Tetra3\"";
								}
								?>
							>Bestand</a></li>
							<li class="button inline"><a href="resume-deutsch.php" 
							<?php
								if ($fName == "resume-deutsch.php"){
									echo "class = \"current Tetra3\"";
								} else {
									echo "class = \"Tetra3\"";
								}
								?>
							>Lebenslauf</a></li>
						</ul>
						<hr class="">
					</div>			
			</header>