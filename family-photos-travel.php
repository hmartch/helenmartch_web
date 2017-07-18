<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Family: Photos: Travel - HelenMartch.com</title>
	<meta name="description" content="A slideshow of our family travels." />
	<meta name="keywords" content="travel vacation family photo slide personal site Helen Martch Helen March" />
	<meta charset="windows-1252">
	<meta name="google-site-verification" content="hgbcQefWUSgp2t9BA0KJuCPJQGyOVdeemJ8h8sy7L9c" />
	<link rel="stylesheet" type="text/css" href="styles/hlm2011.css"/>
	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="styles/hlm2011-ie-lt9.css"/>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="data/JSONdata-travel.js" type="text/javascript"></script>
</head>
<body>
	<div id="photoside"></div>
	<div id="content">

	<header>
		<?php include "includes/heading.php"; ?>
		<?php include "includes/nav.php"; ?>
	</header>
	
	<div id="main">
		<h2>Photos &mdash; Travel</h2>
		<section>
		<!--<p></p>-->
		<h3></h3>
		<img src="/images/spacer.gif" id="slideimg" class="slide" alt="photo"/>
		<nav class="slide"><div class="left"><span class="first">first</span> | <span class="prev">previous</span></div> <div class="right"><span class="next">next</span> | <span class="last">last</span></div></nav>
		<div id="thumbcont">
			<div id="thumbs" class="clear"></div>
		</div>
		
		<h3 id="slidetitle"></h3>
		<p id="slidedesc"></p>
		<p id="slideloc"></p>
		</section>
	</div>
	
	<div id="side1" class="side">
		<h3>More Photos</h3>
		<ul>
			<li>Travel</li>
			<li><a href="family-photos-pets.php">Pets</a></li>
			<li><a href="family-photos-halloween.php">Halloween</a></li>
		</ul>
	</div>
	
	<div id="side2" class="side">
		<div id="biobits">
			<ul>
				<li></li>
			</ul>
		</div>
	</div>

	<div id="side3" class="side">
		<h3>Travel Locations</h3>
	</div>
	
	<?php include "includes/foot.php"; ?>
	
</div>
</body>
</html>