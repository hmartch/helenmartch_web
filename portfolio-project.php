<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Portfolio - HelenMartch.com</title>
	<meta name="description" content="This is my portfolio. Images, web sites, animations and more that I have worked on and/or created." id="metadesc"/>
	<meta name="keywords" content="portfolio projects samples web design front-end front end web development art computer graphics graphic design Helen Martch Helen March" id="metakeys"/>
	<meta charset="windows-1252">
	<meta name="google-site-verification" content="hgbcQefWUSgp2t9BA0KJuCPJQGyOVdeemJ8h8sy7L9c" />
	<link rel="stylesheet" type="text/css" href="styles/hlm2011.css"/>
	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="styles/hlm2011-ie-lt9.css"/>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="photoside"></div>
	<div id="content">

	<header>
		<?php include "includes/heading.php"; ?>
		<?php include "includes/nav.php"; ?>
	</header>
	
	<div id="main">
		<h2><!--Groupname or Piecename--></h2>
		<section class="piece">
			<figure class="right">
				<img src="" alt="" title="" />
			</figure>
			<h3><!--If Part of Group, Piecename, Otherwise Nothing--></h3>
			<p class="years"><!--years--></p>
			<div class="piecedesc"><!--description--></div>
			<p class="mat"><!--material--></p>
		</section>
				
		<!-- If there are relateds, they go here -->

	</div>
	
	<div id="side1" class="side">
		<?php include "includes/general-side1.php"; ?>
	</div>
	
	<div id="side2" class="side">
		<div id="biobits">
			<ul>
				<li></li>
			</ul>
		</div>
	</div>

	<div id="side3" class="side">
		<h3><!--More catname--></h3>
	</div>
	
	<?php include "includes/foot.php"; ?>
	<script src="data/JSONdata-portfolioCategories.js" type="text/javascript"></script>
	<script src="data/JSONdata-portfolioProjects.js" type="text/javascript"></script>
	<script src="js/jquery-1.7.1.js" type="text/javascript"></script>
	<script src="js/hlm2011.js" type="text/javascript"></script>
	
</div>
</body>
</html>