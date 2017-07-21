<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Portfolio - HelenMartch.com</title>
	<meta name="description" content="This is my portfolio. Images, web sites, animations and more that I have worked on and/or created." id="metadesc"/>
	<meta name="keywords" content="portfolio projects samples web design front-end front end web development art computer graphics graphic design Helen Martch Helen March" id="metakeys"/>
	<?php include "includes/head.php"; ?>
</head>
<body>
	<div id="photoside"></div>
	<?php include "includes/header.php"; ?>
	<div id="content">
	
	<div id="main" class="portfolio">
		<h2 class="catname"><!--Category Name--></h2>
		<section class="clear">
  			<p class="catdesc"><!--Category description--></p>
		</section>
	</div>
	
	<div class="side">
		<?php include "includes/general-side1.php"; ?>
	</div>
	
	<script src="data/JSONdata-portfolioCategories.js" type="text/javascript"></script>
	<script src="data/JSONdata-portfolioProjects.js" type="text/javascript"></script>
	<?php include "includes/foot.php"; ?>
	
</div>
</body>
</html>