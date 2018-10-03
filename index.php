<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<title>Simon Bravard - Web design and stuff</title>

	<!-- CSS  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- CSS Vendor -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<!-- CSS Perso -->
	<link rel="stylesheet" type="text/css" href="css/style.css?timestamp=<?php echo time() ?> " media="screen" />
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>




<body>

	<!-- HEADER  -->

<header class="header_toggle" id="part1">
			<!-- NAV BAR  -->
<div class="slide_inside">

	<nav class="navbar navbar-expand-lg">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
			</button>
			<div class=" nav collapse navbar-collapse justify-content-md-end" id="nav">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link"href="#skills">Compétences</a></li>
					<li class="nav-item"><a class="nav-link"href="#portfolio">Portfolio</a></li>
					<li class="nav-item"><a class="nav-link"href="#contact">Contact</a></li>
				</ul>
			</div>
	</nav>

	<!-- <div class="background-img">
		<img class="img-responsive header_img" src="visuels/sublime_skills.jpg" alt="">
	</div> -->

	<div class="header_title">
			<h1 class="display-1">Tyra_Miso
			<p class="lead">Looking for a nice name :/</p>
			</h1>
	</div>

	<div class="arrow_down row justify-content-center">
		<i id="button" class="far fa-caret-square-down fa-5x"></i>
	</div>

</div>
</header>





<!-- MAIN CONTENTS
#1 SKILLS
#2 PORTFOLIO
#3 CONTACT
#4 FOOTER
-->
<main class="container-fluid">



															<!-- SKILLS SECTION  -->
<div id="parallax2">
	<div class="slide_inside">

		<section class="skills">
			<?php include 'simon_skills.php' ?>
		</section>

	</div>
</div>

															<!-- PORTFOLIO SECTION  -->
<div id="parallax3">
	<div class="slide_inside">
		<section class="portfolio">
			<?php include 'portfolio.php' ?>
		</section>
	</div>
</div>
															<!-- CONTACT SECTION -->
															<!-- FOOTER  -->



</main>







<!--  SCRIPTS PART -->

<!-- BOOTSTRAP  -->
<script src="bootstrap.js" charset="utf-8"></script>

<!-- JQuery -->
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous">
  </script>
<script src="js/parallax.js" charset="utf-8"></script>

<!--  JS SHEET -->
<script src="js/index_script.js"></script>
</body>
</html>
